  <!--Style du filtre_partenaire -->
  <link href="../../Module/page_des_partenaires/filtre_partenaire/style.css" rel="stylesheet" />

<!--View filtre partenaire-->
<section class="filtre_partenaire">

<row_1>
    <button type="button" class="btn btn-outline-success btn-lg">

<!--On permet au client de ce connecter-->
<form class="form" method="post" action="">

<span> 
  <label for="Nom">client_name:</label>
  <input type="text" id="Nom" name="Nom">
  </span>

  <input name="filtre" class="btn btn-outline-success btn-lg" type="submit" value="Chercher">

</form>
    </button>

    <button type="button" class="btn btn-outline-success btn-lg">
                <!--On permet au client de ce connecter-->
<form class="form" method="post" action="">
  
<span> 
  <label for="id">client_id:</label>
  <input type="text" id="id" name="id">
  </span>

  <input name="filtre" class="btn btn-outline-success btn-lg" type="submit" value="Chercher">

</form>
    </button>

</row_1>


<row_2>
    <button type="button" class="btn btn-outline-success btn-lg">actif</button>
    <button type="button" class="btn btn-outline-success btn-lg">non <br/> actif</button>
</row_2>

</section>


