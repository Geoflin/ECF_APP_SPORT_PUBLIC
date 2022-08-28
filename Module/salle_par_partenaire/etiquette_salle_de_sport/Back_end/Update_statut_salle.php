<?php
//On traite le formulaire de modification du statut des salles
if(isset($_POST['modification_statut_salle'])){

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `Salle_active` = '".$_POST['Salle_active']."' WHERE `api_install_perm`.`salle_id` = '".$_POST['salle_id']."' ";
  $sql2 = "UPDATE `salle_de_sport3` SET `Salle_active` = '".$_POST['Salle_active']."' WHERE `salle_id` = '".$_POST['salle_id']."' ";

  $pdo->exec($sql);
  $pdo->exec($sql2); 

//on détermine si la marque de sport est activée ou désactivée
          if($_POST['Salle_active']=='1'){
            $salle_active_ou_desactivee= "activée";
         } else {
            $salle_active_ou_desactivee= "désactivée";
         }

  require_once '../../mail/salle_de_sport_activee_desactivee.php';
}
?>