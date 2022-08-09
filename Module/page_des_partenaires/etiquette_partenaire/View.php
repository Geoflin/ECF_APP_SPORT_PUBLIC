  <!--Style du etiquette_partenaire -->
  <link href="../../Module/page_des_partenaires/etiquette_partenaire/style.css" rel="stylesheet" />

  <?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');


  if (isset($_POST['Nom'])){
    $sql = 'SELECT * FROM api_clients WHERE client_name LIKE "'.$_POST['Nom'].'" ';
  } else {
    $sql = "SELECT * FROM api_clients";
  }

    foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $api_clients) { 
      
      ?>

   <!--on regarde si la permission est actif_inactif-->
   <?php
   if($api_clients['actif']==1){
      $checked= "checked";
   } else {
      $checked= "unchecked";
   }
   ?>

<!--View etiquette_partenaire-->

<!--formulaire indiquant l'id_client à la page suivante-->
<form method="POST" action="../../Pages/salle_par_partenaire/View.php">
<button name="salle_par_partenaire" type="submit" class="etiquette_partenaire btn btn-outline-success btn-lg">

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

<input type="text" id="client_id" name="client_id" value="<?php echo $api_clients['client_id'] ?>">

</form>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">

<label class="toggleSwitch nolabel" onclick="">
  
    <input type="checkbox" id="<?php echo $api_clients['actif']; ?>" name="<?php echo $api_clients['actif']; ?>" value="1" <?php echo $checked; ?> />
     <span>
        <span>Inactif</span>
        <span>Actif</span>
     </span>
<a></a>
</label>
    
</section>

</button>


<?php } ?>







