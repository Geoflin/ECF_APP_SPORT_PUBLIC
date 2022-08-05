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
  <title>Page_formulaire</title>
  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!--tyle de l'index -->
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<nav>
<span>
<a href="../../index.php"><button name="accueil" type="button" class="btn btn-outline-success btn-lg">Accueil</button></a>
<a href="../page_des_partenaires\View.php"><button type="button" class="btn btn-outline-success btn-lg">Page des partenaires</button></a>
</span>
</nav>

<body>

<form method="POST" action="api/login">

<section class="informations_client_et_droits_client">

<section class="informations_client">
  <span> 
  <label for="client_id">client_id: </label>
  <input type="client_id" id="client_id" name="client_id">
  </span> 

  <span> 
  <label for="install_id">install_id: </label>
  <input type="install_id" id="install_id" name="install_id">
  </span> 

  <span>
  <label for="active">active: </label>
  <input type="active" id="active" name="active">
  </span> 
 
  <span>
  <label for="branch_id">branch_id: </label>
  <input type="branch_id" id="branch_id" name="branch_id">
  </span> 
  
</section>


<!--Tableau des permissions-->
<?php $permissions= array ("Members_read", "Members_write", "Members_payment_schedules_read", "Members_products_read", "Members_schedules_read", "Members_add", "Payment_schedules_read", "Payment_schedules_write", "Members_statistic_read", "Payment_day_read", "members_subscription_read"); ?>

<section class="droits_client">

<?php for ($i=0; $i < 11; $i++) { ?>

  <label for="Members_read"><?php echo $permissions[$i]; ?> </label>

  <?php } ?>

  </section>


  <section class="toggle">

  <?php for ($ii=0; $ii < 11; $ii++) { ?>

  <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">
       <input type="checkbox" checked />
         <span>
            <span>Inactif</span>
            <span>Actif</span>
         </span>
    <a></a>
    </label>

    <?php } ?>

    </section>

  </section>

  
  <input class="btn btn-outline-success btn-lg" type="submit" value="Valider">

</form>

</body>

</html>

<?php 
} else {
  echo "Accès non autorisé";
};
?>