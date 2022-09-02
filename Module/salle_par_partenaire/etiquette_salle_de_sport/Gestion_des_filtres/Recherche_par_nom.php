<?php
//On vérifie si le filtre 'client_name' a été activé
        if (isset($_POST['Nom_2'])){
        $counti= '0';
        $sql_2 = $pdo->prepare('SELECT * FROM salle_de_sport3 WHERE Nom LIKE ? AND `client_id` LIKE "'.$client_id.'" ');
        $sql_2->execute(array("%".$_POST['Nom_2']."%"));
        $b=-1;
         while($fetch = $sql_2->fetch())
         {
            if($Nom_fetch[$b] == $fetch['Nom']){
                $counti--;
            };
          $Nom_fetch[]= $fetch['Nom'];
          $counti++;
          $b= $counti - 1;
         }
       }
?>