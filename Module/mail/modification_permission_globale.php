<!-- On indique le mail du client -->
<?php
//on récupère l'id du template
require_once "../../../env/template_sendinblue.php";
//on active le debug pour des raisons de sécurité
require_once "../../connexion/debug.php";

foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_id LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { 
$api_clients['mail'];
$api_clients['client_name'];
}
//On envoie un mail pour informer le partenaire de la modification du statut partenaire avec sendinblue
require_once('../../../vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $api);

// Uncomment below line to configure authorization using: partner-key
// $config = SendinBlue/Client/Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');

$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail(); // \SendinBlue\Client\Model\SendSmtpEmail | Values to send a transactional email
$sendSmtpEmail['to'] = array(array('email'=>$api_clients['mail'], 'name'=>$api_clients['client_name']));
$sendSmtpEmail['templateId'] = $Id_modification_permission_globale;
$sendSmtpEmail['params'] = array('client_name'=>$api_clients['client_name']);
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}

?>