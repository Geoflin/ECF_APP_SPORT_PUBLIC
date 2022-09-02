<?php
//on calcule le nombre total de partenaire
    //nb_de_ligne_database
    foreach ($pdo->query('SELECT client_id FROM api_clients', PDO::FETCH_ASSOC) as $Id){ 
      $ID[]= $Id['client_id'];
      $nb_ID= round((count($ID)), 0, PHP_ROUND_HALF_DOWN);
  }

  
?>