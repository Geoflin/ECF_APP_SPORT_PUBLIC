<?php
require_once "../../../env/secret.php";
require_once "../../../env/secret2.php";
require_once "../../../Module/salle_par_partenaire/recuperer_id_partenaire.php";
?>

<!--CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
if ($pdo->exec('UPDATE permission_globale SET members_read= "'. $_POST['members_read'] . '", members_write= "'. $_POST['members_write'] . '", members_add= "'. $_POST['members_add'] . '", members_products_add= "'. $_POST['members_products_add'] . '", members_payment_schedules_read= "'. $_POST['members_payment_schedules_read'] . '", members_statistiques_read= "'. $_POST['members_statistiques_read'] . '", members_subscription_read = "'. $_POST['members_subscription_read'] . '", payment_schedules_read = "'. $_POST['payment_schedules_read'] . '", payment_schedules_write="'. $_POST['payment_schedules_write'] . '", payment_day_read= "'. $_POST['payment_day_read'] . '" WHERE client_id = "'.$_POST['client_id'].'" ;' ) !== false){};
?>

<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les salles de
        sport</button>
    <h3>Permissions globales ajoutées</h3>
    <!-- On indique le client_id -->
    <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $client_id ?>">
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

        <!-- On indique le client_id -->
        <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $client_id ?>">



<?php require_once '../../mail/modification_permission_globale.php' ?>
<?php require_once '../../twig/index.php' ?>