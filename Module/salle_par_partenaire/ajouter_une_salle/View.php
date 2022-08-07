<head>
  <link href="../../Module\salle_par_partenaire\ajouter_une_salle\style.css" rel="stylesheet" type="text/css" />
</head>

<section class="ajouter_une_salle">

<form method="POST" action="">

<section class="informations_client_et_droits_client">

<section class="informations_client">


  <input class="display_none" type="text" id="client_id" name="client_id" value='<?php echo $api_clients['client_id'] ?>'>

  <span> 
  <label for="Nom">Nom:</label>
  <input type="text" id="Nom" name="Nom">
  </span>

  <span> 
  <label for="zones">zone:</label>
  <input type="text" id="zones" name="zones">
  </span>

  <span> 
  <label for="branche">branche:</label>
  <input type="text" id="branche" name="branche">
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

</section>

<!--traitement du formulaire inscription_partenaire-->
<?php
if(isset($_POST['inscription_partenaire'])){
  require_once 'Back_end.php';
}
?>
