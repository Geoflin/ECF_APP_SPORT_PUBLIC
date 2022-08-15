    <!--Actualisation de la session administrateur-->
    <?php
    session_start();
foreach ($pdo->query('SELECT * FROM `password` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };

/*Vérification d'identité*/

if ($_SESSION['username'] !== $dataCompte['username']  && $_SESSION['password'] !== $dataCompte['password'] || !isset($_SESSION['username']) ) {
    $isAdmin= 'non';
}else {
    $isAdmin= 'oui';
}
?>

