<?php 
require_once 'debug.php' 
?>

<html lang="fr">
<head>
<TITLE>connexion_admin_principal</TITLE>
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" />
</head>
<body>

<!--On permet au client de ce connecter-->
<form class="form" method="post" action="">
    <label for="username">utilisateur</label>
    <input type="text" required="required" name="username" id="username" placeholder="username">
    <label for="password">mot de passe</label>
    <input type="text" required="required" name="password" id="password" placeholder="password">
    <br/>
    <button name="connexion_admin_principal" type="submit" type="button" class="btn btn-outline-success btn-lg">connexion</button>
</form>

    <?php
    /*On traite la connexion au compte*/
    if (isset($_POST['connexion_admin_principal'])){
        session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password']= $_POST['password'];
?>

    <!--Actualisation de la session administrateur-->
    <?php
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_administrateur_password` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };
?>

<!--Vérification d'identité-->
<?php
if ($_SESSION['username'] == $dataCompte['username']  && $_SESSION['password'] == $dataCompte['password']) {
?>

<div><a href="Pages/page_des_partenaires\View.php"><button type="button" class="btn btn-outline-success btn-lg">Accèder à mon espace</button></a></div>
<div><a href="Pages/page_formulaire\View.php"><button type="button" class="btn btn-outline-success btn-lg">Inscrire un partenaire</button></a></div>
<div><form><button name="deconnexion" type="submit" onclick='window.location.reload(false)' class="btn btn-outline-success btn-lg">déconnexion</button></form></div>
<style>
    .form, .center{
        display:none;
    }
</style>

    <?php }; } ?>

</body>

<!--Deconnexion-->
<?php
if(isset($_POST['deconnexion'])){
  session_destroy();
  session_unset();
  setcookie('PHPSESSID', '', 1);
};
?>