<!--Style du etiquette_salle_de_sport -->
<link href="../../Module\salle_par_partenaire\etiquette_salle_de_sport\style.css" rel="stylesheet" />


  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $salle_de_sport3) { ?>

<!--View etiquette_partenaire-->
<section class="etiquette_salle_de_sport">

<!--Span reliant image_salle_de_sport_et_information_salle_de_sport-->
<span class="image_salle_de_sport_et_information_salle_de_sport">

<!--Section image_salle_de_sport-->
<section class="image_salle_de_sport">
<img src="../../Module\page_des_partenaires\etiquette_partenaire\test.jpg" width="200" height="170">
</section>

<!--Section information_salle_de_sport-->
<section class="information_salle_de_sport">
    <div>Salle_id: <?php echo $salle_de_sport3['salle_id'] ?></div>
    <div><?php echo $salle_de_sport3['Nom'] ?></div>
    <div><?php echo $salle_de_sport3['branche'] ?></div>
    <div><?php echo $salle_de_sport3['zones'] ?></div>
</section>
</span>

   <!--on regarde si la salle est actif_inactif-->

<?php foreach ($pdo->query('SELECT Salle_active FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'"  ', PDO::FETCH_ASSOC) as $Salle_active) { ?>

   <?php
   if($Salle_active['Salle_active']==1){
      $checked_Salle_active= "checked";
   } else {
      $checked_Salle_active= "unchecked";
   }
   ?>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">

<label class="toggleSwitch nolabel" onclick="">
   <input type="checkbox" <?php echo $checked_Salle_active; ?> />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>
    
</section>

</section>


<!--Style du permissions_des_salles -->
<link href="../../Module\salle_par_partenaire\permissions_des_salles\style.css" rel="stylesheet" />

<!--View permissions_des_salles-->
<section class="permissions_des_salles">

<span id="permission_moins">
   Permission    
   <span class="material-symbols-outlined">do_not_disturb_on</span>
<span>

<section class="box_bouton_actif_inactif">

<!--Tableau des permissions-->
<?php $permissions= array ("members_read", "members_write", "members_add", "members_products_add", "members_payment_schedules_read", "members_statistiques_read", "members_subscription_read", "payment_schedules_read", "payment_schedules_write", "payment_day_read"); ?>

<?php for ($i=0; $i < 10; $i++) { ?>

   <?php foreach ($pdo->query('SELECT * FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'" AND "'.$permissions[$i].'" LIKE "'.$permissions[$i].'"  ', PDO::FETCH_ASSOC) as $api_install_perm) { ?>

   <!--on regarde si la permission est actif_inactif-->
   <?php
   if($api_install_perm[$permissions[$i]]==1 && $Salle_active['Salle_active']==1){
      $checked= "checked";
   } else {
      $checked= "unchecked";
   }
   
   ?>

    <!--Section bouton_actif_inactif-->
    <section class="bouton_actif_inactif">
    
    <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">
      
       <input type="checkbox" <?php echo $checked; ?> />
         <span>
            <span>Inactif</span>
            <span>Actif</span>
         </span>
    <a></a>
    </label>
    <?php echo $permissions[$i]; ?>
    
    </section>

<?php }; ?>
<?php }; ?>

</section>
</section>

<?php }; ?>
<?php }; ?>
