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
    $queryAndValues = buildQueriesFromAbsences($js_absences);
    $queries = $queryAndValues["queries"];
    $values = $queryAndValues["values"];
    foreach ($queries as $index=>$query) {
        $stmt = $conn->prepare($query);
        bindValues($stmt, $values[$index]);
        $stmt->execute();
    }
}

function buildQueriesFromAbsences($employees) {
    $queries = [];
    $values = [];
    foreach ($employees as $id=>$empAbsences) {
        foreach ($empAbsences as $date=>$type) {
            $queries[] = "DELETE FROM absence WHERE employee_id = ? AND date = ?";
            $values[] = ["date" => $date, "id" => $id];
        }
    }
    return ["queries" => $queries, "values" => $values];
}

function bindValues($stmt, $values) {
    $stmt->bindValue(1, $values["id"]);
    $stmt->bindValue(2, $values["date"]);
}