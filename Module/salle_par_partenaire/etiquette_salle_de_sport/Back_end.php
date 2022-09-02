<?php 
//cles secretes
require_once '../../../Module/salle_par_partenaire/Commun/Require_once.php'; 

//CDN Bootstrap
require_once '../../../Style/Bootstrap.php'; 

/*on masque les erreurs pour raison de sécurité*/
//require_once '../../../Module/connexion/debug.php';

//On traite le formulaire de modification des permissions
require_once '../../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end/Update_permissions.php';
//On traite le formulaire de modification du statut des salles
require_once '../../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end/Update_statut_salle.php';
//On traite le formulaire de modification du statut partenaire
require_once '../../../Module/salle_par_partenaire/etiquette_salle_de_sport/Back_end/Update_statut_partenairey.php';
?>


<!-- on invite le client à poursuivre la navigation -->
<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">
    <!--on envoie en POST le client_id pour ne pas perturber le code précèdent-->
    <input name="client_id" id="client_id" class="display_none" type="text" value="<?php echo $_POST['client_id'] ?>">
    <!--on envoie en POST le $_POST['Nom_2'] pour ne pas perturber le code précèdent-->
    <input name="salle_id" id="salle_id" class="display_none" type="text" value="<?php echo $_POST['salle_id'] ?>">

    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner à la liste des salles</button>
    <h3>Les modifications ont été effectuée</h3>
</form>


<!-- On masque et affiche les informations -->
<style>
.display_none {
    display: none;
}

button {
    margin: 5% 10% 10% 40%;
}

h3 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10% 10% 0% 10%;
}
</style>


<?php require_once '../../twig/index.php' ?>