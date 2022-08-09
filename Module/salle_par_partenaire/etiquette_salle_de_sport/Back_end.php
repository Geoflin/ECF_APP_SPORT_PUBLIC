  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
/*on masque les erreurs pour raison de sécurité*/
require_once 'debug.php';


//On traite le formulaire de modification des permissions
if(isset($_POST['modification_permission'])){

  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `members_read` = '".$_POST['members_read']."', `members_write` = '".$_POST['members_write']."', `members_add` = '".$_POST['members_add']."', `members_products_add` = '".$_POST['members_products_add']."', `members_payment_schedules_read` = '".$_POST['members_payment_schedules_read']."', `members_statistiques_read` = '".$_POST['members_statistiques_read']."', `members_subscription_read` = '".$_POST['members_subscription_read']."', `payment_schedules_read` = '".$_POST['payment_schedules_read']."', `payment_schedules_write` = '".$_POST['payment_schedules_write']."', `payment_day_read` = '".$_POST['payment_day_read']."' WHERE `api_install_perm`.`salle_id` = '".$_POST['salle_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}

//On traite le formulaire de modification du statut des salles
if(isset($_POST['modification_statut_salle'])){

  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `Salle_active` = '".$_POST['Salle_active']."' WHERE `api_install_perm`.`salle_id` = '".$_POST['salle_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}

//On traite le formulaire de modification du statut partenaire
if(isset($_POST['modification_statut_partenaire'])){

  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_clients` SET `actif` = '".$_POST['actif']."' WHERE `api_clients`.`client_id` = '".$_POST['client_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}
?>



<!--On crée le formulaire de modification des permissions-->
<form method="POST" action="../../../Pages\salle_par_partenaire\View.php">

  <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
<input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">

<h3>Les modifications ont été effectuée</h3>
<button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner à la liste des salles</button>

</form>


<style>
  form{
    margin: 10% 10% 10% 40%;
  }
  .display_none{
    display: none;
  }
</style>