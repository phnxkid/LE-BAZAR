<?php

  require("../config/commandes.php");



  if (isset($_FILES['fichier']) AND !empty($_FILES['fichier']['name'])) {
    $file_name = $_FILES['fichier']['name'];
    $extensionsValides = array('jpg', 'jpeg', 'png', 'gif');
    $extensionUpload = strtolower(substr(strrchr($file_name, '.'), 1));
    $file_tmp_name = $_FILES['fichier']['tmp_name'];
    $file_dest = '../pictures/img/'.$file_name;
    $extensionTest = in_array($extensionUpload, $extensionsValides);
    if ($extensionTest) {
      $resultat = move_uploaded_file($file_tmp_name, $file_dest);
      if ($resultat) {
        $stock = htmlspecialchars(strip_tags($_POST['Qt']));
        $nom = htmlspecialchars(strip_tags($_POST['nom']));
        $cat = htmlspecialchars(strip_tags($_POST['cat']));
        $prix = htmlspecialchars(strip_tags($_POST['prix']));
        $description = htmlspecialchars(strip_tags($_POST['desc']));
        $date = htmlspecialchars(strip_tags($_POST['date']));
        if (!empty($stock) AND !empty($nom) AND !empty($cat) AND !empty($date) AND !empty($prix) AND !empty($description)) {
          try 
          {
            ajouter($stock, $nom, $cat, $prix, $description, $file_name, $date);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }
          echo "Informations articles enregistrées avec succès";

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

    <link href="../style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      	
<form method="post" enctype="multipart/form-data">
  <div class="mb-3">
    <input type="file" name="fichier" id="image" required><br><br>
  </div>

  <div class="mb-3">
      <label for="date">Date d'ajout</label><br>
			<input type="date" name="date" id="date" required><br><br>
  </div>
  <div class="mb-3">
    <label for="titre">Quantité du produit</label><br>
		<input type="number" name="Qt" id="titre" required><br><br> <!--Meme si c'est le name est titre il indique la Qt-->
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom du produit</label>
    <input type="text" class="form-control" name="nom"  required>
  </div>

  <div class="mb-3">
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
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Prix</label>
    <input type="number" class="form-control" name="prix" required>
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" required></textarea>
  </div>

  <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
</form>

 <p>Si vous desirez supprimer un article <a href="supprimer.php">cliquez-ici</a></p>

      </div>
    </div>
  </div>

    
</body>
</html>

<?php
/*
  if(isset($_POST['valider']))
  {
    if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
    {
    if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['desc']))
	    {
	    	$stock = htmlspecialchars(strip_tags($_POST['titre']));
				$nom = htmlspecialchars(strip_tags($_POST['nom']));
				$cat = htmlspecialchars(strip_tags($_POST['cat']));
				$prix = htmlspecialchars(strip_tags($_POST['prix']));
				$description = htmlspecialchars(strip_tags($_POST['description']));
				$date = htmlspecialchars(strip_tags($_POST['date']));
          
          try 
          {
            ajouter($stock, $nom, $cat, $prix, $description, $file_name, $date);
          } 
          catch (Exception $e) 
          {
          	$e->getMessage();
          }

	    }
    }
  }
*/
?>