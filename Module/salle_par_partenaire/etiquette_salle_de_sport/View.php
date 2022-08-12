<!--Style du etiquette_salle_de_sport -->
<link href="../../Module\salle_par_partenaire\etiquette_salle_de_sport\style.css" rel="stylesheet" />

<?php

//si un bouton de la barre de défilement est activé on va à la page $_POST['plus']
if(isset($_POST['plus'])){
  $plus= $_POST['plus'];
  if($plus<'1'){$plus='1';};
  if($plus>'5'){$plus='5';};
} else {
//si un bouton de la barre de défilement est activé on va à la page $_POST['plus2']
  if(isset($_POST['plus2'])){
    $plus= $_POST['plus2'];
    if($plus<'1'){$plus='1';};
    if($plus>'5'){$plus='5';};
  }else{
//Par défaut la barre de défilement des étiquettes ce situe à la page 1 sinon on va à la page $_POST['plus']
    $plus= '1';
  };
};

//on calcule le nombre total de partenaire
$pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');
    //nb_de_ligne_database
    foreach ($pdo->query('SELECT salle_id FROM salle_de_sport3', PDO::FETCH_ASSOC) as $Id){ 
      $ID[]= $Id['client_id'];
      $nb_ID= round((count($ID)), 0, PHP_ROUND_HALF_DOWN);
  }

//Si on appuie sur les flèches vers la gauche on va à la page n-1 de la barre de défilement des étiquettes
$moins= ($plus-'1')*'1';

      //On divise le nombre total de partenaire par 6 et on arrondi le résultat et on ajoute +1 pour obtenir le nombre de page d'étiquette
      $nb_ID= round($nb_ID/'2')+'1';


//Par défaut le offset de la requête se situe à 0 sinon on le offset est égal à $super_plus= ($plus*'6')-'6'; (-6 car on enlève la première page 0 constistué de 6 étiquettes)
if($plus== '1'){
  $super_plus= '0';
} else {
  $super_plus= ($plus*'2')-'2';
  if($super_plus<'0'){$super_plus='0';};
};

?>


<!--On crée le formulaire de modification du statut de la salle-->
<form method="POST" action="../../Module\salle_par_partenaire\etiquette_salle_de_sport\Back_end.php">

  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  if(isset($_POST['client_id_2'])){
   $client_id_2= $_POST['client_id_2'];
  } else {
   $client_id_2= $_POST['client_id'];
  };
  ?>

<?php
      //On vérifie si le filtre 'client_name' a été activé
      if (isset($_POST['Nom_2'])){
         $sql = 'SELECT * FROM salle_de_sport3 WHERE Nom LIKE "'.$_POST['Nom_2'].'" AND `client_id` LIKE "'.$client_id_2.'" LIMIT 1 OFFSET '.$super_plus.' ';
       } else {
     
           //On vérifie si le filtre 'client_id' a été activé
           if (isset($_POST['id_2'])){
             $sql = 'SELECT * FROM salle_de_sport3 WHERE salle_id LIKE "'.$_POST['id_2'].'" AND `client_id` LIKE "'.$client_id_2.'" LIMIT 1 OFFSET '.$super_plus.' ';
           } else {
            
           //On vérifie si le filtre 'actif' a été activé
           if (isset($_POST['actif'])){
             $sql = 'SELECT * FROM api_install_perm WHERE Salle_active LIKE "1" AND `client_id` LIKE "'.$client_id_2.'" ';
           } else { 

           //On vérifie si le filtre 'inactif' a été activé
           if (isset($_POST['inactif'])){
             $sql = 'SELECT * FROM api_install_perm WHERE Salle_active LIKE "0" AND `client_id` LIKE "'.$client_id_2.'" ';
           } else {

           //On vérifie si le filtre 'tout' a été activé
           if (isset($_POST['tout'])){
            $sql = 'SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$client_id_2.'" ';
           } else {

            $sql = 'SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$_POST['client_id'].'"  ';
           }
           }
           }
           }
       }

       
  
  foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $salle_de_sport3) { ?>

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

   <!--on regarde si les filtres ont été activé pour savoir quel 'client_actif on prend'--
   <?php
   if(isset($_POST['client_actif'])){
      $client_actif= $_POST['client_actif'];
   } else {
      $client_actif= $api_clients['actif'];
   }
   ?>

   <?php
   if($Salle_active['Salle_active']==1 && $client_actif==1){
      $checked_Salle_active= "checked";
   } else {
      $checked_Salle_active= "unchecked";
   }
   ?>

 <!-Section bouton_actif_inactif-->

<section class="bouton_actif_inactif">

<label class="toggleSwitch nolabel">
<input type="checkbox" id="Salle_active" name="Salle_active" value="1" <?php echo $checked_Salle_active; ?> />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>

<!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
<input name="salle_id_1" id="salle_id" class="display_none" type="text" value="<?php echo $salle_de_sport3['salle_id'] ?>">

<!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
<input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">

<input name="modification_statut_salle" class="btn btn-outline-success btn-lg" type="submit" value="Valider">

<?php }; ?>

</section>
</section>

</form>


<!--Style du permissions_des_salles -->
<link href="../../Module\salle_par_partenaire\permissions_des_salles\style.css" rel="stylesheet" />

<!--View permissions_des_salles-->
<section id="permissions_des_salles" class="permissions_des_salles">

<span>
   <span>Permission</span> 
   <span class="material-symbols-outlined">do_not_disturb_on</span>
<span>


<!--On crée le formulaire de modification des permissions-->
<form method="POST" action="../../Module\salle_par_partenaire\etiquette_salle_de_sport\Back_end.php">

<section class="box_bouton_actif_inactif">

<!--Tableau des permissions-->
<?php $permissions= array ("members_read", "members_write", "members_add", "members_products_add", "members_payment_schedules_read", "members_statistiques_read", "members_subscription_read", "payment_schedules_read", "payment_schedules_write", "payment_day_read"); ?>

<?php for ($i=0; $i < 10; $i++) { ?>

  <div>
   <?php foreach ($pdo->query('SELECT * FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'" AND "'.$permissions[$i].'" LIKE "'.$permissions[$i].'"  ', PDO::FETCH_ASSOC) as $api_install_perm) { ?>

   <!--on regarde si la permission est actif_inactif-->
   <?php
   if($api_install_perm[$permissions[$i]]==1 && $Salle_active['Salle_active']==1 && $client_actif==1){
      $checked= "checked";
   } else {
      $checked= "unchecked";
   }
   ?>

    <!--Section bouton_actif_inactif-->
    <section class="bouton_actif_inactif">
    
    <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">
      
       <input type="checkbox" id="<?php echo $permissions[$i]; ?>" name="<?php echo $permissions[$i]; ?>" value="1" <?php echo $checked; ?> />
         <span>
            <span>Inactif</span>
            <span>Actif</span>
         </span>
    <a></a>
    </label>
    <?php echo $permissions[$i]; ?>
    
    </section>

<?php }; ?>
  </div>
<?php }; ?>

  <input name="modification_permission" class="btn btn-outline-success btn-lg" type="submit" value="Valider">



</section>
</section>



<!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
<input name="salle_id" id="salle_id" class="display_none" type="text" value="<?php echo $salle_de_sport3['salle_id'] ?>">

<!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
<input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $salle_de_sport3['client_id'] ?>">


<?php }; ?>


</form>

<!--traitement du formulaire inscription_partenaire-->
<?php
if(isset($_POST['modification_permission'])){
  require_once '../../Module\salle_par_partenaire\etiquette_salle_de_sport\Back_end.php';
}
?>

