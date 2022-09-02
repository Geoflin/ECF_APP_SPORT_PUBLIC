<?php
//on invoque tout les requires_once commun des pages
require_once '../Commun/require_once.php';
//On ouvre cette page uniquement aux administrateurs ou partenaire ou structure
if ($isAdmin== 'oui' || $partenaire== 'oui' || $lecture_structure== 'oui'){
?>

<!DOCTYPE html>
<html>

    <?php 
    // on lie la page à sa feuille de style et a google font
    require_once '../Commun/Head.php';
    require_once '../Commun/CDN_Google_Fonts.php';
    ?>

    <!-- on crée les boutons de navigations -->
    <nav>
    <a href="../../index.php"><button name="accueil" type="button"
            class="btn btn-outline-success btn-lg lecture_admin">Accueil</button></a>
    <a href="../../Pages/page_des_partenaires/View.php"><button type="button"
            class="btn btn-outline-success btn-lg partenaire">
            << Liste des partenaires </button></a>
    </span>
</nav>

<body>
    <main>
        <?php
        //etiquette partenaire
        require_once '../../Module/salle_par_partenaire/etiquette_partenaire/View.php';
        // on invoque la barre de filtre des partenaires
        if($isAdmin== 'oui' || $partenaire=='oui'){ require_once '../../Module/salle_par_partenaire/filtre_partenaire/View.php'; };
        //etiquette des salles de sport
        require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/View.php';
        //formulaire ajout salle
        if($isAdmin== 'oui'){require_once '../../Module/salle_par_partenaire/ajouter_une_salle/View.php'; };
        ?>
    </main>
</body>

</html>


<?php
//on masque des éléments en fonction du statut de l'utilisateur
if($partenaire== 'oui' || $lecture_structure=='oui'){
?>

<style>
.partenaire {
    display: none;
}

.lecture_admin {
    display: flex;
}

.bouton_actif_inactif {
    pointer-events: none;
}
</style>

<?php 
    };

    if($lecture_structure=='oui'){
        ?>
        
        <style>
        .lecture_structure {
            display: none;
        }
        </style>
        
        <?php 
            }; 

     } else {
    // message "accès non autorisé"
    require_once '../Commun/Acces_non_autorise.php';
     };
?>