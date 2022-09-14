<?php

//Si le client est un administrateur ou un partenaire: la recherche sera différente
if($isAdmin== 'oui' || $partenaire== 'oui'){
$sql = 'SELECT * FROM `salle_de_sport3` WHERE `client_id` LIKE "'.$client_id.'"  ';

} else {
$sql = 'SELECT * FROM `salle_de_sport3` WHERE `salle_id` LIKE "'.$salle_id.'" AND `client_id` LIKE "'.$client_id.'"  ';
}
?>