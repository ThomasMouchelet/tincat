<?php
    require("head.php");

    // Si session pseudo vide
        // rediriger vers login
?>

<a href="functions/disconnect.php">Disconnect</a>

<?php
echo "Bonjour " . $_SESSION["pseudo"];

