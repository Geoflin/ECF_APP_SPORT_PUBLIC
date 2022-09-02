<?php require_once '../../env/secret.php'; ?>
<?php require_once '../../env/secret2.php'; ?>

<!--CDN Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
  if ($pdo->exec('INSERT INTO api_clients (actif, client_name, password, short_description, full_description, urll, mail) VALUES ("'. $_POST['actif'] . '", "'. $_POST['client_name'] . '", "'. MD5($_POST['password']) . '", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['mail'] . '");') !== false){};
  if ($pdo->exec('INSERT INTO permission_globale (Lire, Ecrire, Ajouter, Ajouter_une_production, Lecture_des_paiements, Lecture_des_statistques, Abonnement, Lecture_des_horaires_de_paiements, Ecriture_des_paiements, Lecture_des_jours_de_paiements) VALUES ("1", "1", "1", "1" , "1" , "1" , "1", "1", "1", "1");') !== false){};
?>

<form method="POST" action="../page_des_partenaires/View.php">
    <button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les partenaires</button>
    <h3>Le partenaire "<?php echo $_POST['client_name'] ?>" a été ajouté</h3>
    <!-- <button name="accueil" type="submit" class="btn btn-outline-success btn-lg" value="<?php echo $_POST['client_name'] ?>"><a href="../../Module/twig/index.php">Voir mail confirmation</a></button> -->
</form>

<style>
button {
    margin: 5% 10% 10% 40%;
}

h3 {
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10% 10% 0% 10%;
}
</style>


<?php require_once '../../Module/mail/Ajout partenaire.php' ?>
<?php require_once '../../Module/twig/index.php' ?>