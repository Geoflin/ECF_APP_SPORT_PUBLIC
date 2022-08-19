<!DOCTYPE html>
<html>

<head>
    <title>Gestionnaire de salle de sport</title>
    <link rel="stylesheet" href="style.css" />
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <h1>Gestionnaire salle de sport</h1>

    <img src="test.jpg" />

    <?php 
  /*on masque les erreurs pour raison de sécurité*/
  require_once 'Module/connexion/debug.php';
  require_once "env/secret.php";
  require_once "env/secret2.php";
  require_once 'Module/connexion/View.php';
  /*on vérifie l'identité de l'utilisateur*/
  require_once 'Module/connexion/verification_identite.php';
  ?>

</body>

</html>