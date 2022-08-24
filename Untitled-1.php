<?php
require_once "../../env/secret2.php";
require_once "../../env/secret.php";
/*on masque les erreurs pour raison de sécurité*/
require_once '../../Module/connexion/debug.php';
/*on vérifie l'identité de l'utilisateur*/
require_once '../../Module/connexion/verification_identite.php';
if ($isAdmin== 'oui'){

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Page_formulaire</title>
    <!--CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--tyle de l'index -->
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

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

                            <!--Tableau des permissions-->
            <?php $permissions= array ("members_read", "members_write", "members_add", "members_products_add", "members_payment_schedules_read", "members_statistiques_read", "members_subscription_read", "payment_schedules_read", "payment_schedules_write", "payment_day_read"); ?>

<section class="droits_client ">

    <?php for ($i=0; $i < 10; $i++) { ?>

    <label for="<?php echo $permissions[$i]; ?>"><?php echo $permissions[$i]; ?></label>

    <?php } ?>


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
            <!-- On indique la page de template de mail à ouvrir -->
            <input class="display_none" type="text" id="template" name="template" value="Ajout_partenaire">

            <input name="inscription_partenaire" class="btn btn-outline-success btn-lg" type="submit" value="Valider">

            </section>

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