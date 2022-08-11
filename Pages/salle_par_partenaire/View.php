<?php
/*on masque les erreurs pour raison de sécurité*/
require_once '../../Module\connexion\debug.php';
/*on vérifie l'identité de l'utilisateur*/
require_once '../../Module\connexion\verification_identite.php';
if ($isAdmin== 'oui'){
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Page_des partenaires</title>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   <!--CDN Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--tyle de l'index -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<button type="button" id="permission_moins_js">test</button>

<body>

    <main id="main">

    <div>
    <?php require_once '../../Module\salle_par_partenaire\etiquette_partenaire\View.php'  ?>
    </div>
    <?php require_once '../../Module\salle_par_partenaire\filtre_partenaire\View.php'  ?>
    
    <?php require_once '../../Module\salle_par_partenaire\etiquette_salle_de_sport\View.php'  ?>
    

    <?php require_once '../../Module\salle_par_partenaire\ajouter_une_salle\View.php'  ?>

</main>

<footer>
     <?php require_once '../../Module\salle_par_partenaire\footer_partenaire\View.php'  ?>
</footer>


    
</body>

<script src="script.js"></script>

</html>

<?php 
} else {
  echo "Accès non autorisé";
};
?>

