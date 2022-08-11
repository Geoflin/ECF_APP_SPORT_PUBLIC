<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

if ($pdo->exec('INSERT INTO api_clients (actif, client_name, password, active, short_description, full_description, urll, mail) VALUES ("'. $_POST['actif'] . '", "'. $_POST['client_name'] . '", "'. $_POST['password'] . '", "On", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['mail'] . '");') !== false){};

?>