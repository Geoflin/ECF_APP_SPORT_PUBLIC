<?php
require_once "../../env/secret2.php";
require_once "../../env/secret.php";
/*on masque les erreurs pour raison de sécurité*/
require_once '../../Module/connexion/debug.php';



/*on vérifie l'identité de l'utilisateur*/
require_once '../../Module/connexion/verification_identite.php';
?>

<html lang="fr">
<head>
<TITLE>connexion_admin_principal</TITLE>
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
</head>
<body>

    <!--Actualisation de la session administrateur-->
    <?php
foreach ($pdo->query('SELECT * FROM `password` WHERE id="1" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };
?>

<!--On permet au client de ce connecter-->
<form class="form" method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="username">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="password">
    <br/>
    <button name="connexion_admin_principal" type="submit" type="button" class="btn btn-outline-success btn-lg">connexion</button>
</form>

    <!--Actualisation de la session partenaire lecture seule-->
    <?php
foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_POST['username'].'" AND password="'.$_POST['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte2) {
  $username = $dataCompte2['client_name'];
  $password = $dataCompte2['password'];
  };
?>

    <?php
    /*On traite la connexion au compte*/
    if (isset($_POST['connexion_admin_principal'])){
        session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = MD5($_POST['password']);
$_SESSION['password2'] = $_POST['password'];
?>



<!--Vérification d'identité-->
<?php
if ($_SESSION['username'] == $dataCompte['username']  && MD5($_SESSION['password']) == MD5($password) || $_SESSION['username'] == $dataCompte2['client_name']  && $_SESSION['password2'] == $dataCompte2['password']) {
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Page_des partenaires</title>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!--CDN Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--tyle de l'index -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>



<body>

    <main>
    
    <?php require_once '../../Module/salle_par_partenaire/etiquette_partenaire/View.php'  ?>

    <?php require_once '../../Module/salle_par_partenaire/filtre_partenaire/View.php'  ?>

    <?php require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/View.php'  ?>

    <?php require_once '../../Module/salle_par_partenaire/ajouter_une_salle/View.php'  ?>

    </main>

<footer>
     <?php //require_once '../../Module/salle_par_partenaire/footer_partenaire/View.php'  ?>
</footer>
    
</body>

</html>

<?php 
} else {
  echo "tech";
}
  ?>





    <?php };  ?>

</body>










