<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=lebazardata;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if (isset($_GET['id']) AND !empty($_GET['id'])) {
    # code...
    $getid = $_GET['id'];
    $recupUser = $bdd -> prepare('SELECT * FROM user WHERE user_id = ?');
    $recupUser -> execute(array($getid));
    if ($recupUser -> rowCount() > 0) {
        # code...
        $bannirUser = $bdd -> prepare('DELETE FROM user WHERE user_id = ?');
        $bannirUser ->execute(array($getid));

        header('Location: membre.php');
    }else{
        echo "Aucun utilisateur trouvé";
    }
}else {
    # code...
    echo "L'identifiant n'a pas été retrouvé";
}

?>