<!--Style etiquette_partenaire -->
<link href="../../Module/salle_par_partenaire\etiquette_partenaire/style.css" rel="stylesheet" />

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

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">

<label class="toggleSwitch nolabel" onclick="">
   <input type="checkbox" checked />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>
    
</section>

</section>
    





