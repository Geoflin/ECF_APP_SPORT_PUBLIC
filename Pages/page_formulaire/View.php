<?php
/*on masque les erreurs pour raison de sécurité*/
/*require_once '../../Module\connexion\debug.php';
/*on vérifie l'identité de l'utilisateur*/
/*require_once '../../Module\connexion\verification_identite.php';
if ($isAdmin== 'oui'){
*/
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
<a href="../page_des_partenaires\View.php"><button type="button" class="btn btn-outline-success btn-lg">Voir Partenaire</button></a>
</span>
</nav>

<body>

<form method="POST" action="">

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
  
</section>


<!--Tableau des permissions-->
<?php $permissions= array ("Members_read", "Members_write", "Members_payment_schedules_read", "Members_products_read", "Members_schedules_read", "Members_add", "Payment_schedules_read", "Payment_schedules_write", "Members_statistic_read", "Payment_day_read", "members_subscription_read"); ?>

<section class="droits_client">

<?php for ($i=0; $i < 11; $i++) { ?>

  <label for="<?php echo $permissions[$i]; ?>"><?php echo $permissions[$i]; ?></label>

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

  
  <input name="inscription_partenaire" class="btn btn-outline-success btn-lg" type="submit" value="Valider">

</form>

<!--traitement du formulaire inscription_partenaire-->
<?php
if(isset($_POST['inscription_partenaire'])){
  require_once 'Back_end.php';
}
?>

</body>

</html>

<?php 
/*} else {
  echo "Accès non autorisé";
};*/
?>