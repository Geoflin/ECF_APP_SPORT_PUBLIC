<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');


if ($pdo->exec('INSERT INTO api_clients (client_name, short_description, full_description, urll, technical_contact, commercial_contact) VALUES ("'. $_POST['client_name'] . '", "'. $_POST['short_description'] . '", "'. $_POST['full_description'] . '", "'. $_POST['urll'] . '", "'. $_POST['technical_contact'] . '", "'. $_POST['commercial_contact'] . '");') !== false){};

?>