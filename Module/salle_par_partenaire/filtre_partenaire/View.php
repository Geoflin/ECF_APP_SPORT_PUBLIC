  <!--Style du filtre_partenaire -->
  <link href="../../Module/salle_par_partenaire/filtre_partenaire/style.css" rel="stylesheet" />

<!--View filtre partenaire-->
<section class="filtre_partenaire <?php echo $_POST['display_none'] ?>">

<row_1>

<!--Filtre client_name-->
<button type="button" class="aide btn btn-outline-success btn-lg">
<form class="form" method="post" action="">
<span class="aide"> 
  <label id="Nom" for="Nom">client_name:</label>
  <input class="aide2" type="text" name="Nom_2">
</span>
  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
  <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
  <input name="client_id_2" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <input name="filtre" class="aide2 btn btn-outline-success btn-lg" type="submit" value="Chercher">

  <!--On masque les boutons de tri-->
  <input name="display_none" class="display_none" type="text" value="display_none">
</form>
</button>


<!--Filtre client_actif-->
<form class="form" method="post" action="">
  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
  <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
  <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <input name="salle_id" id="salle_id" class="display_none" type="text" value="<?php echo $_POST['salle_id'] ?>">
  <button type="submit" class="btn btn-outline-success btn-lg" name="actif">actif</button>
  <!--On masque les boutons de tri-->
  <input name="display_none" class="display_none" type="text" value="display_none">
</form>


<!--Filtre client_tout-->
<form class="form" method="post" action="">
  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
  <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
  <input name="client_id_2" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <button type="submit" class="btn btn-outline-success btn-lg" name="tout">tout</button>
    <!--On masque les boutons de tri-->
    <input name="display_none" class="display_none" type="text" value="display_none">
</form>


<!--Filtre client_inactif-->
<form class="form" method="post" action="">
  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
  <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
  <input name="client_id_2" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <button type="submit" class="btn btn-outline-success btn-lg" name="inactif">inactif</button>
    <!--On masque les boutons de tri-->
    <input name="display_none" class="display_none" type="text" value="display_none">
</form>


<!--Filtre client_id-->
<button type="button" class="aide btn btn-outline-success btn-lg">
<form class="form" method="post" action="">
<span class="aide"> 
  <label for="id">client_id:</label>
  <input class="aide2" type="text" name="id_2">
</span>
  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
  <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
  <input name="client_id_2" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
  <input name="filtre" class="aide2 btn btn-outline-success btn-lg" type="submit" value="Chercher">
    <!--On masque les boutons de tri-->
    <input name="display_none" class="display_none" type="text" value="display_none">
</form>
    </button>

</row_1>

</section>