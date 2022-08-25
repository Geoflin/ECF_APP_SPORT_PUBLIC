<!--Actualisation de la session administrateur-->
<?php
    session_start();
foreach ($pdo->query('SELECT * FROM `password` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $dataCompte) {
  $username = $dataCompte['username'];
  $password = $dataCompte['password'];
  };

/*Vérification d'identité*/
if ($_SESSION['username'] == $dataCompte['username']  && $_SESSION['password'] == $dataCompte['password'] || isset($_SESSION['username']) ) {
    $isAdmin= 'oui';
}else {
    $isAdmin= 'non';
}
?>

<!--Actualisation de la session partenaire lecture seule-->
<?php
if($isAdmin== 'non'){
    foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password2'].'" ', PDO::FETCH_ASSOC) as $dataCompte2) {
        $username = $dataCompte2['client_name'];
        $password = $dataCompte2['password'];
        $actif= $dataCompte2['actif'];
        };
      
      /*Vérification d'identité*/
      if ($_SESSION['username'] !== $dataCompte2['client_name']  && $_SESSION['password'] !== MD5($dataCompte2['password']) && $actif=='1') {
          $lecture_seule= 'non';
      }else {
          $lecture_seule= 'oui';
      }
}
?>

<!--Actualisation de la session structure lecture seule-->
<?php
if($isAdmin== 'non' && $lecture_seule== 'non'){
    foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE Nom= "'.$_SESSION['username_structure'].'" AND password="'.$_SESSION['password_structure'].'" ', PDO::FETCH_ASSOC) as $structure) {
        $username = $structure['Nom'];
        $password = $structure['password'];
        };
      
      /*Vérification d'identité*/
      if ($_SESSION['username_structure'] !== $structure['Nom']  && $_SESSION['password_structure'] !== $structure['password'] || !isset($_SESSION['username'])) {
          $lecture_structure= 'non';
      }else {
          $lecture_structure= 'oui';
      }
}

?>