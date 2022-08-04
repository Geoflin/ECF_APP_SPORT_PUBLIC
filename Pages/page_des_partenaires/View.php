<?php
/*On traite la connexion au compte*/
if(!isset($_COOKIE['PHPSESSID'])){
  echo '<nav>
  <a href="../../index.php"><button name="accueil" type="button" class="btn btn-outline-success btn-lg">retour</button></a>
  </nav>';
}else {

        ?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Page_des partenaires</title>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!--tyle de l'index -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<nav>
<a href="../../index.php"><button name="accueil" type="button" class="btn btn-outline-success btn-lg">retour</button></a>
</nav>

<body>

    <main>
    
    <?php require_once '../../Module/page_des_partenaires/filtre_partenaire/View.php'  ?>
    
    <section class="wrap">
    <?php require_once '../../Module/page_des_partenaires/etiquette_partenaire/View.php'  ?>
    </section>

</main>

<footer>
    <?php require_once '../../Module/page_des_partenaires/footer_partenaire/View.php'  ?>
</footer>
    
</body>

</html>

<?php }; ?>