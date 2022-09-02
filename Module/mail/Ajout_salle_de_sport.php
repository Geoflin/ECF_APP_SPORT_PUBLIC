<?php
//on active le debug pour des raisons de sécurité
require_once "../../connexion/debug.php";

//Envoie du mail de confimation d'inscription au partenaire avec sendinblue
require_once('../../../vendor/autoload.php');

require_once "../../../env/secret.php";
require_once "../../../env/secret2.php";

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $api);

$apiInstance = new SendinBlue\Client\Api\TransactionalEmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail(); // \SendinBlue\Client\Model\SendSmtpEmail | Values to send a transactional email
$sendSmtpEmail['to'] = array(array('email'=>$_POST['mail'], 'name'=>'Confirmation ajout salle de sport'));
$sendSmtpEmail['templateId'] = 6;
$sendSmtpEmail['params'] = array('nom'=>$_POST['Nom'], 'client_name'=>$_POST['client_name'],'mail'=>$_POST['mail']);
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>