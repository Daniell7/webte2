<table id="edit-users">
    <thead>
    <tr>
        <th>#</th>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Titul pred menom</th>
        <th>Titul za menom</th>
        <th>Miestnosť</th>
        <th>Telefón</th>
        <th>Oddelenie</th>
        <th>Funkcia</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once("admin_functions.php");
    $users = dbLoadAllUserData();
    foreach ($users as $no => $user) {
        echo "<tr><td>".($no + 1).".</td><td contenteditable='true'>".$user["first_name"]."</td><td contenteditable='true'>".$user["last_name"]."</td><td contenteditable='true'>".$user["title_before"]."</td><td contenteditable='true'>".$user["title_after"]."</td><td contenteditable='true'>".$user["office"]."</td><td contenteditable='true'>".$user["phone"]."</td><td contenteditable='true'>".$user["department"]."</td><td contenteditable='true'>".$user["function"]."</td></tr>";
    }
    ?>
    </tbody>
</table>