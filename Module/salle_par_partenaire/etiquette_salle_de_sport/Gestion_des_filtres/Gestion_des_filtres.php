<?php
//on ne répète pas les recherches sql si la recherche par nom est désactivée
        $counti= '1';
     
           //On vérifie si le filtre 'client_id' a été activé
           if (isset($_POST['id_2'])){
             $sql = 'SELECT * FROM salle_de_sport3 WHERE salle_id LIKE "'.$_POST['id_2'].'" AND `client_id` LIKE "'.$client_id.'" ';
           } else {
            
           //On vérifie si le filtre 'actif' a été activé
           if (isset($_POST['actif'])){
             $sql = 'SELECT * FROM salle_de_sport3 WHERE Salle_active LIKE "1" AND `client_id` LIKE "'.$client_id.'" ';
           } else { 

           //On vérifie si le filtre 'inactif' a été activé
           if (isset($_POST['inactif'])){
             $sql = 'SELECT * FROM salle_de_sport3 WHERE Salle_active LIKE "0" AND `client_id` LIKE "'.$client_id.'" ';
           } else {

           //On vérifie si le filtre 'tout' a été activé
           if (isset($_POST['tout'])){
            $sql = 'SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$client_id.'" ';
           }
           }
           }
           }
?>