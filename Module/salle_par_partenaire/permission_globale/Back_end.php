<?php
/*on masque les erreurs pour raison de sécurité*/
require_once '../../../Module/connexion/debug.php';
//cles secretes
require_once '../../../Module/salle_par_partenaire/Commun/Require_once.php'; 
//CDN Bootstrap
require_once '../../../Style/Bootstrap.php'; 
//on update les pêrmissions globales
if ($pdo->exec('UPDATE permission_globale SET Lire= "'. $_POST['Lire'] . '", Ecrire= "'. $_POST['Ecrire'] . '", Ajouter= "'. $_POST['Ajouter'] . '", Ajouter_une_production= "'. $_POST['Ajouter_une_production'] . '", Lecture_des_paiements= "'. $_POST['Lecture_des_paiements'] . '", Lecture_des_statistques= "'. $_POST['Lecture_des_statistques'] . '", Abonnement= "'. $_POST['Abonnement'] . '", Lecture_des_horaires_de_paiements= "'. $_POST['Lecture_des_horaires_de_paiements'] . '", Ecriture_des_paiements="'. $_POST['Ecriture_des_paiements'] . '", Lecture_des_jours_de_paiements= "'. $_POST['Lecture_des_jours_de_paiements'] . '" WHERE client_id = "'.$_POST['client_id'].'" ;' ) !== false){};
?>


<!-- on invite le client à poursuivre la navigation -->
<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">

    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les salles de
        sport</button>
    <h3>Permissions globales ajoutées</h3>
    <!-- On indique le client_id -->
    <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $_POST['client_id'] ?>">
    <!--on envoie en POST le salle_id pour le formulaire de modification des permissions-->
<input name="salle_id" id="salle_id" class="display_none" type="text"
    value="<?php echo $_POST_['salle_id'] ?>">
    
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


<!-- On indique le client_id -->
<input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $client_id ?>">

<?php require_once '../../mail/modification_permission_globale.php' ?>
<?php require_once '../../twig/index.php' ?> 