<?php
require_once("admin_functions.php");

require_once("admin_menu.php");
?>
<div id="subcontent">
    <?php
    $username = $_SESSION["username"];

    if (hasUserOneRequiredRole(["hr", "admin"], $username)) {
        require_once("admin_panel.php");
    }
    ?>
    <div id="main-content">
        <?php
        require_once("profile_form.php");
        ?>
    </div>
</div>
