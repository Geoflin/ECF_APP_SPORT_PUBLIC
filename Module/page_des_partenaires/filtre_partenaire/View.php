  <!--Style du filtre_partenaire -->
  <link href="../../Module/page_des_partenaires/filtre_partenaire/style.css" rel="stylesheet" />

  <!--View filtre partenaire-->
  <section class="filtre_partenaire">
      <row_1>
          <!--Filtre client_id-->
          <button type="button" class="<?php echo $btn_1 ?>">
              <form class="form" method="post" action="">
                  <span>
                      <label for="Nom">client_name:</label>
                      <input type="text" id="Nom" name="Nom">
                  </span>
                  <input name="filtre" class="<?php echo $btn_1 ?>" type="submit" value="Chercher">
              </form>
          </button>

          <!--Filtre client_actif-->
          <form class="form" method="post" action="">
              <button type="submit" class="<?php echo $btn_1 ?>" name="actif">actif</button>
          </form>


          <!--Filtre client_tout-->
          <form class="form" method="post" action="">
              <button type="submit" class="<?php echo $btn_1 ?>" name="tout">tout</button>
          </form>


          <!--Filtre client_inactif-->
          <form class="form" method="post" action="">
              <button type="submit" class="<?php echo $btn_1 ?>" name="inactif">inactif</button>
          </form>


          <!--Filtre client_id-->
          <button type="button" class="<?php echo $btn_1 ?>">
              <form class="form" method="post" action="">
                  <span>
                      <label for="id">client_id:</label>
                      <input type="text" id="id" name="id">
                  </span>
                  <input name="filtre" class="<?php echo $btn_1 ?>" type="submit" value="Chercher">
              </form>
          </button>
          
      </row_1>
  </section>