<?php
require_once "../../../env/secret.php";
require_once "../../../env/secret2.php";
?>

<!--CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
if ($pdo->exec('INSERT INTO salle_de_sport3 (client_id, Nom, branche, zones, password, mail) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '", "'. $_POST['password_salle'] . '", "'. $_POST['mail_salle'] . '");') !== false){};
if ($pdo->exec('INSERT INTO api_install_perm (client_id, members_read, members_write, members_add, members_products_add, members_payment_schedules_read, members_statistiques_read, members_subscription_read, payment_schedules_read, payment_schedules_write, payment_day_read) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['members_read'] . '", "'. $_POST['members_write'] . '", "'. $_POST['members_add'] . '", "'. $_POST['members_products_add'] . '" , "'. $_POST['members_payment_schedules_read'] . '" , "'. $_POST['members_statistiques_read'] . '" , "'. $_POST['members_subscription_read'] . '", "'. $_POST['payment_schedules_read'] . '", "'. $_POST['payment_schedules_write'] . '", "'. $_POST['payment_day_read'] . '");') !== false){};
?>

<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les salles de
        sport</button>
    <h3>La salle de sport "<?php echo $_POST['Nom'] ?>" a été ajouté</h3>
    <?php   
    require_once "../../../env/secret2.php";
?>
    <!-- On indique le client_id -->
    <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $_POST['client_id'] ?>">
</form>

<style>
.display_none {
    display: none;
}

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
<?php require_once '../../mail/identifiant_mail_ajout_salle_de_sport.php' ?>
<?php require_once '../../mail/Ajout_salle_de_sport.php' ?>
<?php require_once '../../twig/index.php' ?>
