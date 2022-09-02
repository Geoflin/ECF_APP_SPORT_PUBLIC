<?php

//on active le debug pour des raisons de sécurité
require_once "../../connexion/debug.php";

//On envoie un mail pour informer le partenaire de la modification du statut de la salle de sport avec sendinblue
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
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
$sendSmtpEmail['to'] = array(array('email'=>$_POST['mail_partenaire'], 'name'=>$_POST['client_name']));
$sendSmtpEmail['templateId'] = 8;
$sendSmtpEmail['params'] = array('nom_salle'=>$_POST['nom_salle'], 'client_name'=>$_POST['client_name'], 'salle_active_ou_desactivee'=>$salle_active_ou_desactivee);
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>

<?php
//On envoie un mail pour informer le partenaire de la modification du statut de la salle de sport avec sendinblue
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
$sendSmtpEmail = new \SendinBlue\Client\Model\SendSmtpEmail();
$sendSmtpEmail['to'] = array(array('email'=>$_POST['mail_structure'], 'name'=>$_POST['client_name']));
$sendSmtpEmail['templateId'] = 8;
$sendSmtpEmail['params'] = array('nom_salle'=>$_POST['nom_salle'], 'client_name'=>$_POST['client_name'], 'salle_active_ou_desactivee'=>$salle_active_ou_desactivee);
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>