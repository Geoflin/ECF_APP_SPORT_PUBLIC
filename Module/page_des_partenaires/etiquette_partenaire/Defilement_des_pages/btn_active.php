<?php
//si un bouton de la barre de défilement est activé on va à la page $_POST['plus']
if(isset($_POST['plus'])){
  $plus= $_POST['plus'];
  //sélection nb page d'avance (+1 ou +5)
  if($plus<'1'){$plus='1';};
  if($plus>'5'){$plus='5';};
} else {
//si un bouton de la barre de défilement est activé on va à la page $_POST['aller_a_la_page']
  if(isset($_POST['aller_a_la_page'])){
    $plus= $_POST['aller_a_la_page'];
  }else{
//Par défaut la barre de défilement des étiquettes ce situe à la page 1 sinon on va à la page $_POST['plus']
    $plus= '1';
  };
};