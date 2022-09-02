<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirmation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../../twig/templates/style.css">
  </head>
  <body>

   <title>Mail inscription partenaire</title>

   <div class="container">

<table>

<tr>
<td>
     <p><strong>De:</strong> Gestionnaire de salle de sport geoffrey.marhoffer@gmail.com</br>
     <strong>a:</strong> <?php echo $sendSmtpEmail['mail'] ?></br>
     <strong>Objet de l'email:</strong> Permissions globales de: <?php echo $sendSmtpEmail['client_name'] ?> modifiées</p>
     </td>
</tr>

<tr>
<td>
<main class="main">
     <p>Cher client <strong><?php echo $sendSmtpEmail['client_name'] ?></strong></p>

     <p>Vos permissions globale ont été modifiée au sein de l'application Gestionnaire de salle de sport.</p>

     <button class="btn btn-primary"><a class="white" href='../../../index.php' target="_blank">Mon espace client</a></button>

     <p>Cordialement</p>
     <p><strong>Gestionnaire de salle de sport</strong></p>

     <p><a class="small" href="">Click here to unsubscribe</a></p> 
</main>
</td>
</tr>

</table>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
