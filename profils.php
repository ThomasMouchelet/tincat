<?php
    require("head.php");

    if( empty($_SESSION) ){
        header("Location: login.php");
    }
    echo "Bonjour " . $_SESSION["pseudo"];
?>

<a href="functions/disconnect.php">Disconnect</a>

<!-- ************************************ -->
<!-- Afficher les utilisateurs stocké dans la BDD sauf moi -->
<!-- ************************************ -->


<div class="users">
    <?php
    // 1 : connect to database
    require("functions/database.php");
    // 2 : prepare request (SELECT)
    $req = $db->prepare("SELECT pseudo FROM users WHERE pseudo <> :pseudo");
    $req->bindParam(":pseudo", $_SESSION["pseudo"]);
    // 3 : execute
    $req->execute();
    // 4 : boucle
    while($result = $req->fetch(PDO::FETCH_ASSOC)){
        // var_dump($result["pseudo"]);
        if( $_SESSION["pseudo"] != $result["pseudo"] ){
            echo "<h2>" . $result["pseudo"] . "</h2>";
        }
    }
    ?>
</div>

