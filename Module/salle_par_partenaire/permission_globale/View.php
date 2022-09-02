<link href="../../Module/salle_par_partenaire/permission_globale/style.css" rel="stylesheet" type="text/css" />
<link href="../../Style/Toggleswitch/permission_globale.css" rel="stylesheet" type="text/css" />
<section class="ajouter_une_salle lecture_structure">

    <form name="ajouter_une_salle" method="POST"
        action="../../Module/salle_par_partenaire/permission_globale/Back_end.php" onsubmit="return myFunction()">

        <!--Tableau des permissions-->
        <?php require_once '../../Module/salle_par_partenaire/Commun/Tableau_permissions.php'; ?>


        <section class="droits_client_global ">

            <!-- on fait défiler les permissions du tableau -->
            <?php for ($i=0; $i < 10; $i++) { ?>

            <label for="<?php echo $permissions[$i]; ?>"><?php echo $permissions[$i]; ?></label>

            <?php } ?>

        </section>


        <section class="toggle_global">
            <!-- on fait défiler les permissions du tableau -->
            <?php for ($ii=0; $ii < 10; $ii++) { ?>

                <?php 
            foreach ($pdo->query('SELECT * FROM `permission_globale` WHERE client_id LIKE "'.$client_id.'" AND "'.$permissions[$ii].'" LIKE "'.$permissions[$ii].'"  ', PDO::FETCH_ASSOC) as $permission_globale) { 

            if($permission_globale[$permissions[$ii]]== 1){
            $checked= "checked";
            } else {
            $checked= "unchecked";
            }

            }
            ?>

            <label class="toggle_gloal_Switch_permissions_des_salles nolabel" onclick="">
                <input type="checkbox" id="<?php echo $permissions[$ii]; ?>" name="<?php echo $permissions[$ii]; ?>"
                    value="1" <?php echo $checked; ?>>
                <span>
                    <span>Inactif</span>
                    <span>Actif</span>
                </span>
                <a></a>
            </label>

            <?php } ?>

        </section>
        <!-- On indique le client_id -->
        <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $client_id ?>">

<!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
<input name="salle_id" id="salle_id" class="display_none" type="text"
    value="<?php echo $_POST_['salle_id'] ?>">
    
    <!--on envoie en POST le mail et le client_name pour le mail de modification-->
<input name="mail" id="mail" class="display_none" type="mail" value="<?php echo $api_clients['mail'] ?>">

<!--on envoie en POST le mail et le client_name pour le mail de modification-->
<input name="client_name" id="client_name" class="display_none" type="text"
    value="<?php echo $api_clients['client_name'] ?>">

            <!-- On indique la page de template de mail à ouvrir -->
<input class="display_none" type="text" id="template" name="template" value="modifications_permissions_globales">

        <input id="valider" name="inscription_partenaire" class="btn btn-outline-success btn-lg lecture_structure valider" type="submit"
            value="Valider" onclick="return script_permissions_globales()">
</section>
</form>

</section>

</section>
