<?php

require("config/commandes.php");

$Produits=afficher();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ACCUEIL | LE BAZAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/home-style.css">
        <link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" href="style/Hover-master/css/hover.css">
        <link rel="stylesheet" type="text/css" href="style/animista.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <script type="text/javascript" src="script/jQuery.js"></script>
        <style>
        .scrolling-wrapper{
	overflow-x: auto;
}

h1{
	font-weight: 700;
	font-size: 3.4em;
}

.subtitle{
	font-size: 1.25em;
	opacity: 0.65;
}

.card-block{
	height: 450px;
	background-color: #B3B6B7;
	border: none;
	background-position: center;
	background-size: cover;
	transition: all 0.2s ease-in-out !important;
	border-radius: 24px;
}
        </style>
    </head>
    <body>
        <header>
            <div id="logo">
                <a href="#">LE BAZAR</a>
            </div>
            <div id="menu">
                <ul>
                    <li>
                        <form>
                            <div class="row">
                                <div class="col">
                                  <input type="text" class="form-control" placeholder="Recherchez un article" aria-label="First name">
                                </div>
                                <div class="col">
                                  <input type="button" class="form-control btn-primary" value="RECHERCHER" aria-label="Last name">
                                </div>
                            </div>
                        </form>
                    </li>
                    <li><a href="">Se connecter</a></li>
                    <li><a href="">Panier</a></li>
                </ul>
            </div>

        </header>
    <div class="ensemble1">
            <div class="categorie">
                <ul>
                    <li><a href="#"><i class="ri-home-3-line"></i>Maison et Bureau</a></li>
                    <li><a href="#"><i class="ri-smartphone-line"></i>Téléphones & tablettes</a></li>
                    <li><a href="#"><i class="ri-fridge-line"></i> Electronique</a></li>
                    <li><a href="#">Beauté & hygiène</a></li>
                    <li><a href="#">Agriculture et élévage</a></li>
                    <li><a href="#"><i class="ri-macbook-fill"></i>Informatique</a></li>
                    <li><a href="#"><i class="ri-t-shirt-line"></i>Mode femme</a></li>
                    <li><a href="#"><i class="ri-shirt-line"></i>Mode homme</a></li>
                    <li><a href=""><i class="ri-open-arm-line"></i>Bébé</a></li>
                    <li><a href="#">Autres catégories</a></li>
                </ul>

            </div>

            <!--LES SLIDES-->
            <div class="slider">
                <div class="slides">
                    <!--BUTPNOS RADIO DEBUT-->
                    <input type="radio" name="radion-btn" id="radio1">
                    <input type="radio" name="radion-btn" id="radio2">
                    <input type="radio" name="radion-btn" id="radio3">
                    <input type="radio" name="radion-btn" id="radio4">
                    <!--BUTPNOS RADIO FIN-->

                    <!--SLIDES IMAGES DEBUT-->
                    <div class="slide first">
                        <img src="pictures/slides/4.jpg">
                    </div>
                    <div class="slide">
                        <img src="pictures/slides/9.jpg">
                    </div>
                    <div class="slide">
                        <img src="pictures/slides/6.jpg">
                    </div>
                    <div class="slide">
                        <img src="pictures/slides/2.jpg">
                    </div>
                    <!--SLIDES IMAGES FIN-->

                    <!--AUTOMATIK NAVIGATION DEBUT-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--AUTOMATIK NAVIGATION FIN-->

                    <!-- NAVIGATION MANUELLE DEBUT-->
                    <div class="mavigation-manuel">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                    
                    <!--NAVIGATION MANUELLE FIN-->
            <!--FIN DU TRAVAIL SUR LES SLIDES-->
            </div>
        </div>
    </div>

        <main>

            <div  class="container-fluid row" style="margin-top: 8vh;">
                <div class="col-4">
                    <i class="ri-road-map-line" style="color: orange; font-size: 80px; margin-left: 37%; margin-top: 10%;"></i>
                    <h4>
                        <center><b>Expédition partout</b></center>
                    </h4>
                </div>
                <div class="col-4">
                    <i class="ri-truck-fill" style="color: orange; font-size: 80px; margin-left: 37%; margin-top: 1%;"></i>
                    <h4>
                        <center><b>Livraison gratuite</b></center>
                    </h4>
                </div>
                <div class="col-4">
                    <i class="ri-secure-payment-fill" style="color: orange; font-size: 80px; margin-left: 37%; margin-top: 30vh;"></i>
                    <h4>
                        <center><b>Paiement sécurisé</b></center>
                    </h4>
                </div>
            </div>
            
            <div class="baniere1 container" style="background-color: #0C7AE8; height: 8vh; width: 100%; color: white; margin-top: 15vh;">
                <b style="margin-left: 10%; margin-top: 25px; font-size: 30px;">Nouvel arrivage</b>
                <a href="#" style="color: white; text-decoration: none; margin-left: 50%; font-size: 20px">Voir plus<span>>></span> </a>
            </div>

  <div class="album py-5 " style="margin-top: 0vh;">
    

        <div class="container">
            <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
            <?php foreach($Produits as $produit): ?>
                <div class="col-3">
				    <div class="card card-block text-white" style="height: 22em;">
                    <img class="card-img-top h-70 w-100 hvr-float" src="pictures/img/<?=$produit->image?>">
                    <h6 class="card-title"><b><center><?= $produit->nom ?></center></b></h6>
                    <div class="card-body">

                        <div class="" style="margin-top: -25px;">
                            <div>Stock:<?= $produit ->stock?></div>
                            <small class="text-muted">Coût:<?= $produit->prix ?> €</small><br>
                            <div class="btn-group">
                                
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
                    </div>
                </div>
        </div>
    
  </div>

  <div class="container">
      <div class="baniere2">
        <span style="margin-left: 10%; font-size: 30px;">Meilleures ventes</span>
      </div>
    </div>
      <div class="container">
            <div class="scrolling-wrapper row flex-row flex-nowrap mt-4 pb-4 pt-2">
            <?php foreach($Produits as $produit): ?>
                <div class="col-3">
                    <div class="card card-block text-white" style="height: 22em;">
                    <img class="card-img-top h-70 w-100 hvr-float" src="pictures/img/<?=$produit->image?>">
                    <h6 class="card-title"><b style="margin-left: 20%;"><?= $produit->nom ?></b></h6>
                    <div class="card-body">
                        <div class="" style="margin-top: -25px; padding: 0px;">
                            <small class="text-muted">Coût:<?= $produit->prix ?> €</small><br>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
  </div>
  

</main>


        
        





            <!-- FOOTER -->
            <footer class="w-100 py-4 flex-shrink-0" style="margin-top: 20vh;">
                <div class="container py-4">
                    <div class="row gy-4 gx-5">
                        <div class="col-lg-4 col-md-6">
                            <h5 class="h1 text-white">FB.</h5>
                            <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary" href="#">Bootstrapious.com</a></p>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="text-white mb-3">Quick links</h5>
                            <ul class="list-unstyled text-muted">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Get started</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <h5 class="text-white mb-3">Quick links</h5>
                            <ul class="list-unstyled text-muted">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Get started</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <h5 class="text-white mb-3">Newsletter</h5>
                            <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <form action="#">
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <button class="btn btn-primary" id="button-addon2" type="button"><i class="fas fa-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    <script src="script/script-Home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




    <script>
	var counter = 1;
	setInterval(function() {
		// body...
		document.getElementById('radio' + counter).checked = true;
		counter++;
		if (counter > 4) {
			counter = 1;
		}
	}, 5000)
    </script>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
    </body>
</html>