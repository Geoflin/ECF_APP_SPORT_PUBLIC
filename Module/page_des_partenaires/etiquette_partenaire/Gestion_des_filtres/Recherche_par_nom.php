<?php

$pdo = new PDO('mysql:host=localhost;dbname=sport', 'root', '');

                    //search_ajax
                    if(isset($_POST['Nom'])){
                      $Nom= (String) trim($_POST['Nom']);
                  
                      $req = $pdo->prepare("SELECT * FROM api_clients WHERE client_name LIKE ? LIMIT 10", array("$Nom%"));
                      $req->execute(["$Nom%"]);
                  
                      $req = $req->fetchAll();
                  
                      foreach ($req as $r) {
                          ?>
                          <style>
            .ajax{
                display: none;
            }
            </style>
                            <div class="ajax">
                              <?=  $r['client_name'] ?>
                          </div>
                          <?php
                      }
                  }
                  //search_ajax

//On vérifie si le filtre 'client_name' a été activé
                 if (isset($_POST['Nom'])){
                    $counti= '0';
                    //On prépare une requête sql de recherche des noms de client
                    $sql_2 = $pdo->prepare('SELECT * FROM api_clients WHERE client_name LIKE ? LIMIT 10');
                    //On cherche le nom des partenaire dont les premières lettres correspondent à notre recherche de partenaire par nom
                    $sql_2->execute(array("%".$_POST['Nom']."%"));
                    //Tant que nous trouvons un nom correspondant au première lettre de notre recherche
                     while($fetch = $sql_2->fetch())
                     {
                      //Nous le stockons dans un tableau
                      $Nom_fetch[]= $fetch['client_name'];
                      //Nous ajoutons une itération à notre compteur
                      $counti++;
                     }


                   } else {
                    $counti = 1;
                   }
?>

