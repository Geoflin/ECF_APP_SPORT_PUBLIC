<?php
//on recupere api sendinblue (gestionnaire de mail)
require_once "../../../env/secret.php";
//on recupere identifiant pdo
require_once "../../../env/secret2.php";
?>

<!-- partie insertion data nouvelle salle de sport -->
<?php
//on insere data clients dans table salle_de_sport3
if ($pdo->exec('INSERT INTO salle_de_sport3 (client_id, Nom, branche, zones, password, mail) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '", "'. MD5($_POST['password_salle']) . '", "'. $_POST['mail_salle'] . '");') !== false){};
//on insere permissions client dans table api_install_perm
if ($pdo->exec('INSERT INTO api_install_perm (client_id, members_read, members_write, members_add, members_products_add, members_payment_schedules_read, members_statistiques_read, members_subscription_read, payment_schedules_read, payment_schedules_write, payment_day_read) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['members_read'] . '", "'. $_POST['members_write'] . '", "'. $_POST['members_add'] . '", "'. $_POST['members_products_add'] . '" , "'. $_POST['members_payment_schedules_read'] . '" , "'. $_POST['members_statistiques_read'] . '" , "'. $_POST['members_subscription_read'] . '", "'. $_POST['payment_schedules_read'] . '", "'. $_POST['payment_schedules_write'] . '", "'. $_POST['payment_day_read'] . '");') !== false){};
?>

<!-- partie redirection client -->

<!-- formulaire permettant de retourner voir la liste de salle de sport -->
<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les salles de sport</button>
    <h3>La salle de sport "<?php echo $_POST['Nom'] ?>" a été ajouté</h3>
    <?php   
    require_once "../../../env/secret2.php";
?>
    <!-- On indique le client_id -->
    <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $_POST['client_id'] ?>">
</form>


<!-- masquage des input client_id pour page precedente -->
<?php require_once 'style_Back_end.php'; ?>


<?php require_once '../../mail/identifiant_mail_ajout_salle_de_sport.php' ?>
<?php require_once '../../mail/Ajout_salle_de_sport.php' ?>
<?php require_once '../../twig/index.php' ?>
