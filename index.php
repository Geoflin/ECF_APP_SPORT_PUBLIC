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
  <!--Style du filtre_partenaire -->
  <link href="Module/filtre_partenaire/style.css" rel="stylesheet" />
    <!--Style du etiquette_partenaire -->
    <link href="Module/etiquette_partenaire/style.css" rel="stylesheet" />
</head>

<header>
</header>

<body>

    <main>
    
    <?php require_once 'Module/filtre_partenaire/View.php'  ?>
    
    <section class="wrap">
    <?php require_once 'Module/etiquette_partenaire/View.php'  ?>
    </section>

</main>

<footer>
</footer>
    
</body>

</html>