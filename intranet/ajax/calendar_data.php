<?php
/**
 * Created by PhpStorm.
 * User: patrik
 * Date: 04/03/17
 * Time: 13:51
 */

$month = $_REQUEST["month"];
$year = $_REQUEST["year"];
$days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

require_once("../calendar_functions.php");

buildCalendar($days, $month, $year);