<head>
    <link href="../../Module/salle_par_partenaire/ajouter_une_salle/style.css" rel="stylesheet" type="text/css" />
</head>

<section class="ajouter_une_salle lecture_seule">

    <form method="POST" action="../../Module/salle_par_partenaire/ajouter_une_salle/Back_end.php">

        <section class="informations_client_et_droits_client">

            <section class="informations_client">

                <input class="display_none" type="text" id="client_id" name="client_id"
                    value='<?php echo $api_clients['client_id'] ?>'>
                <input class="display_none" type="text" id="salle_id" name="salle_id"
                    value='<?php echo $api_clients['salle_id'] ?>'>

                <span>

                    <?php
  //On recupère les informations grâce à l'ID du partenaire sur lesquel nous avons cliqué
  foreach ($pdo->query('SELECT * FROM api_clients WHERE client_id LIKE "'.$Salle_active['client_id'].'" ', PDO::FETCH_ASSOC) as $api_clients) { ?>
                    <input name="client_name" id="client_name" class="display_none" type="text"
                        value="<?php echo $api_clients['client_name'] ?>">
                    <?php } ?>


                    <label for="client_name"><?php echo $api_clients['client_name'] ?></label>

                </span>

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

                <!-- On indique la page de template de mail à ouvrir -->
                <input class="display_none" type="text" id="template" name="template" value="Ajout_salle_de_sport">
               

                <!--on envoie en POST le mail et le client_name pour le mail de modification-->
                <input name="mail" id="mail" class="display_none" type="mail" value="geoffrey.marhoffer@gmail.com">
                <input name="client_name" id="client_name" class="display_none" type="text"
                    value="<?php echo $api_clients['client_name'] ?>">
            </section>


            <!--Tableau des permissions-->
            <?php $permissions= array ("members_read", "members_write", "members_add", "members_products_add", "members_payment_schedules_read", "members_statistiques_read", "members_subscription_read", "payment_schedules_read", "payment_schedules_write", "payment_day_read"); ?>

            <section class="droits_client ">

                <?php for ($i=0; $i < 10; $i++) { ?>

                <label for="<?php echo $permissions[$i]; ?>"><?php echo $permissions[$i]; ?></label>

                <?php } ?>

            </section>


            <section class="toggle">

                <?php for ($ii=0; $ii < 10; $ii++) { ?>

                <label class="toggleSwitch_permissions_des_salles nolabel" onclick="">
                    <input type="checkbox" id="<?php echo $permissions[$ii]; ?>" name="<?php echo $permissions[$ii]; ?>"
                        value="1" checked>
                    <span>
                        <span>Inactif</span>
                        <span>Actif</span>
                    </span>
                    <a></a>
                </label>

                <?php } ?>

            </section>

        </section>

        <input name="inscription_partenaire" class="btn btn-outline-success btn-lg lecture_seul" type="submit"
            value="Valider" onclick='window.location.reload(false)'>

    </form>

</section>