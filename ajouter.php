<?php
  require("../config/connexion.php");
  require("../config/commandes.php");

if (isset($_FILES['fichier']) AND !empty($_FILES['fichier']['name'])) {
	$file_name = $_FILES['fichier']['name'];
	$extensionsValides = array('jpg', 'jpeg', 'png', 'gif', 'JPG', 'JPEG', 'PNG', 'GIF');
	$extensionUpload = strtolower(substr(strrchr($file_name, '.'), 1));
	$file_tmp_name = $_FILES['fichier']['tmp_name'];
	$file_dest = 'img/'.$file_name; //.".".$extensionUpload;
	$extensionTest = in_array($extensionUpload, $extensionsValides);
	if ($extensionTest) {
		$resultat = move_uploaded_file($file_tmp_name, $file_dest);
		if ($resultat) {
			if (!empty($_POST['titre']) AND !empty($_POST['nom']) AND !empty($_POST['cat']) AND !empty($_POST['date']) AND !empty($_POST['prix']) AND !empty($_POST['description'])) {
				$stock = htmlspecialchars(strip_tags($_POST['titre']));
				$nom = htmlspecialchars(strip_tags($_POST['nom']));
				$cat = htmlspecialchars(strip_tags($_POST['cat']));
				$prix = htmlspecialchars(strip_tags($_POST['prix']));
				$description = htmlspecialchars(strip_tags($_POST['description']));
				$date = htmlspecialchars(strip_tags($_POST['date']));

				$insertInfo = $access -> prepare("INSERT INTO  produits(stock, nom, categorie, prix, description, image, date) VALUES(?,?,?,?,?,?,?)");
				$insertInfo -> execute(array($stock, $nom, $cat, $prix, $description, $file_name, $date));
				if($insertInfo){
					echo "Informations articles enregistrées avec succès";
				}else{
					echo "Erreur lors de l'envoie des Informations";
				}			
			}else{
				echo "Assurez vous de remplire tous les champs.";
			}
		}
	}else{
		echo "Votre image doit être au format jpg, jpeg, gif ou png.";
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>enregistrementP</title>
	<link rel="stylesheet" type="text/css" href="style-aj.css">
</head>
<body>

	<form method="post" action="#" enctype="multipart/form-data">
		<fieldset>
			<legend>Enregistrement de Produits</legend>

			<input type="file" name="fichier" id="image" required><br><br>

			<label for="date">Date d'ajout</label><br>
			<input type="date" name="date" id="date" required><br><br>

			<label for="titre">Quantité du produit</label><br>
			<input type="number" name="titre" id="titre" required><br><br>

			<label for="nom">Nom du produit</label><br>
			<input type="text" name="nom" id="nom" required><br><br>

			<label for="categorie">Selectionner une catégorie pour l'article</label><br>
			<select name="cat" id="categorie">
				<option value="info">Informatique</option>
				<option value="tel">Téléphone</option>
				<option value="electro">Electronique</option>
				<option value="beau">Beauté</option>
				<option value="bebe">Produit4bébé</option>
				<option value="agri">Agriculture</option>
				<option value="modeH">ModeHomme</option>
				<option value="modeF">ModeFemme</option>
				<option value="autres">AutresCatégories</option>
			</select><br><br>

			<label for="prix">Prix</label><br>
			<input type="number" name="prix" id="prix" required><br><br>

			<label for="descrip">Description</label><br>
			<textarea type="text" name="description" id="descrip" required></textarea> <br><br>

			<input type="submit" name="soumettre" value="Enregistrer le Produit"> <input type="reset" name="" value="Effacer">
			<p>Si vous desirez supprimer un article <a href="supprimer.php">cliquez-ici</a></p>
		</fieldset>
	</form>

</body>
</html>