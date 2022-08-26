<?php
  /*on charge la clès api de sendinblue (le gestionnaire d'envoie de mail)*/
  require_once "../../env/secret.php";

  /*on charge les identifiants pdo*/
  require_once "../../env/secret2.php";

  /*on masque les erreurs pour raison de sécurité*/
  require_once '../../Module/connexion/debug.php';

  /*on vérifie l'identité de l'utilisateur*/
  require_once '../../Module/connexion/verification_identite.php';
?>