<?php
session_start();
if(!$_SESSION['mdp']){
	header('Location: connexion_ad.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Administration</title>
	<link rel="stylesheet" href="admin_space.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">    
	<link rel="stylesheet" href="/style/Hover-master/css/hover.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="titre">
		<h1>Page d'Administration</h1>
		<p>Vous êtes connecté en tant que administrateur. Vous controlez absolument Tout</p>
	</div>
	
	<nav>
		<ul>
			<li>
				<a href="membre.php" class="leBouton">MEMBRES</a>
			</li>
			<li>
				<a href="Cat_article.php" class="leBouton">ARTICLES</a>
			</li>
			<li>
				<a href="" class="leBouton">COMMANDES</a>
			</li>
			<li>
				<a href="" class="leBouton">SUGGESTIONS</a>
			</li>
			
			
		</ul>
		<div class="dec">
			<a href="deconnexion.php" class="deco">DECONNEXION</a>
		</div>
	</nav>


	
</body>
</html>