<?php
//on invoque tout les requires_once commun des pages
require_once '../Commun/require_once.php';

if ($isAdmin== 'oui'){

?>

<!DOCTYPE html>
<html>

<?php require_once '../Commun/Head.php' ?>

<nav>
    <span>
        <a href="../../index.php"><button name="accueil" type="button"
                class="btn btn-outline-success btn-lg">Accueil</button></a>
        <a href="../page_des_partenaires/View.php"><button type="button" class="btn btn-outline-success btn-lg">Voir
                Partenaire</button></a>
    </span>
</nav>

<body>

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
    <script src="script.js"></script>
</body>


</html>

<?php 
} else {
  echo "Accès non autorisé";
};
?>