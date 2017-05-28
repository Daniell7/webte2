<?php
/**
 * Created by PhpStorm.
 * User: patrik
 * Date: 27/05/17
 * Time: 20:09
 */

require_once("../config.php");
define("DB_CONNECTION_URL", "mysql:host=$servername;dbname=" . $dbname . ";charset=utf8");
define("DB_USERNAME", $username);
define("DB_PASSWORD", $password);

function isAllowedLogin($login)
{
    $db = new PDO(DB_CONNECTION_URL, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("SELECT ldap_login FROM site_user WHERE ldap_login = ?");
    $stmt->bindValue(1, $login);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function dbLoadUserRoles($username)
{
    $db = new PDO(DB_CONNECTION_URL, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("SELECT DISTINCT r.name role_name FROM role r
                                    JOIN user_role ur ON ur.role_id = r.id
                                    JOIN site_user u ON ur.user_id = u.id
                                    WHERE u.ldap_login = ?");
    $stmt->bindValue(1, $username);
    $stmt->execute();
    $roles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $roleNames = [];
    foreach ($roles as $role) {
        $roleNames[] = $role["role_name"];
    }
    return $roleNames;
}

function show_content()
{
    require_once("admin_content.php");
}

function dbLoadUserData($username)
{
    $db = new PDO(DB_CONNECTION_URL, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("SELECT first_name, last_name, title_before, title_after, office, phone, department, function, news_subscribed FROM site_user WHERE ldap_login = ?");
    $stmt->bindValue(1, $username);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function dbSaveUserData($username)
{
    $firstName = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
    $lastName = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
    $titleBefore = isset($_POST["title_before"]) ? $_POST["title_before"] : "";
    $titleAfter = isset($_POST["title_before"]) ? $_POST["title_before"] : "";
    $office = isset($_POST["office"]) ? $_POST["office"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $department = isset($_POST["department"]) ? $_POST["department"] : "";
    $function = isset($_POST["function"]) ? $_POST["function"] : "";
    $isSubscribedToNews = isset($_POST["is_subscribed"]) ? $_POST["is_subscribed"] : 0;

    $db = new PDO(DB_CONNECTION_URL, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("UPDATE site_user SET first_name = :first_name, last_name = :last_name, title_before = :title_before, title_after = :title_after, office = :office, phone = :phone, department = :department, function = :function, news_subscribed = :news_subscribed WHERE ldap_login = :username");
    $stmt->bindValue("first_name", $firstName);
    $stmt->bindValue("last_name", $lastName);
    $stmt->bindValue("title_before", $titleBefore);
    $stmt->bindValue("title_after", $titleAfter);
    $stmt->bindValue("office", $office);
    $stmt->bindValue("phone", $phone);
    $stmt->bindValue("department", $department);
    $stmt->bindValue("function", $function);
    $stmt->bindValue("username", $username);
    $stmt->bindValue("news_subscribed", $isSubscribedToNews);
    $stmt->execute();
    $stmt->closeCursor();
}

function dbLoadAllUserData() {
    $db = new PDO(DB_CONNECTION_URL, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $db->prepare("SELECT first_name, last_name, title_before, title_after, office, phone, department, function FROM site_user");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function hasUserOneRequiredRole($requiredRoles, $username) {
    $hasOne = false;
    $userRoles = dbLoadUserRoles($username);
    foreach ($requiredRoles as $requiredRole) {
        if (in_array($requiredRole, $userRoles)) {
            $hasOne = true;
            break;
        }
    }
    return $hasOne;
}