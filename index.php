<!-- on detruit la session précèdente -->
<?php require_once 'Module/connexion/session_destroy.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Gestionnaire de salle de sport</title>
    <link rel="stylesheet" href="style.css" />
    <!--CDN Bootstrap -->
    <?php require_once 'Style/Bootstrap.php' ?>
</head>

<body>
    <h1>Gestionnaire salle de sport</h1>
    <img src="Img/marque_de_sport.png" />

<?php 
  /*on masque les erreurs pour raison de sécurité*/
  require_once 'Module/connexion/debug.php';

  /*on charge la clès api de sendinblue (le gestionnaire d'envoie de mail)*/
  require_once "env/secret.php";

  /*on charge les identifiants pdo*/
  require_once "env/secret2.php";

    /*on charge la page de connexion*/ 
    require_once 'Module/connexion/View.php';

  /*on vérifie l'identité de l'utilisateur*/
  require_once 'Module/connexion/verification_identite.php';

?>

</body>

</html>