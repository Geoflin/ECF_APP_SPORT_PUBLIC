<?php
if ($pdo->exec('INSERT INTO salle_de_sport3 (client_id, Nom, branche, zones) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '");') !== false){};
if ($pdo->exec('INSERT INTO api_install_perm (client_id, members_read, members_write, members_add, members_products_add, members_payment_schedules_read, members_statistiques_read, members_subscription_read, payment_schedules_read, payment_schedules_write, payment_day_read) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['members_read'] . '", "'. $_POST['members_write'] . '", "'. $_POST['members_add'] . '", "'. $_POST['members_products_add'] . '" , "'. $_POST['members_payment_schedules_read'] . '" , "'. $_POST['members_statistiques_read'] . '" , "'. $_POST['members_subscription_read'] . '", "'. $_POST['payment_schedules_read'] . '", "'. $_POST['payment_schedules_write'] . '", "'. $_POST['payment_day_read'] . '");') !== false){};
?>

<?php require_once '../../Module/mail/Ajout_salle_de_sport.php' ?>

<?php
/*
//création du contact du partenaire dans le compte sendinblue de notre entreprise 
require_once('../../vendor/autoload.php');

// Configure API key authorization: api-key
$config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key',$api);

// Uncomment below line to configure authorization using: partner-key
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');

$apiInstance = new SendinBlue\Client\Api\ContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createContact = new \SendinBlue\Client\Model\CreateContact(); // \SendinBlue\Client\Model\CreateContact | Values to create a contact


$createContact['attributes'] = array('nom'=>$_POST['Nom']);
$createContact['listIds'] = array(11);
$createContact['emailBlacklisted'] = false;
$createContact['smsBlacklisted'] = false;
$createContact['updateEnabled'] = false;

try {
    $result = $apiInstance->createContact($createContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactsApi->createContact: ', $e->getMessage(), PHP_EOL;
}
*/
?>