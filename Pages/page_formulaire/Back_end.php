  <!--CDN Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

if ($pdo->exec('INSERT INTO api_clients (actif, client_name, password, active, short_description, full_description, urll, mail) VALUES ("'. $_POST['actif'] . '", "'. $_POST['client_name'] . '", "'. $_POST['password'] . '", "On", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['mail'] . '");') !== false){};

?>

<form method="POST" action="../page_des_partenaires\View.php">
<h3>Le partenaire "<?php echo $_POST['client_name'] ?>" a été ajouté</h3>
<button name="accueil" type="submit" class="btn btn-outline-success btn-lg">Retourner voir les partenaires</button>

</form>

<style>
  button{
    margin: 5% 10% 10% 40%;
  }
  h3{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10% 10% 0% 10%;
  }
</style>