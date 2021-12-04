<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../styles.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body id="haut">
        <header>
            <div id="banner">
                <div id="logo">
                    <a href="../eCommerce"><img src="pictures/logo1-transparent.png" class="logo" alt="logo" id="logo_pic"></a>
                </div>
                <div id="title">
                    <a href="../eCommerce" id="titre">STAR WATER</a>
                </div>
                <div id="menu">
                    <img src="pictures/burger.png" class="logo" alt="logo" id="burger_pic">
                    <div id="sub1">
                        <a href="../Produit/produit.html" class="button">
                            <div class="button_div sub1_button">Produits</div>
                        </a>
                        <a href="../Equipe/equipe.html" class="button">
                            <div class="button_div sub1_button">Panier</div>
                        </a>
                        <a href="../FAQ/faq.html" class="button">
                            <div class="button_div sub1_button">Connexion</div>
                        </a>
                        <a href="../Presse/presse.html" class="button">
                            <div class="button_div sub1_button">Profil</div>
                        </a>
                        <a href="../Contact/contact.html" class="button">
                            <div class="button_div sub1_button">Déconnexion</div>
                        </a>
                    </div>
                </div>
            </div>
        </header><br>

	    <?php
		// Si $controleur='voiture' et $view='list',
		// alors $filepath="/chemin_du_site/view/voiture/list.php"
		$filepath = File::build_path(array("view", $controller, "$view.php"));
		require $filepath;
		?>

        <footer>
            <div id="partenaires">
                <h2 id="h2">Copyright ©</h2>
                <h2 id="h2">Partenaires</h2>
                <div>NASA ©<br>SpaceX ©<br>REVIPLAST ©<br></div>
            </div>
            <div id="up">
                <a href="#banner" id="up_button">Haut de page</a>
            </div>
            <div id="reseaux">
                <div>
                    <h2 id="h2">Suivez-nous !</h2>
                </div>
                <div class="icones">
                    <a href="https://www.instagram.com/starwateroff/?hl=fr"><img src="pictures/instagram.png" alt="instagram"></a>
                    <a href="https://twitter.com/StarWaterOff"><img src="pictures/twitter.png" alt="twitter"></a>
                </div>
            </div>
        </footer>
    </body>
</html>








