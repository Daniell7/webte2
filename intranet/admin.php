<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Administrácia webu ÚAM</title>
    <link rel="stylesheet" href="../css/admin-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
</head>
<body>
<div id="content">
    <?php
    require_once("admin_functions.php");
    if (isset($_POST["save_profile_submit"])) {
        session_start();
        dbSaveUserData($_SESSION["username"]);
        show_content();
    } elseif (isset($_POST["login_submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $ds = @ldap_connect('ldap://ldap.stuba.sk', 636);
        @ldap_set_option($ds, LDAP_OPT_PROTOCOL_VERSION, 3);
        $ldapBindResult = @ldap_bind($ds, 'uid=' . $username . ',ou=People,dc=stuba,dc=sk', $password);
        if ($ldapBindResult && isAllowedLogin($username)) {
            session_start();
            $_SESSION["username"] = $username;
            show_content();
        } else {
            ?>
            <p>Nesprávne meno alebo heslo!</p>
            <?php
        }
    } else {
        require_once("login_form.php");
    }
    ?>
</div>
<script src="jquery-3.1.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: patrik
 * Date: 21/05/17
 * Time: 12:12
 */

