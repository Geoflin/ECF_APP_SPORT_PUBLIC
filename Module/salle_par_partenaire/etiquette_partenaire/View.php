<!--Style etiquette_partenaire -->
<link href="../../Module/salle_par_partenaire/etiquette_partenaire/style.css" rel="stylesheet" />

<nav>
<a href="../../index.php"><button name="accueil" type="button" class="btn btn-outline-success btn-lg lecture_admin">Accueil</button></a>
<a href="../../Pages/page_des_partenaires/View.php"><button type="button" class="btn btn-outline-success btn-lg lecture_seule"> << Liste des partenaires </button></a>
<!--<div class=""><form class=""><button name="deconnexion" type="submit" onclick='window.location.reload(false)' class="btn btn-outline-success btn-lg display_none lecture_admin">déconnexion</button></form></div>-->
</span>
</nav>

<!--On crée le formulaire de modification du statut du partenaire-->
<form method="POST" action="../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end.php">

<?php
  

//foreach ($pdo->query('SELECT * FROM `api_clients` WHERE `client_id` LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { ?>

<!--View etiquette_partenaire-->
<section class="etiquette_partenaire <?php echo $_POST['lecture_seule'] ?>">

<!--Span reliant image_client_et_information_client-->
<span class="image_client_et_information_client">

<!--Section image_client-->
<section class="image_client">
<img src="../../Module/page_des_partenaires/etiquette_partenaire/test.jpg" width="200" height="170">
</section>


<?php
//on recupère l'id du partenaire
require_once '../../Module/salle_par_partenaire/recuperer_id_partenaire.php';
?>

<?php
  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$client_id.'" ', PDO::FETCH_ASSOC) as $api_clients) { 
?>

    <!--Section information_client-->
<section class="information_client">
    <div>id: <?php echo $api_clients['client_id']?></div>
    <div><?php echo $api_clients['client_name'] ?></div>
    <div><?php echo $api_clients['full_description'] ?></div>
</section>

<!--Section information_client-->
<section class="information_client_2">
    <div><?php echo $api_clients['urll'] ?></div>
    <div><?php echo $api_clients['mail'] ?></div>
</section>
</span>

<?php 
if($api_clients['actif']==1){
   $checked_partenaire_actif= "checked";
} else {
   $checked_partenaire_actif= "unchecked";
}
?>

   <!--on regarde si la permission est actif_inactif-->
   <?php
   if($checked== "checked"){
      $marque_active_ou_desactive= "désactivée";
   } else {
      $marque_active_ou_desactive= "activée";
   }
   ?>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif disabled">

<label class="toggleSwitch nolabel" onclick="">
<input class="" type="checkbox" id="actif" name="actif" value="1" <?php echo $checked_partenaire_actif; ?> />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>

<input name="modification_statut_partenaire" class="btn btn-outline-success btn-lg lecture_seule" type="submit" value="Valider">
    
<?php }; ?>
</form>

<!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
<input name="salle_id" id="salle_id" class="display_none" type="text" value="<?php echo $salle_de_sport3['salle_id'] ?>">

<!--on envoie en POST le mail et le client_name pour le mail de modification-->
<input name="mail" id="mail" class="display_none" type="mail" value="geoffrey.marhoffer@gmail.com">
<input name="client_name" id="client_name" class="display_none" type="text" value="<?php echo $api_clients['client_name'] ?>">

<!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
<input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">


<input type="text" id="marque_active_ou_desactive" class="display_none" name="marque_active_ou_desactive" value="<?php echo $marque_active_ou_desactive ?>">

</section>
</section>
