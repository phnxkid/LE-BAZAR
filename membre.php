<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=lebazardata;', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
if(!$_SESSION['mdp']){
	header('Location: connexion_ad.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membres</title>
</head>
<body>
    <!--Debut-->
    <?php
        $recupUser = $bdd -> query('SELECT * FROM user');
        while ($user = $recupUser->fetch()) {
            # code...
            ?>
            <p><?= $user['user_id']; ?> <?= $user['user_nom']; ?>  <?=$user['user_prenom']; ?> <?= $user['user_email']; ?> <a href="bannir.php?id=<?= $user['user_id'];?>" style="color: red; background: blue;">Bannir le membre</a> </p>  
            <?php
        }
    ?>

    <!--Fin-->
    
</body>
</html>