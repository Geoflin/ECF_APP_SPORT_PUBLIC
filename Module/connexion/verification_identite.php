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

<!--Actualisation de la session partenaire lecture seule-->
<?php
if($isAdmin== 'non'){
    foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password2'].'" ', PDO::FETCH_ASSOC) as $dataCompte2) {
        $username = $dataCompte2['client_name'];
        $password = $dataCompte2['password'];
        };
      
      /*Vérification d'identité*/
      
      if ($_SESSION['username'] !== $dataCompte2['client_name']  && $_SESSION['password2'] !== $dataCompte2['password'] || !isset($_SESSION['username'])) {
          $lecture_seule= 'non';
      }else {
          $lecture_seule= 'oui';
      }
}
?>