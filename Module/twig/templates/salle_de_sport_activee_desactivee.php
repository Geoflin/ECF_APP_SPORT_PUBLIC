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
     <p><strong>De:</strong> geoffrey.marhoffer@gmail.com</br>
     <strong>a:</strong> <?php echo $sendSmtpEmail['mail_partenaire'] ?></br>
     <strong>Objet de l'email:</strong> Votre salle de sport: <?php echo $sendSmtpEmail['nom_salle'] ?> de votre marque: <?php echo $sendSmtpEmail['client_name'] ?> a été <?php echo $sendSmtpEmail['salle_active_ou_desactivee'] ?></p>
     </td>
</tr>

<tr>
<td>
<main class="main">
     <p>Cher client <strong><?php echo $sendSmtpEmail['client_name'] ?></strong>,</p>
     <p>Votre salle de sport: <strong><?php echo $sendSmtpEmail['nom_salle'] ?></strong> a été <strong><?php echo $sendSmtpEmail['salle_active_ou_desactivee'] ?></strong>.</p>

     <p>Le bouton ci-dessous vous permettra de prendre connaissance de ces nouvelles informations.</p>

     <button class="btn btn-primary"><a class="white" href='../../../index.php' target="_blank">Mon espace client</a></button>

     <p>Cordialement</p>
     <p><strong>Gestionnaire de salle de sport</strong></p>

     <p><a class="small" href="">Click here to unsubscribe</a></p> 
</main>
</td>
</tr>

</table>

<table>

<tr>
<td>
     <p><strong>De:</strong> geoffrey.marhoffer@gmail.com</br>
     <strong>a:</strong> <?php echo $sendSmtpEmail['mail_structure'] ?></br>
     <strong>Objet de l'email:</strong> Votre salle de sport: <?php echo $sendSmtpEmail['nom_salle'] ?> de votre marque: <?php echo $sendSmtpEmail['client_name'] ?> a été <?php echo $sendSmtpEmail['salle_active_ou_desactivee'] ?></p>
     </td>
</tr>

<tr>
<td>
<main class="main">
     <p>Cher client <strong><?php echo $sendSmtpEmail['client_name'] ?></strong>,</p>
     <p>Votre salle de sport: <strong><?php echo $sendSmtpEmail['nom_salle'] ?></strong> a été <strong><?php echo $sendSmtpEmail['salle_active_ou_desactivee'] ?></strong>.</p>

     <p>Le bouton ci-dessous vous permettra de prendre connaissance de ces nouvelles informations.</p>

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
