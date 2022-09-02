<head>
    <link href="../../Module/salle_par_partenaire/ajouter_une_salle/style.css" rel="stylesheet" type="text/css" />
    <!--Style bouton actif/inactif -->
<link href="../../Style/Toggleswitch/permissions_des_salles.css" rel="stylesheet" />
</head>

<section class="ajouter_une_salle lecture_seule">

<body>
     <h3>Ajouter une salle</h3>
    <form name="ajouter_une_salle" method="POST" action="../../Module/salle_par_partenaire/ajouter_une_salle/Back_end.php" onsubmit="return script_ajout_salle_de_sport()">

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

                </span>

                <span>
                    <label for="Nom">Nom:</label>
                    <input type="text" id="Nom" name="Nom">
                </span>

                <span>
                    <label for="zones">adresse:</label>
                    <input type="text" id="zones" name="zones">
                </span>

                <span>
                    <label for="branche">description:</label>
                    <input type="text" id="branche" name="branche">
                </span>

                <span>
                    <label for="password_salle">mot de passe:</label>
                    <input type="password" id="password_salle" name="password_salle">
                </span>

                <span>
                    <label for="mail_salle">mail:</label>
                    <input type="mail" id="mail_salle" name="mail_salle">
                </span>

                <!-- On indique la page de template de mail à ouvrir -->
                <input class="display_none" type="text" id="template" name="template" value="Ajout_salle_de_sport">

                <!-- On indique le client_id -->
                <input class="display_none" type="text" id="client_id" name="client_id" value="<?php $api_clients['client_id'] ?>">
               

                <!--on envoie en POST le mail et le client_name pour le mail de modification-->
                <input name="mail" id="mail" class="display_none" type="mail" value="geoffrey.marhoffer@gmail.com">
                <input name="client_name" id="client_name" class="display_none" type="text"
                    value="<?php echo $api_clients['client_name'] ?>">
            </section>


            <!--Tableau des permissions-->
            <?php $permissions= array ("Lire", "Ecrire", "Ajouter", "Ajouter une production", "Lecture des paiements", "Lecture des statistques", "Abonnement", "Lecture date paiements", "Ecriture des paiements", "Lecture jours paiements"); ?>

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

                        <!-- On indique le client_id -->
                        <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $client_id ?>">

        <input name="ajouter_une_salle" class="valider btn btn-outline-success btn-lg lecture_seul" type="submit" value="Valider" onclick="return script_ajout_salle_de_sport()">

    </form>

</section>
<script src="../../Module/salle_par_partenaire/ajouter_une_salle/script_ajouter_une_salle.js"></script>
</body>