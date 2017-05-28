/**
 * Created by patrik on 08/03/17.
 */
(function() {
    initDate();
    assignOnChangeDate();
    initAbsences();
})();

function assignOnChangeDate() {
    $("#month_year").on("input", onChangeDate);
}