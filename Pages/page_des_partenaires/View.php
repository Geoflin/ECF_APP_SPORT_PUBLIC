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
        <a href="../page_formulaire/View.php"><button type="button" class="btn btn-outline-success btn-lg">Ajouter
                partenaire</button></a>
    </span>

</nav>

<body>

    <main>

        <?php require_once '../../Module/page_des_partenaires/filtre_partenaire/View.php'  ?>

        <section class="wrap">
            <?php require_once '../../Module/page_des_partenaires/etiquette_partenaire/View.php'  ?>
        </section>

    </main>

    <footer>
        <?php require_once '../../Module/page_des_partenaires/footer_partenaire/View.php'  ?>
    </footer>

</body>

</html>

<?php 
} else {
  echo "Accès non autorisé";
};
?>