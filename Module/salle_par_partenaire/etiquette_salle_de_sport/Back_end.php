<?php
  $pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

  $pdo->exec("SET CHARACTER SET utf8");
  $sql = "UPDATE `api_install_perm` SET `members_read` = 0 WHERE `api_install_perm`.`salle_id` = 10 ";
  $pdo->exec($sql);

  $count = $pdo->exec($sql);
                                 
  $pdo = null;
  
