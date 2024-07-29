
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>ONIGIRI BLOSSOM</title>
    <link rel="stylesheet" href="<?=RACINE_SITE?>assets/css/styles.css">
</head>

<body>
    <header>
        <!-- barre de navigation -->
        <div class="container-fluid pt-2">
            <div class="Navbar">
                <div class="row">
                    <ul class="nav justify-content-between w-100">
                        <li class="nav-item">
                            <div class="image_logo1">
                                <img src="./assets/img/logo.jpg" alt="" class="icon">
                            </div>
                            <div class="image_logo">
                                <img src="./assets/img/logo_ecris.png" alt="">
                            </div>
                        </li>
                        <li class="nav-item ml-auto">
                            <div class="d-flex">
                                <a class="nav-link" href="<?=RACINE_SITE?>index.php">
                                    <div class="button">
                                        <img src="./assets/img/icon home.jpg" alt="" class="icon">
                                        <span>Home</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="button">
                                        <img src="./assets/img/image_chat_ordi1.png" alt="" class="icon">
                                        <span>a propos</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="button">
                                        <img src="./assets/img/image_chat_ordi1.png" alt="" class="icon">
                                        <span>Mon compte</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="ajout_produits.php">
                                    <div class="button">
                                        <img src="./assets/img/onigiri_rose.png" alt="" class="icon">
                                        <span>Ajout Produit</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="#">
                                    <div class="button">
                                        <img src="./assets/img/image_chat_favoris.png" alt="" class="icon">
                                        <span>Favoris</span>
                                    </div>
                                </a>
                                <a class="nav-link" href="<?=RACINE_SITE?>/boutique/panier.php">
                                    <div class="button">
                                        <img src="./assets/img/image_chat_panier.png" alt="" class="icon">
                                        <span>Panier</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>