<?php
// require_once "../../env/secret2.php";
  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  if($data_partenaire['client_id'] != ""){
    foreach ($pdo->query('SELECT client_id FROM api_clients WHERE client_name LIKE "'.$_SESSION['username'].'" ', PDO::FETCH_ASSOC) as $api_clients) { 
      $client_id2= $api_clients['client_id'];
    };
  } else {
    foreach ($pdo->query('SELECT * FROM salle_de_sport3 WHERE Nom LIKE "'.$_SESSION['username_structure'].'" ', PDO::FETCH_ASSOC) as $api_clients) { 
      $client_id2= $api_clients['client_id'];
      $salle_id= $api_clients['salle_id'];
    };
  }
?>

<?php
//On défini le client_id
if (isset($_POST['client_id'])){
    $client_id= $_POST['client_id'];
} else {
    $client_id= $client_id2;
};
?>