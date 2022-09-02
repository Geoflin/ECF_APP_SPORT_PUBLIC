<head>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!--On permet au client de ce connecter-->
    <form class="form" method="post" action="">
        <label for="username">utilisateur</label>
        <input type="text" required="required" name="username" id="username" placeholder="username">
        <label for="password">mot de passe</label>
        <input type="text" required="required" name="password" id="password" placeholder="password">
        <br />
        <button name="connexion_admin_principal" type="submit" type="button" class="<?php echo $btn_1 ?>" id="connexion">connexion</button>
    </form>

    <!--Actualisation de la session administrateur-->
    <?php
foreach ($pdo->query('SELECT * FROM `password` WHERE id="1" ', PDO::FETCH_ASSOC) as $data_admin) {
  $password = $data_admin['password'];
  };
?>

    <!--Actualisation de la session partenaire lecture seule-->
    <?php
foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_POST['username'].'" AND password="'.MD5($_POST['password']).'" ', PDO::FETCH_ASSOC) as $data_partenaire){};
?>

    <!--Actualisation de la session data_structure lecture seule-->
    <?php
foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE Nom= "'.$_POST['username'].'" AND password="'.MD5($_POST['password']).'" ', PDO::FETCH_ASSOC) as $data_structure){};
?>

    <?php
    /*On traite la connexion au compte*/
    if (isset($_POST['connexion_admin_principal'])){
        session_start();
// data_admin_ou_partenaire
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = MD5($_POST['password']);
$_SESSION['client_id'] = $data_structure['salle_id'];
// data_structure
$_SESSION['username_structure'] = $data_structure['Nom'];
$_SESSION['salle_id_structure'] = $data_structure['salle_id'];
?>

    <!--Vérification d'identité-->
    <!--Vérification admin-->
    <?php
if ($_SESSION['username'] == $data_admin['username']  && MD5($_SESSION['password']) == MD5($password)) {
?>
    <div><a href="Pages/page_des_partenaires/View.php"><button type="button" class="<?php echo $btn_1 ?>" id="connexion">Accèder à mon
                espace</button></a></div>
    <div><a href="Pages/page_formulaire/View.php"><button type="button" class="<?php echo $btn_1 ?>" id="connexion">Inscrire
                un partenaire</button></a></div>
    <div>
        <form><button name="deconnexion" type="submit" onclick='window.location.reload(false)' class="<?php echo $btn_1 ?>" id="connexion">déconnexion</button></form>
    </div>
    <style>
    .form, .center {
        display: none;
    }
    </style>
    <?php 
    } else { 
        //verification partenaire
        if($_SESSION['username'] == $data_partenaire['client_name']  && MD5($_SESSION['password']) == MD5($data_partenaire['password']) && $data_partenaire['actif'] == '1'){
            ?>
    <div>
        <a href="Pages/salle_par_partenaire/View.php"><button type="button" class="<?php echo $btn_1 ?>" id="connexion">Accèder à mon espace</button></a>
    </div>
    <div>
        <form>
            <button name="deconnexion" type="submit" onclick='window.location.reload(false)' class="<?php echo $btn_1 ?>" id="connexion">déconnexion</button>
        </form>
    </div>

    <style>
    .form,
    .center {
        display: none;
    }
    </style>

    <?php
    }else {
        //verification data_structure
        if($_SESSION['username'] == $data_structure['Nom']  && MD5($_SESSION['password']) == MD5($data_structure['password']) && $data_structure['Salle_active'] == '1'){
            ?>
    <div><a href="Pages/salle_par_partenaire/View.php"><button type="button" class="<?php echo $btn_1 ?>" id="connexion">Accèder à mon espace</button></a></div>
    <div>
        <form><button name="deconnexion" type="submit" onclick='window.location.reload(false)' class="<?php echo $btn_1 ?>" id="connexion">déconnexion</button></form>
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
</body>