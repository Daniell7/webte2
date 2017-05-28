
/**
 * Created by patrik on 08/03/17.
 */
(function () {
    addCellActionListener();
    initAbsences();
    assignSaveButtonAction();
    assignNamePopupLinkClick();
})();

function createdAndUpdatedAbsences() {
    var createdAndUpdatedAbsences = {"created": {}, "updated": {}};
    var createdAbsences = createdAndUpdatedAbsences["created"];
    var updatedAbsences = createdAndUpdatedAbsences["updated"];
    for (var eId in editedAbsences) {
        if (editedAbsences.hasOwnProperty(eId)) {
            var editedEmployee = editedAbsences[eId];
            if (currentAbsences.hasOwnProperty(eId)) {
                var currentEmployee = currentAbsences[eId];
                for (var date in editedEmployee) {
                    if (editedEmployee.hasOwnProperty(date)) {
                        if (currentEmployee.hasOwnProperty(date)) {
                            if (editedEmployee[date] !== currentEmployee[date]) {
                                if (!updatedAbsences.hasOwnProperty(eId)) {
                                    updatedAbsences[eId] = {};
                                }
                                updatedAbsences[eId][date] = editedEmployee[date];
                            }
                        } else {
                            if (!createdAbsences.hasOwnProperty(eId)) {
                                createdAbsences[eId] = {};
                            }
                            createdAbsences[eId][date] = editedEmployee[date];
                        }
                    }
                }
            } else {
                createdAbsences[eId] = editedEmployee;
            }
        }
    }
    return createdAndUpdatedAbsences;
}

function deletedAbsences() {
    var deletedAbsences = {};
    for (var eId in currentAbsences) {
        if (currentAbsences.hasOwnProperty(eId)) {
            var currentEmployee = currentAbsences[eId];
            if (editedAbsences.hasOwnProperty(eId)) {
                var editedEmployee = editedAbsences[eId];
                for (var date in currentEmployee) {
                    if (currentEmployee.hasOwnProperty(date)) {
                        if (!editedEmployee.hasOwnProperty(date)) {
                            if (!deletedAbsences.hasOwnProperty(eId)) {
                                deletedAbsences[eId] = {};
                            }
                            deletedAbsences[eId][date] = currentEmployee[date];
                        }
                    }
                }
            } else {
                deletedAbsences[eId] = currentEmployee;
            }
        }
    }
    return deletedAbsences;
}

function persistInsert(absences) {
    persist(absences, "insert");
}

function persistUpdate(absences) {
    persist(absences, "update");
}

function persistDelete(absences) {
    persist(absences, "delete");
}

function persist(absences, action) {
    switch (action) {
        case "insert":
            $.post("ajax/insert_absences.php", {absences: absences}, function(data) {
                console.log(data);
            });
            break;
        case "update":
            $.post("ajax/update_absences.php", {absences: absences}, function(data) {
                console.log(data);
            });
            break;
        case "delete":
            $.post("ajax/delete_absences.php", {absences: absences}, function(data) {
                console.log(data);
            });
            break;
        default:
            console.log("Unknown action \"" + action + "\" for processing of the data!");
    }
}

function assignSaveButtonAction() {
    $("#save_button").click(function () {
        //event.preventDefault();
        var cua = createdAndUpdatedAbsences();
        var da = deletedAbsences();
        var ca = cua["created"];
        var ua = cua["updated"];
        if (Object.keys(ca).length) {
            persistInsert(ca);
        }
        if (Object.keys(ua).length) {
            persistUpdate(ua);
        }
        if (Object.keys(da).length) {
            persistDelete(da);
        }
    });
}