  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
  $pdo = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_cb119347919fa64', 'b17b85233573cc', '95de3bee');

if ($pdo->exec('INSERT INTO api_clients (actif, client_name, password, active, short_description, full_description, urll, mail) VALUES ("'. $_POST['actif'] . '", "'. $_POST['client_name'] . '", "'. $_POST['password'] . '", "On", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['mail'] . '");') !== false){};


/*
//Envoie du mail
define('MAIL_DESTINATAIRE','geoffrey.marhoffer@gmail.com'); // remplacer par votre email
define('MAIL_SUJET','Message du formulaire de example.com');

// vérification des champs
if (empty($_POST['client_name']))
$message .= "Votre client_name<br/>";
if (empty($_POST['password']))
$message .= "Votre password<br/>";
if (empty($_POST['short_description']))
$message .= "Votre short_description<br/>";
if (empty($_POST['full_description']))
$message .= "Votre full_description<br/>";
if (empty($_POST['urll']))
$message .= "Votre url<br/>";
if (empty($_POST['mail']))
$message .= "Votre adresse mail<br/>";

//Préparation de l'entête du mail:
$mail_entete  = "MIME-Version: 1.0/r/n";
$mail_entete .= "From: {$_POST['client_name']} "
             ."<{$_POST['mail']}>/r/n";
$mail_entete .= 'Reply-To: '.$_POST['mail']."/r/n";
$mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
$mail_entete .= "/r/nContent-Transfer-Encoding: 8bit/r/n";
$mail_entete .= 'X-Mailer:PHP/' . phpversion()."/r/n";

// préparation du corps du mail
$mail_corps  = "Message de : ".$_POST['client_name'];
$mail_corps .= "short_description :".$_POST['short_description'];
$mail_corps .= "full_description :".$_POST['full_description'];

// envoi du mail
if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
  //Le mail est bien expédié
  echo $msg_ok;
} else {
  //Le mail n'a pas été expédié
  echo "Une erreur est survenue lors de l'envoi du formulaire par email";
}
*/

?>

<form method="POST" action="../page_des_partenaires/View.php">
<h3>Le partenaire "<?php echo $_POST['client_name'] ?>" a été ajouté</h3>
<button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les partenaires</button>

</form>

<style>
  button{
    margin: 5% 10% 10% 40%;
  }
  h3{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10% 10% 0% 10%;
  }
</style>

<?php 


//test sendinBlue
require_once '../../vendor/autoload.php';

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('n3', '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');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// Configure API key authorization: partner-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY'); 
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

$apiInstance = new SendinBlue\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}


?>





