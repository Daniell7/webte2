<?php
require_once("admin_functions.php");
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$username = $_SESSION["username"];
$userData = dbLoadUserData($username);
$firstName = $userData["first_name"];
$lastName = $userData["last_name"];
$titleBefore = $userData["title_before"];
$titleAfter = $userData["title_after"];
$office = $userData["office"];
$phone = $userData["phone"];
$department = $userData["department"];
$function = $userData["function"];
$subscribed = intval($userData["news_subscribed"]) > 0;
?>
<form method="post" action="admin.php" id="profile-form">
    <div class="input-field">
        <label for="first-name">Meno</label>
        <input type="text" id="first-name" name="first_name" value="<?= $firstName ?>">
    </div>
    <div class="input-field">
        <label for="last-name">Priezvisko</label>
        <input type="text" id="last-name" name="last_name" value="<?= $lastName ?>">
    </div>
    <div class="input-field">
        <label for="title-before">Titul pred menom</label>
        <input type="text" id="title-before" name="title_before" value="<?= $titleBefore ?>">
    </div>
    <div class="input-field">
        <label for="title-after">Titul za menom</label>
        <input type="text" id="title-after" name="title_after" value="<?= $titleAfter ?>">
    </div>
    <div class="input-field">
        <label for="office">Miestnosť</label>
        <input type="text" id="office" name="office" value="<?= $office ?>">
    </div>
    <div class="input-field">
        <label for="phone">Telefón</label>
        <input type="text" id="phone" name="phone" value="<?= $phone ?>">
    </div>
    <div class="input-field">
        <label for="department">Oddelenie</label>
        <input type="text" id="department" name="department" value="<?= $department ?>">
    </div>
    <div class="input-field">
        <label for="function">Funkcia</label>
        <input type="text" id="function" name="function" value="<?= $function ?>">
    </div>
    Odoberanie aktualít<br>
    <label for="is-subscribed-yes">zapnuté</label>
    <input type="radio" id="is-subscribed-yes" name="is_subscribed" value="1"<?php
    if ($subscribed) {
        echo " checked";
    }
    ?>>
    <br>
    <label for="is-subscribed-no">vypnuté</label>
    <input type="radio" id="is-subscribed-no" name="is_subscribed" value="0"<?php
    if (!$subscribed) {
        echo " checked";
    }
    ?>>
    <br><br>
    <button type="submit" name="save_profile_submit">Uložiť</button>
</form>