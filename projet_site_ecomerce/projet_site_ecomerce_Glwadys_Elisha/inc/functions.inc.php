<?php



session_start();

define("RACINE_SITE", "/projet_site_ecomerce/projet_site_ecomerce_Glwadys_Elisha/");
// constante qui définit les dossiers dans lesquels se situe le site pour pouvoir déterminer 
//des chemin absolus à partir de localhost (on ne prend pas locahost). Ainsi nous écrivons tous les chemins (exp : src, href)
// en absolus avec cette constante.


////////////////////////////// Connection a la base de donné //////////////////////////

// $user = 'root'; // Nom d'utilisateur de la base de données
// $pass = ''; // Mot de passe de la base de données
// $host = 'localhost'; // Hôte de la base de données
// $dbname = 'onigiri_blossom_bd'; // Nom de la base de données



define("DBHOST", "localhost");

define("DBUSER", "root");

define("DBPASS", "");

define("DBNAME", "onigiri_blossom_bd");


//FONCTION CONNEXION A LA BASE DE DONNEE//

// function connexionDb() {

// try {
//     // Création d'une nouvelle instance PDO pour la connexion à la base de données
//     $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

//     // Configuration de PDO pour lancer des exceptions en cas d'erreur
//     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connexion réussie à la base de données '$dbname'";
// } catch (PDOException $e) {
//     // Gestion des erreurs de connexion
//     echo "Erreur de connexion : " . $e->getMessage();
// }

// return $db;

// }

// connexionDb();



function connexionDb()
{

   

    $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";

    try {

        $db = new PDO($dsn, DBUSER, DBPASS);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {

        die($e->getMessage());
    }

    return $db;
}

connexionDb();







////////////// générateur de cractère aléatoire  ///////////////
function unique_id()
{
    // Définition des caractères à utiliser pour générer l'ID unique
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Calcul de la longueur de la chaîne de caractères 
    // La fonction strlen() est utilisée pour déterminer la longueur de la chaîne 
    // de caractères contenue dans la variable $chars. Cela donne le nombre total de caractères possibles.
    $chars_length = strlen($chars);
    $randomSring = '';
    // Génération de la chaîne aléatoire
    for ($i = 0; $i < 20; $i++) {
        $randomSring .= $chars[mt_rand(0, $chars_length - 1)];
    }
    // Retour de la chaîne aléatoire
    return $randomSring;
}

//////////////// message d'alert ///////////////////////////

    if (isset($success_msg)) {
        foreach ($success_msg as $success_msg) {
            echo '<script>swal("'.$success_msg.'", "", "success");</script>';
        }
    }

    if (isset($warning_msg)) {
        foreach ($warning_msg as $warning_msg) {
            echo '<script>swal("'.$warning_msg.'", "", "warning");</script>';
        }
    }

    if (isset($info_msg)) {
        foreach ($info_msg as $info_msg) {
            echo '<script>swal("'.$info_msg.'", "", "info");</script>';
        }
    }

    if (isset($error_msg)) {
        foreach ($error_msg as $error_msg) {
            echo '<script>swal("'.$error_msg.'", "", "error");</script>';
        }
    }


    // FONCTIONS POUR AFFICHER TOUTES LES PRODUITS  

function allProduits() {
    $db = connexionDb();
    $sql = ("SELECT * FROM produits");
    $request = $db->query($sql);
    $result = $request->fetchAll();
    return $result;
}


// FONCTIONS POUR AJOUTER LES PRODUITS 

function ajoutProduit(string $image, string $nom_produit, string $produit_details, float $prix): void
{

    $db = connexionDb();

    $sql = "INSERT INTO produits (image, nom_produit, produit_details, prix)
     VALUES (:image, :nom_produit, :produit_details, :prix)";

    $request = $db->prepare($sql);
    $request->execute(array(


        ':image' => $image,
        ':nom_produit' => $nom_produit,
        ':produit_details' => $produit_details,
        ':prix' => $prix

     
        
    ));
}