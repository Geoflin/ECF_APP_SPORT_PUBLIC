<!--CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
/*
if ($pdo->exec('INSERT INTO salle_de_sport3 (client_id, Nom, branche, zones) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '");') !== false){};
if ($pdo->exec('INSERT INTO api_install_perm (client_id, members_read, members_write, members_add, members_products_add, members_payment_schedules_read, members_statistiques_read, members_subscription_read, payment_schedules_read, payment_schedules_write, payment_day_read) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['members_read'] . '", "'. $_POST['members_write'] . '", "'. $_POST['members_add'] . '", "'. $_POST['members_products_add'] . '" , "'. $_POST['members_payment_schedules_read'] . '" , "'. $_POST['members_statistiques_read'] . '" , "'. $_POST['members_subscription_read'] . '", "'. $_POST['payment_schedules_read'] . '", "'. $_POST['payment_schedules_write'] . '", "'. $_POST['payment_day_read'] . '");') !== false){};
*/
?>

<form method="POST" action="../page_des_partenaires/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les partenaires</button>
    <h3>La salle de sport "<?php echo $_POST['Nom'] ?>" a été ajouté</h3>
</form>

<style>
button {
    margin: 5% 10% 10% 40%;
}

h3 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10% 10% 0% 10%;
}
</style>

<?php require_once '../../mail/Ajout_salle_de_sport.php' ?>
<?php require_once '../../twig/index.php' ?>