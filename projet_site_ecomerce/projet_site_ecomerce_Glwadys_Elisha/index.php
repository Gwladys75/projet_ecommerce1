<?php
include_once "inc/functions.inc.php";
require_once "inc/header.inc.php";
?>

<main>
    <section id="partie1">
        <div id="banderole" class="d-flex justify-content-center my-4 mt-5">
            <img src="./assets/img/Purple Pastel Illustration Cloud Quote Twitter Header (2).png" alt="">
        </div>
        <!-- ===== { caroucel defilan les promotions } ==== -->
        <div class="container">
            <div class="row">
                <div id="carouselExampleFade" class="carousel slide carousel-fade mt-2" data-ride="carousel" data-interval="1000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/Papeterie_Kawaii_promotion_pour_carouselle.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/peluche_kawaii_promotion_pour_carouselle.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/Décoration_Kawaii_promotion_pour_carouselle.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <section id="partie2">
        <div id="banderole" class="banderole2 justify-content-center my-4 mt-5">
            <img src="./assets/img/bannière_découvrez_nos_articles .png" alt="">
        </div>
        <!-- ===== { présentation des catégorie d'article} ===== -->
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center mx-auto">
                <div class="row row justify-content-center">
                    <div class="container py-4">
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/img/icon_accsesoire.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Accessoire Kawaii</h5>
                                        <a class="btn " href="#" role="button">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/img/icon_Decos.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Décoration Kawaii</h5>
                                        <a class="btn " href="#" role="button">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/img/icon_vetements.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">vêtements Kawaii</h5>
                                        <a class="btn " href="#" role="button">Explore</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="./assets/img/icons_papetrie.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Papetrie kawaii</h5>
                                        <a class="btn " href="#" role="button">Explore</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-end mt-4">
                        <a class="btn btn-secondary" href="articles.php" role="button">Voir toutes les catégories</a>
                    </div>
    </section>

    <section id="partie3">
        <div id="banderole" class="banderoleSeule">
            <h4>Onigiri blossom c'est...</h4>
        </div>
        <!-- ===== {petit resumé de qui nous somme } ===== -->
        <div class="container my-4 mt-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 left-col">
                    <div class="square-card">
                        <div class="card-body">
                            <h5 class="card-title">Qui sommes nous ?</h5>
                            <p class="card-text">Onigirie Blossom est votre nouvelle destination pour tout ce qui
                                est mignon et adorable. Notre site propose une large gamme de produits, des peluches
                                douces aux accessoires kawaii, en passant par de la papeterie et de la décoration
                                charmante. Que vous soyez à la recherche d’un cadeau original ou que vous souhaitiez
                                simplement ajouter une touche de kawaii à votre quotidien, Onigirie Blossom a tout
                                ce qu’il vous faut. Rejoignez-nous pour une expérience shopping aussi mignonne que
                                nos produits !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 right-col d-flex">
                    <div class="lili mr-4 position-relative">
                        <img src="./assets/img/liliavatar1.png" alt="..." class="model-image">
                    </div>
                    <div class="gwladys">
                        <img src="./assets/img/gwladys avatars3.png" alt="..." class="model-image">
                        <div class="col-12 text-end mt-4">
                            <a class="btn btn-secondary" href="#" role="button">En savoir plus</a>
                        </div>
                    </div>
                </div>
    </section>
    <!-- <section class="container">
            <h2>Explore</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Decorative Decor</h3>
                    <p>...</p>
                </div>
                <div class="col-md-4">
                    <h3>Cute Stationery</h3>
                    <p>...</p>
                </div>
                <div class="col-md-4">
                    <h3>Kawaii Clothes</h3>
                    <p>...</p>
                </div>
            </div>
        </section>
        <section class="container">
            <h2>Testimonials</h2>
            <div class="row">
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"SakuraOnigirie has the cutest products ever! Love it!"</p>
                        <footer class="blockquote-footer">Mia Kimura, Customer Support</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"The kawaii designs at SakuraOnigirie inspire my work every day."</p>
                        <footer class="blockquote-footer">Haru Tanaka, Product Designer</footer>
                    </blockquote>
                </div>
                <div class="col-md-4">
                    <blockquote class="blockquote">
                        <p>"SakuraOnigirie brings joy to my marketing campaigns!"</p>
                        <footer class="blockquote-footer">...</footer>
                    </blockquote>
                </div>
            </div>
        </section>
        <section class="container">
            <h2>Benefits</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Livraison Gratuite</h3>
                    <p>...</p>
                </div>
                <div class="col-md-4">
                    <h3>Paiement Sécurisé</h3>
                    <p>...</p>
                </div>
                <div class="col-md-4">
                    <h3>Satisfait ou remboursé</h3>
                    <p>...</p>
                </div>
            </div> -->

    </section>


</main>

<?php
include_once "inc/footer.inc.php";
?>