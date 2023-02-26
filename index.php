<?php
session_start();
$notification = "";
if(isset($_POST['connect_btn'])){ //Si l'admin clique pour se connecter
    if (!empty($_POST['identifiant']) AND !empty($_POST['mdp'])) {
        //si les deux champs sont remplis
        $id_par_defaut = "ZPHOENIX";
        $mdp_par_defaut = "admin1234";
        $id_saisie = htmlspecialchars( $_POST['identifiant']);
        $mdp_saisi = htmlspecialchars( $_POST['mdp']);
        if ($id_saisie == $id_par_defaut AND $mdp_saisi == $mdp_par_defaut) {
            # Si les données entrées correspondent alors on est redirigé vers l'espace admin
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: admin_space.php');
        }else {
            $notification = "Identifiant ou mot de passe incorrecte";
        }
    }else{
        $notification = "Veuillez complèter tous les champs";
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../style/admin_conx_style.css">
    <title>LEBAZAR | Administration</title>
</head>
<body>
    <form action="" method="post">
        <?php
        echo "$notification";
        ?>
        <div class="container">
            <div class="description">ADMIN CONNEXION</div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Identifiant</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="identifiant">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="mdp">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
            </div>
            <button type="submit" class="btn btn-primary" name="connect_btn">Soumettre</button>
        </div>
    </form>
    
</body>
</html>