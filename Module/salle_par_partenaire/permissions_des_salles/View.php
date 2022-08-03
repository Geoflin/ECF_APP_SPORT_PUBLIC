<!--Style du etiquette_salle_de_sport -->
<link href="../../Module\salle_par_partenaire\permissions_des_salles\style.css" rel="stylesheet" />

<!--View permissions_des_salles-->
<section class="permissions_des_salles">

<!--Tableau des permissions-->
<?php $permissions= array ("Members_read", "Members_write", "Members_payment_schedules_read", "Members_products_read", "Members_schedules_read", "Members_add", "Payment_schedules_read", "Payment_schedules_write", "Members_statistic_read", "Payment_day_read"); ?>

<?php for ($i=0; $i < 10; $i++) { ?>

    <!--Section bouton_actif_inactif-->
    <section class="bouton_actif_inactif">
    
    <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">
       <input type="checkbox" checked />
         <span>
            <span>Inactif</span>
            <span>Actif</span>
         </span>
    <a></a>
    </label>
    <?php echo $permissions[$i]; ?>
    
    </section>

<?php } ?>

</section>



