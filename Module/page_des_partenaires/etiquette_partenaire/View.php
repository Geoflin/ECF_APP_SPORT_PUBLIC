  <!--Style du etiquette_partenaire -->
  <link href="../../Module/page_des_partenaires/etiquette_partenaire/style.css" rel="stylesheet" />

  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  foreach ($pdo->query('SELECT * FROM api_clients', PDO::FETCH_ASSOC) as $api_clients) { ?>

<!--View etiquette_partenaire-->
<section class="etiquette_partenaire">

<!--Span reliant image_client_et_information_client-->
<span class="image_client_et_information_client">

<!--Section image_client-->
<section class="image_client">
<img src="../../Module\page_des_partenaires\etiquette_partenaire\test.jpg" width="200" height="170">
</section>

<!--Section information_client-->
<section class="information_client">
    <div>id: <?php echo $api_clients['client_id'] ?></div>
    <div><?php echo $api_clients['client_name'] ?></div>
    <div><?php echo $api_clients['short_description'] ?></div>
    <div><a href="<?php echo $api_clients['urll'] ?>" target="_blank"><?php echo $api_clients['urll'] ?><a></div>
</section>
</span>

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
    
<?php } ?>





