<?php

function employees()
{
    require_once("config.php");
    $conn = new PDO(CONNECTION_URL, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT first_name, last_name, id FROM site_user
                              ORDER BY last_name, first_name";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt = null;
    $conn = null;
    return $employees;
}

function loadAbsences($month, $year)
{
    require_once("config.php");
    $conn = new PDO(CONNECTION_URL, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT u.id, abs.date, abt.type_no, abt.shortcut_sk, abt.name_sk FROM absence_type abt
                            JOIN absence abs ON abs.absence_type_id = abt.type_no
                            JOIN site_user u ON abs.employee_id = u.id
                            WHERE MONTH(date) = :month AND year(date) = :year";
    $stmt = $conn->prepare($query);
    $stmt->bindValue(":month", $month);
    $stmt->bindValue(":year", $year);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function buildCalendar($days_n, $month, $year) {
    $employees = employees();
    $absences = loadAbsences($month, $year);
    echo '<tr><th rowspan="2">Meno</th>';
    for ($i = 1; $i <= $days_n; $i++) {
        echo "<th>$i.</th>";
    }
    echo "</tr><tr>";
    $daysOfWeek = array("Po", "Ut", "St", "Št", "Pi", "So", "Ne");
    for ($i = 1; $i <= $days_n; $i++) {
        setlocale(LC_TIME, "sk_SK");
        $datetime = strtotime("$year-$month-$i");
        $dayOfWeek = $daysOfWeek[(date("w", $datetime) + 6) % 7];
        //$dayOfWeek = date("w", $datetime);
        echo "<th>$dayOfWeek</th>";
    }
    echo "</tr>";

    foreach ($employees as $employee) {
        echo "<tr><td><div>$employee[first_name] $employee[last_name]</div></td>";
        if ($absencesForEmployee = absencesForEmployee($employee["id"], $absences)) {
            $dates = [];
            $days = [];
            foreach ($absencesForEmployee as $absence) {
                $dates[] = $absence["date"];
                $days[] = intval(substr($absence["date"], 8));
            }
            $date_i = 0;
            for ($day = 1; $day <= $days_n; $day++) {
                if (in_array($day, $days)) {
                    $absenceForDate = absenceForDate($dates[$date_i], $absencesForEmployee);
                    $absenceType = $absenceForDate["type_no"];
                    $absenceShortcut = $absenceForDate["shortcut_sk"];
                    $absenceTitle = $absenceForDate["name_sk"];
                    $absenceEmployeeId = $absenceForDate["id"];
                    $cellAbsenceClass = cellClassForAbsenceType($absenceType);
                    $date_i++;
                    $id_date = "c_$absenceEmployeeId"."_"."$year-$month-$day";
                    echo "<td class='absence " . $cellAbsenceClass . "' title='" . $absenceTitle . "' id='" . $id_date . "'>" . $absenceShortcut . "</td>";
                } else {
                    if (isWeekend($day, $month, $year)) {
                        echo "<td class='abt_wknd'></td>";
                    } else {
                        $absenceEmployeeId = $employee["id"];
                        $id_date = "c_$absenceEmployeeId"."_"."$year-$month-$day";
                        echo "<td id='" . $id_date . "'></td>";
                    }
                }
            }
        } else {
            for ($day = 1; $day <= $days_n; $day++) {
                $absenceEmployeeId = $employee["id"];
                $id_date = "c_$absenceEmployeeId"."_"."$year-$month-$day";
                if (isWeekend($day, $month, $year)) {
                    echo "<td class='abt_wknd' id='" . $id_date . "'></td>";
                } else {
                    echo "<td id='" . $id_date . "'></td>";
                }
            }
        }
        echo "</tr>";
    }
    $stmt = null;
    $conn = null;
    return $employees;
}

function absenceForDate($date, $absences)
{
    $key = array_search($date, array_column($absences, "date"));
    return $absences[$key];
}

function cellClassForAbsenceType($type_no)
{
    switch ($type_no) {
        case 1:
            return "abt_btr";
        case 2:
            return "abt_vac";
        case 3:
            return "abt_pvc";
        case 4:
            return "abt_slv";
        case 5:
            return "abt_sfc";
        default:
            return "no_type";
    }
}

function absencesForEmployee($id, $array)
{
    $absences = [];
    foreach ($array as $key => $val) {
        if ($val['id'] === $id) {
            $absences[] = $val;
        }
    }
    return $absences;
}

function isWeekend($day, $month, $year)
{
    $str_date = strtotime("$year-$month-$day");
    $date = date('Y-m-d', $str_date);
    return (date('N', strtotime($date)) >= 6);
}