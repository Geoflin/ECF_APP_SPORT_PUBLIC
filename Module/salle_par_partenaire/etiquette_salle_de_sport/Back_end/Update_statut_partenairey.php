<?php
//On traite le formulaire de modification du statut partenaire
if(isset($_POST['modification_statut_partenaire'])){
  

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_clients` SET `actif` = '".$_POST['actif']."' WHERE `api_clients`.`client_id` = '".$_POST['client_id']."' ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
  

//on détermine si la marque de sport est activée ou désactivée
        if($_POST['actif']=='1'){
            $marque_active_ou_desactive= "activée";
         } else {
            $marque_active_ou_desactive= "désactivée";
         }


  require_once '../../mail/marque_de_sport_activee_desactivee.php';

  
}
?>