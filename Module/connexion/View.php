<html lang="fr">

<head>
    <TITLE>connexion_admin_principal</TITLE>
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
        <br />
        <button name="connexion_admin_principal" type="submit" type="button"
            class="btn btn-outline-success btn-lg">connexion</button>
    </form>

    <!--Actualisation de la session partenaire lecture seule-->
    <?php
foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_POST['username'].'" AND password="'.MD5($_POST['password']).'" ', PDO::FETCH_ASSOC) as $dataCompte2) {
  $username = $dataCompte2['client_name'];
  $password = $dataCompte2['password'];
  };
?>

    <!--Actualisation de la session structure lecture seule-->
    <?php
foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE Nom= "'.$_POST['username'].'" AND password="'.MD5($_POST['password']).'" ', PDO::FETCH_ASSOC) as $structure) {
  $username = $structure['Nom'];
  $password = $structure['password'];
  $salle_active = $structure['Salle_active'];
  };
?>

    <?php
    /*On traite la connexion au compte*/
    if (isset($_POST['connexion_admin_principal'])){
        session_start();
// data_admin
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = MD5($_POST['password']);
// data_partenaire
$_SESSION['client_id'] = $dataCompte2['client_id'];
// data_structure
$_SESSION['password_structure'] = MD5($_POST['password']);
$_SESSION['username_structure'] = $structure['Nom'];
$_SESSION['salle_id_structure'] = $structure['salle_id'];
$_SESSION['client_id_structure'] = $structure['client_id'];
?>



    <!--Vérification d'identité-->
    <!--Vérification admin-->
    <?php
if ($_SESSION['username'] == $dataCompte['username']  && MD5($_SESSION['password']) == MD5($password)) {
?>
    <div><a href="Pages/page_des_partenaires/View.php"><button type="button"
                class="btn btn-outline-success btn-lg">Accèder à mon espace</button></a></div>
    <div><a href="Pages/page_formulaire/View.php"><button type="button" class="btn btn-outline-success btn-lg">Inscrire
                un partenaire</button></a></div>
    <div>
        <form><button name="deconnexion" type="submit" onclick='window.location.reload(false)'
                class="btn btn-outline-success btn-lg">déconnexion</button></form>
    </div>
    <style>
    .form,
    .center {
        display: none;
    }
    </style>
    <?php 
    } else { 
        //verification partenaire
        if($_SESSION['username'] == $dataCompte2['client_name']  && MD5($_SESSION['password']) == MD5($dataCompte2['password']) && $dataCompte2['actif']){
            ?>
    <div><a href="Pages/salle_par_partenaire/View.php"><button type="button"
                class="btn btn-outline-success btn-lg">Accèder à mon espace</button></a></div>
    <div>
        <form><button name="deconnexion" type="submit" onclick='window.location.reload(false)'
                class="btn btn-outline-success btn-lg">déconnexion</button></form>
    </div>
    <style>
    .form,
    .center {
        display: none;
    }
    </style>
    <?php
        

    }else {
        //verification structure
        if($_SESSION['username_structure'] == $structure['Nom']  && MD5($_SESSION['password_structure']) == MD5($structure['password']) && $structure['Salle_active'] == '1'){
            ?>
    <div><a href="Pages/salle_par_partenaire/View.php"><button type="button"
                class="btn btn-outline-success btn-lg">Accèder à mon espace</button></a></div>
    <div>
        <form><button name="deconnexion" type="submit" onclick='window.location.reload(false)'
                class="btn btn-outline-success btn-lg">déconnexion</button></form>
    </div>
    <style>
    .form,
    .center {
        display: none;
    }
    </style>
    <?php
        };
    }; 
};
};
    ?>

    <!--Vérification d'identité-->

</body>

<!--Deconnexion-->
<?php
if(isset($_POST['deconnexion'])){
  session_destroy();
  session_unset();
  setcookie('PHPSESSID');
  $_SESSION['username']=='fds';
};
?>