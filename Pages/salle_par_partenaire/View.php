<?php
//on invoque tout les requires_once commun des pages
require_once '../Commun/require_once.php';
if ($isAdmin== 'oui' || $lecture_seule== 'oui' || $lecture_structure== 'oui'){
?>

<!DOCTYPE html>
<html>

    <?php 
    require_once '../Commun/Head.php';
    require_once '../Commun/CDN_Google_Fonts.php';
    ?>

<body>

    <main>
        <?php 
        require_once '../../Module/salle_par_partenaire/etiquette_partenaire/View.php';
        if($isAdmin== 'oui'){ require_once '../../Module/salle_par_partenaire/filtre_partenaire/View.php'; };
        require_once '../../Module/salle_par_partenaire/etiquette_salle_de_sport/View.php';
        require_once '../../Module/salle_par_partenaire/ajouter_une_salle/View.php';  
        ?>
    </main>

</body>

</html>


<?php
if($lecture_seule== 'oui' || $lecture_structure=='oui'){
?>
<style>
.lecture_seule {
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
?>
<?php 
}

  ?>