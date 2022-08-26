<!DOCTYPE html>
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
foreach ($pdo->query('SELECT * FROM `password` WHERE id="1" ', PDO::FETCH_ASSOC) as $data_admin) {
  $username = $data_admin['username'];
  $password = $data_admin['password'];
  };
?>

    <!--On permet au client de ce connecter-->
    <form class="form display_none" method="post" action="">
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
foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_POST['username'].'" AND password="'.$_POST['password'].'" ', PDO::FETCH_ASSOC) as $data_partenaire) {
  $username = $data_partenaire['client_name'];
  $password = $data_partenaire['password'];
  };
?>