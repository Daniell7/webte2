/**
 * Created by patrik on 26/02/17.
 */

var currentAbsences;
var editedAbsences;

function initDate() {
    var month_year = $("#month_year");
    if (!month_year.val()) {
        var date = new Date();
        var month = date.getMonth() + 1;
        var m = (month < 10) ? ("0" + month) : ("" + month);
        month_year.val(date.getFullYear() + "-" + m);
    }
}

function onChangeDate() {
    var calendar = $("#calendar");
    var month_year = $("#month_year").val();
    if (month_year) {
        var pos = month_year.search("-");
        var year = month_year.substr(0, pos);
        var month = month_year.substr(pos + 1);
        changeButtonHref(month, year);
        calendar.fadeOut(200).promise().done(function () {
            $.post("ajax/calendar_data.php", {month: month, year: year}, function (data) {
                calendar.empty();
                calendar.html(data);
                calendar.fadeIn(200);
            });
        });
    }
}

function changeButtonHref(month, year) {
    var button = $(".date_parametrized");
    var href = button.attr("href");
    var pos = href.indexOf("?");
    var newHref = href.substr(0, (pos === -1 ? href.length : pos));
    newHref += "?month=" + month + "&year=" + year;
    button.attr("href", newHref);
}

function addCellActionListener() {
    var mouseEnterAllowed = false;
    var cellMouseDown = function () {
        event.preventDefault();
        var cell = $(this);
        if (cell.hasClass("absence")) {
            clearCell(cell);
        } else {
            mouseEnterAllowed = true;
            setCellAbsence(cell);
        }
    };

    var cellMouseEnter = function () {
        if (mouseEnterAllowed) {
            event.preventDefault();
            var cell = $(this);
            setCellAbsence(cell);
        }
    };

    var cellMouseUp = function () {
        event.preventDefault();
    };

    var editableCells = $("td").not(":first-child").not(".abt_wknd");
    editableCells.mousedown(cellMouseDown);
    editableCells.mouseenter(cellMouseEnter);
    editableCells.mouseup(cellMouseUp);
    $("body").mouseup(function () {
        mouseEnterAllowed = false;
    });
}

function clearCell(cell) {
    cell.removeAttr("title");
    cell.removeAttr("class");
    cell.empty();
    removeNewAbsence(cell);
}

function setCellAbsence(cell) {
    var type_no = $("[name='absence_type[]']:checked").val() - 1;
    var absence_classes = ["abt_btr", "abt_vac", "abt_pvc", "abt_slv", "abt_sfc"];
    var absence_shortcuts = ["SCE", "DOV", "PDO", "PN", "OČR"];
    var absence_titles = ["služobná cesta", "dovolenka", "plánovaná dovolenka", "PN", "OČR"];
    var absence_class = absence_classes[type_no];
    var absence_shortcut = absence_shortcuts[type_no];
    var absence_title = absence_titles[type_no];
    cell.attr("class", "absence");
    cell.addClass(absence_class);
    cell.html(absence_shortcut);
    cell.attr("title", absence_title);
    addNewAbsence(cell, absence_class);
}

function addNewAbsence(cell, absence_type) {
    var cell_id = cell.attr("id");
    var id = cell_id.substr(2, cell_id.substr(2).indexOf("_"));
    var date = cell_id.substr(cell_id.substr(2).indexOf("_") + 3);
    if (!(id in editedAbsences)) {
        editedAbsences[id] = {};
    }
    editedAbsences[id][date] = absence_type;
}

function removeNewAbsence(cell) {
    var cell_id = cell.attr("id");
    var id = cell_id.substr(2, cell_id.substr(2).indexOf("_"));
    var date = cell_id.substr(cell_id.substr(2).indexOf("_") + 3);
    var absences = editedAbsences[id];
    delete absences[date];
    if (!Object.keys(absences).length) {
        delete editedAbsences[id];
    }
}

function initAbsences() {
    var absence_cells = $(".absence");
    currentAbsences = {};
    absence_cells.each(function (_, cell) {
        cell = $(cell);
        var cell_id = $(cell).attr("id");
        var id = cell_id.substr(2, cell_id.substr(2).indexOf("_"));
        var date = cell_id.substr(cell_id.substr(2).indexOf("_") + 3);
        var absence_class = $(cell).attr("class");
        var absence_type = /abt_\w+/.exec(absence_class)[0];
        if (!(id in currentAbsences)) {
            currentAbsences[id] = {};
        }
        currentAbsences[id][date] = absence_type;
    });
    editedAbsences = $.extend(true, {}, currentAbsences);
}