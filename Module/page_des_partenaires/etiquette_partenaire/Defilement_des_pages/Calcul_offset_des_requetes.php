<?php
//Par défaut: offset requête= 0 sinon le offset est égal à $super_plus= ($plus*'6')-'6'; (-6 car on enlève la première page 0 constistué de 6 étiquettes)
if($plus== '1'){
  $super_plus= '0';
} else {
  $super_plus= ($plus*'6')-'6';
  if($super_plus<'0'){$super_plus='0';};
};
?>