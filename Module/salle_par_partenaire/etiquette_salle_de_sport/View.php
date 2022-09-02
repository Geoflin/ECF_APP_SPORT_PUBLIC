<!DOCTYPE html>
<html>

<head>
<!--Style du etiquette_salle_de_sport -->
<link href="../../Module/salle_par_partenaire/etiquette_salle_de_sport/style.css" rel="stylesheet" />
<!--Style du etiquette_salle_de_sport -->
<link href="../../Style/Toggleswitch/etiquette_salle_de_sport.css" rel="stylesheet" />
</head>

<body>

<?php
    //on recupère l'id du partenaire
    require_once '../../Module/salle_par_partenaire/recuperer_id_partenaire.php';
?>

    <!--On crée le formulaire de modification du statut de la salle-->
    <form class="pointer_events_none" method="POST" action="../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end.php">

<?php
        //Si le client est un administrateur ou un partenaire: la recherche sql sera différente
        require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/Gestion_des_filtres/admin_ou_partenaire.php';
        //On choisit la requete sql a effectuer
        require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/Gestion_des_filtres/Gestion_des_filtres.php';
        //On choisit la requete sql a effectuer si la recherche par nom est activée
        require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/Gestion_des_filtres/Recherche_par_nom.php';
           
           for ($a=0; $a < $counti; $a++) {  

            //on effectue une requete sql uniquement si la recherche par nom est activée
            if (isset($_POST['Nom_2'])){
                $sql= 'SELECT * FROM salle_de_sport3 WHERE Nom LIKE "'.$Nom_fetch[$a].'" AND `client_id` LIKE "'.$client_id.'" ';
            }
            
           foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $salle_de_sport3) { 

?>

        <!--View etiquette_partenaire-->
        <section class="etiquette_salle_de_sport">

            <!--Span reliant image_salle_de_sport_et_information_salle_de_sport-->
            <span class="image_salle_de_sport_et_information_salle_de_sport">
            <h3>Etiquette structure</h3>
                <!--Section image_salle_de_sport-->
                <!-- <section class="image_salle_de_sport"> -->
                    <img class="image_salle_de_sport" src="../../Img/salle_de_sport.jpg" width="200" height="170">
                <!-- </section> -->

                <!--Section information_salle_de_sport-->
                <section class="information_salle_de_sport">
                    <div>Salle_id: <?php echo $salle_de_sport3['salle_id'] ?></div>
                    <div><?php echo $salle_de_sport3['Nom'] ?></div>
                    <div><?php echo $salle_de_sport3['branche'] ?></div>
                    <div><?php echo $salle_de_sport3['zones'] ?></div>
                </section>
            </span>

<?php             
// on regarde si le partenaire et la salle sont actif 
        
            // on regarde si la salle est actif_inactif
            foreach ($pdo->query('SELECT * FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'"  ', PDO::FETCH_ASSOC) as $Salle_active) { 
            //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
            foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$Salle_active['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) {
            // on regarde si les filtres ont été activé pour savoir quel 'client_actif on prend'

            //on regarde si le client est actif
            if(isset($_POST['client_actif'])){
               $client_actif= $_POST['client_actif'];
            } else {
              $client_actif= $api_clients['actif'];
            }

            //on regarde si la salle est active
            if($Salle_active['Salle_active']==1 && $client_actif==1){
                $checked_Salle_active= "checked";
                $salle_active_ou_desactivee= "désactivée";
            } else {
                $checked_Salle_active= "unchecked";
                $salle_active_ou_desactivee= "activée";
            }

?>

            <!-- Section bouton_actif_inactif-->
            <section class="bouton_actif_inactif disabled">

                <label class="toggleSwitch_etiquette_salle_de_sport nolabel">
                    <input class="" type="checkbox" id="Salle_active" name="Salle_active" value="1"
                        <?php echo $checked_Salle_active; ?> />
                    <span>
                        <span>Inactif</span>
                        <span>Actif</span>
                    </span>
                    <a></a>
                </label>

                <!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
                <input name="salle_id" id="salle_id" class="display_none" type="text"
                    value="<?php echo $salle_de_sport3['salle_id'] ?>">

                <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                <input name="client_id" id="client_id" class="display_none" type="text"
                    value="<?php echo $_POST['client_id'] ?>">

                <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                <input name="nom_salle" id="nom_salle" class="display_none" type="text"
                    value="<?php echo $salle_de_sport3['Nom'] ?>">



<?php
  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$Salle_active['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { 
?>
                <input name="client_name" id="client_name" class="display_none" type="text"
                    value="<?php echo $api_clients['client_name'] ?>">
<?php 
   } 
?>

                <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                <input name="template" id="template" class="display_none" type="text"
                    value="salle_active_ou_desactivee">

                <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                <input name="salle_active_ou_desactivee_2" id="salle_active_ou_desactivee_2" class="display_none"
                    type="text" value="<?php echo $salle_active_ou_desactivee ?>">

<?php

foreach ($pdo->query('SELECT * FROM `salle_de_sport3` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'" ', PDO::FETCH_ASSOC) as $salle_de_sport3) { 
      $mail_structure= $salle_de_sport3['mail'];
?>
                <!--on envoie en POST le mail et le client_name pour le mail de modification-->
                <input name="mail_structure" id="mail_structure" class="display_none" type="text"
                    value="<?php echo $mail_structure ?>">
<?php
        };
?>
                <!--on envoie en POST le mail et le client_name pour le mail de modification-->
                <input name="mail_partenaire" id="mail_partenaire" class="display_none" type="text"
                    value="<?php echo $api_clients['mail'] ?>">
                <input id="<?php $partenaire ?>" name="modification_statut_salle" class="valider btn btn-outline-success btn-lg reset partenaire" type="submit" value="Valider" onclick="return script_etiquette_salle_de_sport()">

<?php 
         }; 
?>

            </section>
        </section>
    </form>


    <!--Style du permissions_des_salles -->
    <link href="../../Module/salle_par_partenaire/permissions_des_salles/style.css" rel="stylesheet" />

    <!--View permissions_des_salles-->
    <section id="permissions_des_salles" class="permissions_des_salles">

        <span>
            <span>Permission</span>
            <span class="material-symbols-outlined">do_not_disturb_on</span>
        <span>

                <!--On crée le formulaire de modification des permissions-->
                <form class="" method="POST" action="../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end.php">

                    <section class="box_bouton_actif_inactif disabled">

                        <!--Tableau des permissions-->
                        <?php 
                        $permissions= array ("Lire", "Ecrire", "Ajouter", "Ajouter_une_production", "Lecture_des_paiements", "Lecture_des_statistques", "Abonnement", "Lecture_des_horaires_de_paiements", "Ecriture_des_paiements", "Lecture_des_jours_de_paiements");

                        for ($i=0; $i < 10; $i++) { 
                        ?>

                        <div>

                            <?php 
                            foreach ($pdo->query('SELECT * FROM `api_install_perm` WHERE `salle_id` LIKE "'.$salle_de_sport3['salle_id'].'" AND "'.$permissions[$i].'" LIKE "'.$permissions[$i].'"  ', PDO::FETCH_ASSOC) as $api_install_perm) { 
                           

                                // on regarde si la permission est actif_inactif
                                if($api_install_perm[$permissions[$i]]==1 && $Salle_active['Salle_active']==1 && $client_actif==1  && $permission_globale[$permissions[$i]]== 1){
                                    $checked= "checked";
                                } else {
                                    $checked= "unchecked";
                                };
                            ?>

                            <!--Section bouton_actif_inactif-->
                            <section class="bouton_actif_inactif">

                                <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">

                                    <input class="display_none" type="checkbox" id="<?php echo $permissions[$i]; ?>"
                                        name="<?php echo $permissions[$i]; ?>" value="1" <?php echo $checked; ?> />
                                    <span>
                                        <span>Inactif</span>
                                        <span>Actif</span>
                                    </span>
                                    <a></a>
                                </label>
                                <?php echo $permissions[$i]; ?>

                            </section>

                            <?php }; ?>
                        </div>
                        <?php }; ?>

                        <!--on envoie en POST le mail et le client_name pour le mail de modification-->
                        <input name="mail2" id="mail" class="display_none" type="mail"
                            value="geoffrey.marhoffer@gmail.com">

                        <!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
                        <input name="salle_id_permissions" id="salle_id" class="display_none" type="text"
                            value="<?php echo $salle_de_sport3['salle_id'] ?>">

                        <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                        <input name="client_id" id="client_id" class="display_none" type="text"
                            value="<?php echo $salle_de_sport3['client_id'] ?>">

                        <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
                        <input name="nom_salle" id="nom_salle" class="display_none" type="text"
                            value="<?php echo $salle_de_sport3['Nom'] ?>">

                        <input id="<?php $partenaire ?>" name="modification_permission" class="btn btn-outline-success btn-lg reset partenaire" type="submit" value="Valider" onclick="return script_permissions_salle_de_sport()">

                    </section>
    </section>


    <?php 
    };
 };
}
?>

    </form>

    <script src="../../Module/salle_par_partenaire/etiquette_salle_de_sport/script_etiquette_salle_de_sport.js"></script>
</body>

</html>