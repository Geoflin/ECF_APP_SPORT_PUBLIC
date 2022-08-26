<!--Style du etiquette_partenaire -->
<link href="../../Module/page_des_partenaires/etiquette_partenaire/style.css" rel="stylesheet" />

<?php
//on traite l'activation des btn de défilement des pages
require_once 'Defilement_des_pages/btn_active.php';

//on calcule le nombre total de partenaire
require_once 'Defilement_des_pages/calcul_nb_total_partenaire.php';

//Si on appuie sur les flèches vers la gauche on va à la page n-1 de la barre de défilement des étiquettes
require_once 'Defilement_des_pages/aller_au_page_precedente.php';

//On divise le nombre total de partenaire par le nb d'etiquette par page(6) +1 et on arrondi le résultat pour obtenir le nombre de page d'étiquette
require_once 'Defilement_des_pages/Calcul_nb_total_page.php';

//Par défaut: offset requête= 0 sinon le offset est égal à $super_plus= ($plus*'6')-'6'; (-6 car on enlève la première page 0 constistué de 6 étiquettes)
require_once 'Defilement_des_pages/Calcul_offset_des_requetes.php';

//On choisit la requête $sql en fonction des filtres active
require_once 'Gestion_des_filtres.php';


//On execute la pdo query sql
foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $api_clients) { ?>

<!--on détermine le statement du partenaire-->
<?php
   if($api_clients['actif']==1){
      $checked= "checked";
   } else {
      $checked= "unchecked";
   }
?>

<!--View etiquette_partenaire-->

<!--formulaire indiquant l'id_client à la page suivante-->
<form method="POST" action="../../Pages/salle_par_partenaire/View.php">
    <button name="salle_par_partenaire" type="submit" class="etiquette_partenaire <?php echo $btn_1; ?>">

        <!--Span reliant image_client_et_information_client-->
        <span class="image_client_et_information_client">

            <!--Section image_client-->
            <section class="image_client">
                <img src="../../Img/marque_de_sport.png" width="200" height="170">
            </section>

            <!--Section information_client-->
            <section class="information_client">
                <div>id: <?php echo $api_clients['client_id'] ?></div>
                <div><?php echo $api_clients['client_name'] ?></div>
                <div><?php echo $api_clients['short_description'] ?></div>
                <div><a href="<?php echo $api_clients['urll'] ?>" target="_blank"><?php echo $api_clients['urll'] ?><a>
                </div>
            </section>
        </span>

        <input type="text" id="client_id" name="client_id" value="<?php echo $api_clients['client_id'] ?>">
</form>

<!--Section bouton_actif_inactif-->
<section class="bouton_actif_inactif">
    <label class="toggleSwitch nolabel">
        <input type="checkbox" id="<?php echo $api_clients['actif']; ?>" name="<?php echo $api_clients['actif']; ?>"
            value="1" <?php echo $checked; ?> />
        <span>
            <span>Inactif</span>
            <span>Actif</span>
        </span>
        <a></a>
    </label>
</section>
</button>


<?php } ?>