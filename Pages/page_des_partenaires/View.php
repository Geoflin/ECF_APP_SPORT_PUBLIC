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

        <!-- search_ajax -->
<div class="ajax" id="search_ajax"></div>
<style>
            .ajax{
                display: block;
            }
            </style>
<!-- search_ajax -->

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

<!-- search_ajax -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('#Nom').keyup(function(){
            $('#search_ajax').html('');
            var utilisateur = $(this).val();
            if(utilisateur != ""){
                $.ajax({
                    type: 'POST',
                    url: '../../Module/page_des_partenaires/etiquette_partenaire/Gestion_des_filtres/Recherche_par_nom.php',
                    data: 'Nom=' + encodeURIComponent(utilisateur),
                    success: function(data){
                        if(data != ""){
                            $('#search_ajax').append(data);
                        }else{
                            document.getElementById('search_ajax').innerHTML = "<div>Aucun utilisateurs</div>"
                        }
                    }
                });
            }
        });
    });
</script>
<!-- search_ajax -->

</html>

<?php 
} else {
    // message "accès non autorisé"
    require_once '../Commun/Acces_non_autorise.php';
};
?>