<?php require_once '../../env/secret.php'; ?>
  
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
  
  //if ($pdo->exec('INSERT INTO api_clients (actif, client_name, password, active, short_description, full_description, urll, mail) VALUES ("'. $_POST['actif'] . '", "'. $_POST['client_name'] . '", "'. $_POST['password'] . '", "On", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['mail'] . '");') !== false){};
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
require_once('../../vendor/autoload.php');

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
$sendSmtpEmail['to'] = array(array('email'=>'geoffrey.marhoffer@gmail.com', 'name'=>'Geoffrey Marhoffer'));
$sendSmtpEmail['templateId'] = 2;
$sendSmtpEmail['params'] = array('name'=>'Geoffrey', 'surname'=>'Marhoffer');
$sendSmtpEmail['headers'] = array('X-Mailin-custom'=>'custom_header_1:custom_value_1|custom_header_2:custom_value_2');

try {
    $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
}
?>

