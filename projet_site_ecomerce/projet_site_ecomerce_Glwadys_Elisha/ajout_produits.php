<?php

require_once 'inc/functions.inc.php';


// je  vérifie d'abord si le $_POST (mon tableau) = le formulaire a été soumis 

$info='';

if (!empty($_POST)) {

  // affiche le contenu de mon tableau si il a bien été soumis 

  $image = $_FILES['image']['name'] ?? '';
  $nom_produit = htmlentities(trim($_POST['nom_produit'])) ?? '';
  $produit_details = htmlentities(trim($_POST['produit_details'])) ?? ''; 
  $prix = trim($_POST['prix']) ?? '';
 

  // Déplace mon fichier téléchargé vers mon répertoire
  move_uploaded_file($_FILES['image']['tmp_name'], 'assets/img/' . $image);


  // header("location:" . RACINE_SITE . "articles.php");


 
  ajoutProduit($image, $nom_produit, $produit_details, $prix);
  // $info= alert("Vous avez un l'article !", "success");


}







require_once 'inc/header.inc.php';
// echo $info;
?>

<!-- Le formulaire d'ajout pour les produits  -->
<main>
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="text-center ajout">AJOUTER UN PRODUIT</h2>

        <form action="#" method="post" enctype="multipart/form-data">
          <div class="mb-3 mt-4 pt-4 text-center">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control formu" id="image" name="image">
          </div>
          <div class="mb-3 text-center">
            <label for="titre" class="form-label">Nom du produit</label>
            <input type="text" class="form-control formu" id="titre" placeholder="Entrez le nom du produit" name="nom_produit">
          </div>
          <div class="mb-3 text-center">
            <label for="details" class="form-label">Détails du produit</label>
            <textarea class="form-control formu" id="details" rows="3" placeholder="Entrez la description de l'annonce" name="produit_details"></textarea>
          </div>
          
          <div class="mb-3 text-center">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control formu" id="prix" placeholder="Entrez le prix" name="prix">
          </div>
          <div class="d-flex justify-content-center mb-5">
            <button type="submit" class="btn">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</main>

<?php
// $success_msg=
require_once "inc/footer.inc.php";



?>