<?php require_once '../../../env/secret2.php' ?>
<?php require_once '../../../env/secret.php' ?>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
/*on masque les erreurs pour raison de sécurité*/
require_once 'debug.php';


//On traite le formulaire de modification des permissions
if(isset($_POST['modification_permission'])){

  

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `members_read` = '".$_POST['members_read']."', `members_write` = '".$_POST['members_write']."', `members_add` = '".$_POST['members_add']."', `members_products_add` = '".$_POST['members_products_add']."', `members_payment_schedules_read` = '".$_POST['members_payment_schedules_read']."', `members_statistiques_read` = '".$_POST['members_statistiques_read']."', `members_subscription_read` = '".$_POST['members_subscription_read']."', `payment_schedules_read` = '".$_POST['payment_schedules_read']."', `payment_schedules_write` = '".$_POST['payment_schedules_write']."', `payment_day_read` = '".$_POST['payment_day_read']."' WHERE `salle_id` = '".$_POST['salle_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}

//On traite le formulaire de modification du statut des salles
if(isset($_POST['modification_statut_salle'])){

  

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `Salle_active` = '".$_POST['Salle_active']."' WHERE `api_install_perm`.`salle_id` = '".$_POST['salle_id_1']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}
?>



<?php
//On traite le formulaire de modification du statut partenaire
if(isset($_POST['modification_statut_partenaire'])){

  

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_clients` SET `actif` = '".$_POST['actif']."' WHERE `api_clients`.`client_id` = '".$_POST['client_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
}
?>



<?php

//On envoie un mail pour informer le partenaire de la modification du statut de sa salle

//envoie de mail avec sendinblue
require_once('../../../vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $api);

// Uncomment below line to configure authorization using: partner-key
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');

$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail(); // \SendinBlue\Client\Model\SendSmtpEmail | Values to send a transactional email
$sendSmtpEmail['to'] = array(array('email'=>$_POST['mail'], 'name'=>$_POST['client_name']));
$sendSmtpEmail['templateId'] = 7;
$sendSmtpEmail['params'] = array('nom'=>$_POST['client_name']);
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}

?>



<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">

  <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
<input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <!--on envoie en POST le $_POST['Nom_2'] pour ne pas perturber le code précèdent-->
  <input name="salle_id" id="salle_id" class="display_none" type="text" value="<?php echo $_POST['salle_id'] ?>">

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