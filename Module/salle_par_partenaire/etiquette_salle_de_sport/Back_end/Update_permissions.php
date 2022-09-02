<?php
/*on masque les erreurs pour raison de sécurité*/
require_once '../../connexion/debug.php';
//On traite le formulaire de modification des permissions
if(isset($_POST['modification_permission'])){

    $pdo->exec("SET CHARACTER SET utf8");
    $sql = "UPDATE `api_install_perm` SET `Lire` = '".$_POST['Lire']."', `Ecrire` = '".$_POST['Ecrire']."', `Ajouter` = '".$_POST['Ajouter']."', `Ajouter_une_production` = '".$_POST['Ajouter_une_production']."', `Lecture_des_paiements` = '".$_POST['Lecture_des_paiements']."', `Lecture_des_statistques` = '".$_POST['Lecture_des_statistques']."', `Abonnement` = '".$_POST['Abonnement']."', `Lecture_des_horaires_de_paiements` = '".$_POST['Lecture_des_horaires_de_paiements']."', `Ecriture_des_paiements` = '".$_POST['Ecriture_des_paiements']."', `Lecture_des_jours_de_paiements` = '".$_POST['Lecture_des_jours_de_paiements']."' WHERE `salle_id` = '".$_POST['salle_id_permissions']."' ";
    $pdo->exec($sql);
  
    $count = $pdo->exec($sql);
                                   
    $pdo = null;
  };
?>