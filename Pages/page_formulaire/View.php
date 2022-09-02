<?php
//on invoque tout les requires_once commun des pages
require_once '../Commun/require_once.php';
//On ouvre cette page uniquement aux administrateurs
if ($isAdmin== 'oui'){
?>

<!DOCTYPE html>
<html>
<!--Style du etiquette_salle_de_sport -->
<link href="../../Style/Toggleswitch/page_formulaire.css" rel="stylesheet" />
<!-- on lie la page à sa feuille de style -->
<?php require_once '../Commun/Head.php' ?>

<!-- on crée les boutons de navigations -->
<nav>
    <span>
        <?php require_once '../Commun/Btn_accueil.php' ?>
        <a href="../page_des_partenaires/View.php"><button type="button" class="btn btn-outline-success btn-lg">Voir
                Partenaire</button></a>
    </span>
</nav>

<body>
    <!-- formulaire inscription partenaire -->
    <form name="inscription_partenaire_1" method="POST" action="Back_end.php" onsubmit="return myFunction()">

        <section class="informations_client_et_droits_client">

            <section class="informations_client">
                <span>
                    <label for="client_name">Nom de la marque de sport: </label>
                    <input type="text" id="client_name" name="client_name">
                </span>

                <span>
                    <label for="password">Mot de passe: </label>
                    <input type="password" id="password" name="password">
                </span>

                <span>
                    <label for="short_description">description courte: </label>
                    <input type="text" id="short_description" name="short_description">
                </span>

                <span>
                    <label for="full_description">description longue: </label>
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

                <span>
                    <input class="display_none" type="text" name="actif" value="1">
                </span>

            <!-- On indique la page de template de mail à ouvrir -->
            <input class="display_none" type="text" id="template" name="template" value="Ajout_partenaire">

            <input name="inscription_partenaire" class="btn btn-outline-success btn-lg" type="submit" value="Valider">
            </section>

    </form>
    <!-- on securise la validation du formulaire -->
    <script src="script.js"></script>
</body>

</html>

<?php 
} else {
    // message "accès non autorisé"
    require_once '../Commun/Acces_non_autorise.php';
};
?>