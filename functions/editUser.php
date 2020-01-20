<?php
echo "Edit User";

require "database.php";

$req = $db->prepare("UPDATE users SET pseudo=:newPseudo WHERE id=:user_id");
$req->bindParam(":newPseudo", $_POST["newPseudo"]);
$req->bindParam(":user_id", $_POST["user_id"]);
$req->execute();

header("Location: ../profils.php");