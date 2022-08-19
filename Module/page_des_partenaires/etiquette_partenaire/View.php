<!--Style du etiquette_partenaire -->
<link href="../../Module/page_des_partenaires/etiquette_partenaire/style.css" rel="stylesheet" />


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
    //nb_de_ligne_database
    foreach ($pdo->query('SELECT client_id FROM api_clients', PDO::FETCH_ASSOC) as $Id){ 
      $ID[]= $Id['client_id'];
      $nb_ID= round((count($ID)), 0, PHP_ROUND_HALF_DOWN);
  }

//Si on appuie sur les flèches vers la gauche on va à la page n-1 de la barre de défilement des étiquettes
$moins= ($plus-'1')*'6';

      //On divise le nombre total de partenaire par 6 et on arrondi le résultat et on ajoute +1 pour obtenir le nombre de page d'étiquette
      $nb_ID= round($nb_ID/'6')+'1';


//Par défaut le offset de la requête se situe à 0 sinon on le offset est égal à $super_plus= ($plus*'6')-'6'; (-6 car on enlève la première page 0 constistué de 6 étiquettes)
if($plus== '1'){
  $super_plus= '0';
} else {
  $super_plus= ($plus*'6')-'6';
  if($super_plus<'0'){$super_plus='0';};
};

?>


<?php

  //On vérifie si le filtre 'client_name' a été activé
  if (isset($_POST['Nom'])){
    $sql = 'SELECT * FROM api_clients WHERE client_name LIKE "'.$_POST['Nom'].'" LIMIT 6 OFFSET '.$super_plus.'';
  } else {
    $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';

      //On vérifie si le filtre 'client_id' a été activé
      if (isset($_POST['id'])){
        $sql = 'SELECT * FROM api_clients WHERE client_id LIKE "'.$_POST['id'].'" LIMIT 6 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';

      //On vérifie si le filtre 'actif' a été activé
      if (isset($_POST['actif'])){
        $sql = 'SELECT * FROM api_clients WHERE actif LIKE 1 LIMIT 100 OFFSET '.$super_plus.'';
      } else {
        $sql = "SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.'";

      //On vérifie si le filtre 'inactif' a été activé
      if (isset($_POST['inactif'])){
        $sql = 'SELECT * FROM api_clients WHERE actif LIKE 0 LIMIT 100 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.'';
      //On vérifie si le filtre 'tout' a été activé
      if (isset($_POST['tout'])){
        $sql = 'SELECT * FROM api_clients LIMIT 100 OFFSET '.$super_plus.' ';
      } else {
        $sql = 'SELECT * FROM api_clients LIMIT 6 OFFSET '.$super_plus.' ';
      }
      }
      }
      }
  }


    foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $api_clients) { ?>

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
                <img src="../../Module/page_des_partenaires/etiquette_partenaire/test.jpg" width="200" height="170">
            </section>

            <!--Section information_client-->
            <section class="information_client">
                <div>id: <?php echo $api_clients['client_id'] ?></div>
                <div><?php echo $api_clients['client_name'] ?></div>
                <div><?php echo $api_clients['short_description'] ?></div>
                <div><a href="<?php echo $api_clients['urll'] ?>" target="_blank"><?php echo $api_clients['urll'] ?><a>
                </div>
            </section>
        </span>

        <input type="text" id="client_id" name="client_id" value="<?php echo $api_clients['client_id'] ?>">

</form>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">

    <label class="toggleSwitch nolabel" onclick="">

        <input type="checkbox" id="<?php echo $api_clients['actif']; ?>" name="<?php echo $api_clients['actif']; ?>"
            value="1" <?php echo $checked; ?> />
        <span>
            <span>Inactif</span>
            <span>Actif</span>
        </span>
        <a></a>
    </label>

</section>

</button>


<?php } ?>