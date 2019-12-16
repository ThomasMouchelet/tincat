<?php
    require("head.php");

    if( empty($_SESSION) ){
        header("Location: login.php");
    }
?>

<a href="functions/disconnect.php">Disconnect</a>

<!-- ************************************ -->
<!-- Afficher les utilisateurs -->
<!-- ************************************ -->

<?php
echo "Bonjour " . $_SESSION["pseudo"];

