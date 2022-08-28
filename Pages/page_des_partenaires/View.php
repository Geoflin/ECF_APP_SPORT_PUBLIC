<?php
//on invoque tout les requires_once commun des pages
require_once '../Commun/require_once.php';
//On ouvre cette page uniquement aux administrateurs
if ($isAdmin== 'oui'){
?>

<!DOCTYPE html>
<html>
<!-- on lie la page à sa feuille de style -->
<?php require_once '../Commun/Head.php' ?>

<!-- on crée les boutons de navigations -->
<nav>
    <span>
        <?php require_once '../Commun/Btn_accueil.php' ?>
        <a href="../page_formulaire/View.php"><button type="button" class="btn btn-outline-success btn-lg">Ajouter partenaire</button></a>
    </span>
</nav>

<body>

    <nav class="test_1">
        <!-- on invoque la barre de filtre des partenaires -->
        <?php require_once '../../Module/page_des_partenaires/filtre_partenaire/View.php'  ?>
    </nav>

    <main>
        <!-- etiquette des partenaires -->
        <section class="wrap">
            <?php require_once '../../Module/page_des_partenaires/etiquette_partenaire/View.php'  ?>
        </section>
    </main>

    <footer class="footer">
        <!-- barre de navigation entre les pages -->
        <?php require_once '../../Module/page_des_partenaires/footer_partenaire/View.php'  ?>
    </footer>

</body>
</html>

<?php 
} else {
    // message "accès non autorisé"
    require_once '../Commun/Acces_non_autorise.php';
};
?>