<?php

 function ajouter($stock, $nom, $categorie, $prix, $description, $image, $date)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO produits (stock, nom, categorie, prix, description, image, date) VALUES ('$stock', '$nom', '$categorie', '$prix', '$description', '$image', '$date')");

     $req->execute(array($stock, $nom, $categorie, $prix, $description, $image, $date));

     $req->closeCursor();
   }
}

 function ajouterInform($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_informatik (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterBebe($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_bebe (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterElectro($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_electronic (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterTel($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_telephone (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterAgri($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_agriculture (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterMaison($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_maison (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterModeF($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_modef (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterModeH($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_modeh (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterBeaute($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_beaute (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}

function ajouterAutre($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4)
{
   if(require("connexion.php"))
   {
     $req = $access->prepare("INSERT INTO t_autres (quantite, nom, prix, description, image1, image2, image3, image4) VALUES ('$stock', '$nom', '$prix', '$description', '$image1', '$image2', '$image3', '$image4')");

     $req->execute(array($stock, $nom, $prix, $description, $image1, $image2, $image3, $image4));

     $req->closeCursor();
   }
}



function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

?>