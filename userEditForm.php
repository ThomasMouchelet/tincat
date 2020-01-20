<?php
    require "head.php";

    var_dump($_GET["user_id"]);
?>

<form action="functions/editUser.php" method="post">
    <input type="text" name="newPseudo">
    <input type="hidden" value="<?php echo $_GET["user_id"]; ?>" name="user_id">
    <input type="submit" value="modifier">
</form>