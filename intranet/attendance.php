<link rel="stylesheet" href="css/style.css">
<?php
require_once("../config.php");
require_once("calendar_functions.php");
if (!isset($_GET["month"]) && !isset($_GET["year"])) {
    $month = date("m");
    $year = date("Y");
} else {
    $month = $_GET["month"];
    $year = $_GET["year"];
}
$year_month = "$year-$month";
?>
<label for="month_year" id="month_year_label">Mesiac a rok</label><br>
<input type="month" id="month_year" value="<?= $year_month ?>">
<a href="edit.php<?php
echo "?month=$month&year=$year";
?>" class="action_button date_parametrized" id="edit_button">Upraviť</a>
<h2>Typ absencie:</h2>
<label>
    <input type="radio" value="1" checked name="absence_type[]">služobná cesta<br>
</label>
<label>
    <input type="radio" value="2" name="absence_type[]">dovolenka<br>
</label>
<label>
    <input type="radio" value="3" name="absence_type[]">plánovaná dovolenka<br>
</label>
<label>
    <input type="radio" value="4" name="absence_type[]">PN<br>
</label>
<label>
    <input type="radio" value="5" name="absence_type[]">OČR<br>
</label>
<a href="index.php<?php
echo "?month=$month&year=$year";
?>"" class="action_button" id="save_button">Uložiť</a>
<table id="calendar">
    <?php
    $days = cal_days_in_month(CAL_GREGORIAN, $month, $year);
    buildCalendar($days, $month, $year);
    ?>
</table>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/functions.js"></script>
<script src="js/editScript.js"></script>
<script src="js/indexScript.js"></script>