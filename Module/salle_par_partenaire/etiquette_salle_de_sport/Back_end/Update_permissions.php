<?php
//On traite le formulaire de modification des permissions
if(isset($_POST['modification_permission'])){

    $pdo->exec("SET CHARACTER SET utf8");
    $sql = "UPDATE `api_install_perm` SET `members_read` = '".$_POST['members_read']."', `members_write` = '".$_POST['members_write']."', `members_add` = '".$_POST['members_add']."', `members_products_add` = '".$_POST['members_products_add']."', `members_payment_schedules_read` = '".$_POST['members_payment_schedules_read']."', `members_statistiques_read` = '".$_POST['members_statistiques_read']."', `members_subscription_read` = '".$_POST['members_subscription_read']."', `payment_schedules_read` = '".$_POST['payment_schedules_read']."', `payment_schedules_write` = '".$_POST['payment_schedules_write']."', `payment_day_read` = '".$_POST['payment_day_read']."' WHERE `salle_id` = '".$_POST['salle_id_permissions']."' ";
    $pdo->exec($sql);
  
    $count = $pdo->exec($sql);
                                   
    $pdo = null;
  };
?>