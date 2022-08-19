  <!--Style du filtre_partenaire -->
  <link href="../../Module/salle_par_partenaire/filtre_partenaire/style.css" rel="stylesheet" />

  <!--View filtre partenaire-->
  <section class="filtre_partenaire">

      <row_1>

          <!--Filtre client_name-->
          <button type="button" class="aide btn btn-outline-success btn-lg">
              <form class="form" method="post" action="">
                  <span class="aide">
                      <label id="Nom" for="Nom">client_name:</label>
                      <input class="aide2" type="text" name="Nom_2">
                  </span>
                  <?php
  if($isAdmin== 'oui'){
  ?>
                  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
                  <input name="client_actif" class="display_none" type="text"
                      value="<?php echo $api_clients['actif'] ?>">
                  <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
                  <?php
  }
  ?>
                  <input name="filtre" class="aide2 btn btn-outline-success btn-lg" type="submit" value="Chercher">
              </form>
          </button>


          <!--Filtre client_actif-->
          <form class="form" method="post" action="">
              <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
              <?php
  if($isAdmin== 'oui'){
  ?>
              <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
              <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
              <input name="salle_id" id="salle_id" class="display_none" type="text"
                  value="<?php echo $_POST['salle_id'] ?>">
              <?php
  }
  ?>
              <button name="actif" type="submit" class="btn btn-outline-success btn-lg">actif</button>
          </form>


          <!--Filtre client_tout-->
          <form class="form" method="post" action="">
              <?php
  if($isAdmin== 'oui'){
  ?>
              <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
              <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
              <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
              <?php
  }
  ?>
              <button type="submit" class="btn btn-outline-success btn-lg" name="tout">tout</button>

          </form>


          <!--Filtre client_inactif-->
          <form class="form" method="post" action="">
              <?php
  if($isAdmin== 'oui'){
  ?>
              <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
              <input name="client_actif" class="display_none" type="text" value="<?php echo $api_clients['actif'] ?>">
              <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
              <?php
  }
  ?>

              <button type="submit" class="btn btn-outline-success btn-lg" name="inactif">inactif</button>
          </form>


          <!--Filtre client_id-->
          <button type="button" class="aide btn btn-outline-success btn-lg">
              <form class="form" method="post" action="">

                  <span class="aide">
                      <label for="id">client_id:</label>
                      <input class="aide2" type="text" name="id_2">
                  </span>
                  <?php
  if($isAdmin== 'oui'){
  ?>
                  <!--On transmet des informations au module etiquette_salle_de_sport de la page pour ne pas perturber son fonctionnement-->
                  <input name="client_actif" class="display_none" type="text"
                      value="<?php echo $api_clients['actif'] ?>">
                  <input name="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
                  <?php
  }
  ?>

                  <input name="filtre" class="aide2 btn btn-outline-success btn-lg" type="submit" value="Chercher">

              </form>
          </button>

      </row_1>

  </section>