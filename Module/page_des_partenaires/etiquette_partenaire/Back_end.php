<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

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

?>