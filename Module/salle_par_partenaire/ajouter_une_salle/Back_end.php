<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

if ($pdo->exec('INSERT INTO salle_de_sport2 (Nom, branche, zones) VALUES ("'. $_POST['Nom'] . '", "'. $_POST['branche'] . '", "'. $_POST['zones'] . '");') !== false){};

?>