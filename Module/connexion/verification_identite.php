    <!--Actualisation de la session administrateur-->
    <?php
    require_once '../../Module\connexion\debug.php';
    session_start();
$pdo_kinepolise = new PDO('mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_c4414696a201e4e', 'b37053e2dac347', '18a212b7');
foreach ($pdo_kinepolise->query('SELECT * FROM `kinepolise_administrateur_password` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };

/*Vérification d'identité*/

if ($_SESSION['username'] !== $dataCompte['username']  && $_SESSION['password'] !== $dataCompte['password'] || !isset($_SESSION['username']) ) {
    $isAdmin= 'non';


}else {
    $isAdmin= 'oui';
}