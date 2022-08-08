<!--Style etiquette_partenaire -->
<link href="../../Module/salle_par_partenaire\etiquette_partenaire/style.css" rel="stylesheet" />

<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $salle_de_sport3) { ?>

<!--View etiquette_partenaire-->
<section class="etiquette_partenaire">

<!--Span reliant image_client_et_information_client-->
<span class="image_client_et_information_client">

<!--Section image_client-->
<section class="image_client">
<img src="../../Module\page_des_partenaires\etiquette_partenaire\test.jpg" width="200" height="170">
</section>


<!--On recupère les informtaions du partenaire de la "page_des_partenaires" sur lequel nous avons cliqué-->
<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { ?>

    <!--Section information_client-->
<section class="information_client">
    <div>id: <?php echo $api_clients['client_id'] ?></div>
    <div><?php echo $api_clients['client_name'] ?></div>
    <div><?php echo $api_clients['full_description'] ?></div>
</section>

<!--Section information_client-->
<section class="information_client_2">
    <div><?php echo $api_clients['urll'] ?></div>
    <div><?php echo $api_clients['mail'] ?></div>
</section>
</span>

<?php }; ?>


<!--on regarde si la salle est actif_inactif-->
<?php foreach ($pdo->query('SELECT Salle_active FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'"  ', PDO::FETCH_ASSOC) as $Salle_active) { ?>

<?php
if($Salle_active['Salle_active']==1){
   $checked_partenaire_actif= "checked";
} else {
   $checked_partenaire_actif= "unchecked";
}
?>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">

<label class="toggleSwitch nolabel" onclick="">
<input type="checkbox" id="Salle_active" name="Salle_active" value="1" <?php echo $checked_partenaire_actif; ?> />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>

    
</section>
</section>
    

<?php }; ?>
<?php }; ?>

