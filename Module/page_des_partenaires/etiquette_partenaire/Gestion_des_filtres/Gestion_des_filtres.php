<?php
//On vérifie si le filtre 'client_name' a été activé
  if (isset($_POST['Nom'])){
    $sql = 'SELECT * FROM api_clients WHERE client_name LIKE "'.$_POST['Nom'].'" LIMIT 6 OFFSET '.$super_plus.'';
  } else {
    $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';

      //On vérifie si le filtre 'client_id' a été activé
      if (isset($_POST['id'])){
        $sql = 'SELECT * FROM api_clients WHERE client_id LIKE "'.$_POST['id'].'" LIMIT 6 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';

      //On vérifie si le filtre 'actif' a été activé
      if (isset($_POST['actif'])){
        $sql = 'SELECT * FROM api_clients WHERE actif LIKE 1 LIMIT 100 OFFSET '.$super_plus.'';
      } else {
        $sql = "SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.'";

      //On vérifie si le filtre 'inactif' a été activé
      if (isset($_POST['inactif'])){
        $sql = 'SELECT * FROM api_clients WHERE actif LIKE 0 LIMIT 100 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.'';
      //On vérifie si le filtre 'tout' a été activé
      if (isset($_POST['tout'])){
        $sql = 'SELECT * FROM api_clients LIMIT 100 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';
      }
      }
      }
      }
  }
  ?>