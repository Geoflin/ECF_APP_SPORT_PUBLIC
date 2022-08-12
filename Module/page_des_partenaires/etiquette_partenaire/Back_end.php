<?php
  $pdo = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_cb119347919fa64', 'b17b85233573cc', '95de3bee');

  foreach ($pdo->query('SELECT * FROM api_clients', PDO::FETCH_ASSOC) as $api_clients) { ?>
    <?php echo $api_clients['client_id'].'<br>'; ?>
    <section class="information_client">
    <div>client_id</div>
    <div>client_name</div>
    <div>short_description</div>
    <div>url</div>
</section>
</span>
    <?php } ?>



    <!--formulaire indiquant l'id_client à la page suivante-->
<form method="POST" action="../../Pages/salle_par_partenaire/View.php">
<button name="salle_par_partenaire" type="submit" class="etiquette_partenaire btn btn-outline-success btn-lg">
<!--Span reliant image_client_et_information_client-->
<span class="image_client_et_information_client">

<!--Section image_client-->
<section class="image_client">
<img src="../../Module/page_des_partenaires/etiquette_partenaire/test.jpg" width="200" height="170">
</section>

<!--Section information_client-->
<section class="information_client">
    <div>id: <?php echo $api_clients['client_id'] ?></div>
    <div><?php echo $api_clients['client_name'] ?></div>
    <div><?php echo $api_clients['short_description'] ?></div>
    <div><a href="<?php echo $api_clients['urll'] ?>" target="_blank"><?php echo $api_clients['urll'] ?><a></div>
</section>
</span>

<input type="text" id="client_id" name="client_id" value="<?php echo $api_clients['client_id'] ?>">

</form>