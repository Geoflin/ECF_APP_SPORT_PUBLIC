<?php
/*on masque les erreurs pour raison de sécurité*/
//require_once '../../../Module/connexion/debug.php';
//on recupere api sendinblue (gestionnaire de mail)
require_once "../../../env/secret.php";
//on recupere identifiant pdo
require_once "../../../env/secret2.php";
?>

<!-- partie insertion data nouvelle salle de sport -->
<?php
//on insere data clients dans table salle_de_sport3
if ($pdo->exec('INSERT INTO salle_de_sport3 (client_id, Nom, branche, zones, password, mail) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '", "'. MD5($_POST['password_salle']) . '", "'. $_POST['mail_salle'] . '");') !== false){};
//on insere permissions client dans table api_install_perm
if ($pdo->exec('INSERT INTO api_install_perm (client_id, Lire, Ecrire, Ajouter, Ajouter_une_production, Lecture_des_paiements, Lecture_des_statistques, Abonnement, Lecture_des_horaires_de_paiements, Ecriture_des_paiements, Lecture_des_jours_de_paiements) VALUES ("'. $_POST['client_id'] . '", "'. $_POST['Lire'] . '", "'. $_POST['Ecrire'] . '", "'. $_POST['Ajouter'] . '", "'. $_POST['Ajouter_une_production'] . '" , "'. $_POST['Lecture_des_paiements'] . '" , "'. $_POST['Lecture_des_statistques'] . '" , "'. $_POST['Abonnement'] . '", "'. $_POST['Lecture_des_horaires_de_paiements'] . '", "'. $_POST['Ecriture_des_paiements'] . '", "'. $_POST['Lecture_des_jours_de_paiements'] . '");') !== false){};
?>

<!-- partie redirection client -->

<!-- formulaire permettant de retourner voir la liste de salle de sport -->
<form method="POST" action="../../../Pages/salle_par_partenaire/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les salles de sport</button>
    <h3>La salle de sport "<?php echo $_POST['Nom'] ?>" a été ajouté</h3>
    <?php   
    require_once "../../../env/secret2.php";
?>
    <!-- On indique le client_id -->
    <input class="display_none" type="text" id="client_id" name="client_id" value="<?php echo $_POST['client_id'] ?>">
</form>


<!-- masquage des input client_id pour page precedente -->
<?php require_once 'style_Back_end.php'; ?>


<?php require_once '../../mail/identifiant_mail_ajout_salle_de_sport.php' ?>
<?php require_once '../../mail/Ajout_salle_de_sport.php' ?>
<?php require_once '../../twig/index.php' ?>
