<!--Actualisation de la session administrateur-->
<?php
    session_start();
foreach ($pdo->query('SELECT * FROM `password` WHERE username= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $data_admin) {
  $password = $data_admin['password'];
/*Vérification d'identité*/
if ($_SESSION['username'] == $data_admin['username']  && $_SESSION['password'] == $data_admin['password'] ) {
    $isAdmin= 'oui';
}else {
    $isAdmin= 'non';
}
};
?>

<!--Actualisation de la session partenaire lecture seule-->
<?php
if($isAdmin== 'non' || !isset($isAdmin)){
    foreach ($pdo->query('SELECT * FROM `api_clients` WHERE client_name= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $data_partenaire) {
        $actif= $data_partenaire['actif'];
      /*Vérification d'identité*/
      if ($_SESSION['username'] == $data_partenaire['client_name']  && $_SESSION['password'] == $data_partenaire['password'] && $actif=='1') {
          $partenaire= 'oui';
      }else {
          $partenaire= 'non';
      }
  }
};
?>

<!--Actualisation de la session data_structure lecture seule-->
<?php
if($isAdmin== 'non' && $partenaire== 'non' || !isset($partenaire) ){
    foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE Nom= "'.$_SESSION['username'].'" AND password="'.$_SESSION['password'].'" ', PDO::FETCH_ASSOC) as $data_structure) {
      /*Vérification d'identité*/
      if ($_SESSION['username'] == $data_structure['Nom']  && $_SESSION['password'] == $data_structure['password']) {
          $lecture_structure= 'oui';
      }else {
          $lecture_structure= 'non';
      }
}
};
?>
