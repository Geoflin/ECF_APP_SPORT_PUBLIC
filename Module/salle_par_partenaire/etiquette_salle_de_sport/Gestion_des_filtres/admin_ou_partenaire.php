<?php
//Si le client est un administrateur ou un partenaire: la recherche sera différente
if($isAdmin== 'oui' || $partenaire== 'oui'){

foreach ($pdo->query('SELECT * FROM salle_de_sport3 WHERE Nom LIKE "'.$_SESSION['username_structure'].'" ', PDO::FETCH_ASSOC) as $api_clients) { 
      $client_id= $api_clients['client_id'];
      $salle_id= $api_clients['salle_id'];
      $mail_structure= $api_clients['mail'];
    };

    $sql = 'SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$client_id.'"  ';

} else {

    $sql = 'SELECT * FROM `salle_de_sport3` WHERE `salle_id` LIKE "'.$salle_id.'" AND `client_id` LIKE "'.$client_id.'"  ';

}
?>