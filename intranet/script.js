$("#users-editing").click(function() {
    $.get("edit_users.php", function(data) {
        $("#main-content").html(data);
    });
});

$("#my-profile").click(function() {
    $.get("profile_form.php", function(data) {
        $("#main-content").html(data);
    });
});

$("#tasks-table").click(function() {
    $.get("tasks_table.php", function(data) {
        $("#main-content").html(data);
    });
});

$("#attendance").click(function() {
    $.get("attendance.php", function(data) {
        $("#main-content").html(data);
    });
});