<?php
//On vérifie si le filtre 'client_name' a été activé
                 if (isset($_POST['Nom'])){
                    $counti= '0';
                    $sql_2 = $pdo->prepare('SELECT * FROM api_clients WHERE client_name LIKE ? ');
                    $sql_2->execute(array("%".$_POST['Nom']."%"));
                    $b=-1;
                     while($fetch = $sql_2->fetch())
                     {
                        if($Nom_fetch[$b] == $fetch['client_name']){
                            $counti--;
                        };
                      $Nom_fetch[]= $fetch['client_name'];
                      $counti++;
                      $b= $counti - 1;
                     }
                   } else {
                    $counti = 1;
                   }
?>