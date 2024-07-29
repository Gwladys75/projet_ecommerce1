<?php
include_once "inc/functions.inc.php";


$produits = allProduits();



        require_once "inc/header.inc.php";
    
    ?>


<main>
  <div class="container">
    <div class="row">
      <aside class="col-md-3 aside-filter">
        <h4>Catégories</h4>
        <div class="filter-options">
          <label><input type="checkbox" name="accessory" value="Accessoires"> accessoires</label>
          <label><input type="checkbox" name="decoration" value="Decorations"> Decorations</label>
          <label><input type="checkbox" name="sticker-set" value="Papeterieq"> Papeteries </label>
          <label><input type="checkbox" name="sticker-set" value="Peluches"> Peluches </label>
        </div>
        <hr>
        <h4>Couleurs</h4>
        <div class="filter-options">
          <label><input type="checkbox" name="rose" value="Rose"> Rose </label>
          <label><input type="checkbox" name="blanc" value="Blanc"> Blanc </label>
          <label><input type="checkbox" name="violet" value="Violet"> Violet </label>
        </div>
      </aside>
      <div class="col-md-9">
        <div class="mt-5 pt-5">
          <h2 class="text-center produits"> TOUT LES PRODUITS KAWAII !! </h2>
        </div>
        <div class="container">
          <div class="row">

            <?php
            //  echo $info;
             foreach ($produits as $produit) {
             ?>

                        <div class="col-md-3 mb-4">
                            <div class="card h-100">
                                <img src="<?= RACINE_SITE . "assets/img/" . $produit['image'] ?>"class="card-img-top" alt="Produit 1">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $produit['nom_produit'] ?></h5>
                                    <p class="card-text"><?= $produit['produit_details'] ?></p>
                                    <p class="card-text font-weight-bold"><?= $produit['prix'] ?> € </p>
                                    <div class="d-flex justify-content-around">
                                    <button class="btn btn-details">Détails</button>
                                    <button class="btn btn-ajout">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
             }
             ?>
          </div>
        </div>

         


</main>

<?php
require_once "inc/footer.inc.php";



?>