<!--On recupère l'id du partenaire de la "page_des_partenaires" sur lequel nous avons cliqué-->
<?php echo $_POST['client_id']; ?>

<!--On recupère les informtaions du partenaire de la "page_des_partenaires" sur lequel nous avons cliqué-->
<?php

  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$_POST['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { ?>

<!--Section information_client-->
<section class="information_client">
    <div>id: <?php echo $api_clients['client_id'] ?></div>
    <div><?php echo $api_clients['client_name'] ?></div>
    <div><?php echo $api_clients['full_description'] ?></div>
</section>

<?php }; ?>