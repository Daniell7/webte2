<?php
/**
 * Created by PhpStorm.
 * User: patrik
 * Date: 14/03/17
 * Time: 12:52
 */

if (isset($_REQUEST["absences"])) {
    $js_absences = $_REQUEST["absences"];
    require_once("../config.php");
    $conn = new PDO(CONNECTION_URL, USERNAME, PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $queryAndValues = buildQueryFromAbsences($js_absences);
    $stmt = $conn->prepare($queryAndValues["query"]);
    bindValues($stmt, $queryAndValues["values"]);
    $stmt->execute();
}

function buildQueryFromAbsences($employees) {
    $query = "INSERT INTO absence (date, employee_id, absence_type_id) VALUES ";
    $absenceClasses = ["abt_btr", "abt_vac", "abt_pvc", "abt_slv", "abt_sfc"];
    $i = 0;
    $absenceCount = 0;
    $countEmployees = count($employees);
    $values = [];
    foreach ($employees as $id=>$empAbsences) {
        $j = 0;
        foreach ($empAbsences as $date=>$type) {
            $query .= "(?, ?, ?)";
            $absenceType = array_search($type, $absenceClasses) + 1;
            $values[] = ["date" => $date, "type" => $absenceType, "id" => $id];
            if ($j < count($empAbsences) - 1) {
                $query .= ", ";
            }
            if ($i === $countEmployees - 1) {
                $j++;
            }
            $absenceCount++;
        }
        $i++;
    }
    return ["query" => $query, "values" => $values];
}

function bindValues($stmt, $values) {
    $count = count($values);
    for ($i = 0; $i < $count; $i++) {
        $stmt->bindValue(3 * $i + 1, $values[$i]["date"]);
        $stmt->bindValue(3 * $i + 2, $values[$i]["id"]);
        $stmt->bindValue(3 * $i + 3, $values[$i]["type"]);
    }
}