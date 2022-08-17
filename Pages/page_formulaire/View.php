<?php
require_once "../../env/secret2.php";
require_once "../../env/secret.php";
/*on masque les erreurs pour raison de sécurité*/
require_once '../../Module/connexion/debug.php';
/*on vérifie l'identité de l'utilisateur*/
require_once '../../Module/connexion/verification_identite.php';
if ($isAdmin== 'oui'){

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Page_formulaire</title>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!--tyle de l'index -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<nav>
<span>
<a href="../../index.php"><button name="accueil" type="button" class="btn btn-outline-success btn-lg">Accueil</button></a>
<a href="../page_des_partenaires/View.php"><button type="button" class="btn btn-outline-success btn-lg">Voir Partenaire</button></a>
</span>
</nav>

<body>

<form method="POST" action="Back_end.php">

<section class="informations_client_et_droits_client">

<section class="informations_client">
  <span> 
  <label for="client_name">client_name: </label>
  <input type="text" id="client_name" name="client_name">
  </span> 

  <span> 
  <label for="password">password: </label>
  <input type="password" id="password" name="password">
  </span> 

  <span> 
  <label for="short_description">short_description: </label>
  <input type="text" id="short_description" name="short_description">
  </span> 

  <span>
  <label for="full_description">full_description: </label>
  <input type="text" id="full_description" name="full_description">
  </span> 
 
  <span>
  <label for="urll">url: </label>
  <input type="url" id="urll" name="urll">
  </span> 

  <span>
  <label for="mail">mail: </label>
  <input type="mail" id="mail" name="mail">
  </span> 

  <span>
  <input class="display_none" type="text" name="actif" value="1">
  </span> 
  
</section>
  
  <input name="inscription_partenaire" class="btn btn-outline-success btn-lg" type="submit" value="Valider">

</form>

</body>

</html>

<?php 
} else {
  echo "Accès non autorisé";
};
?>