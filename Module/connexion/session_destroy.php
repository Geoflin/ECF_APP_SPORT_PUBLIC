<?php
session_start();
/*puis on la détruit avec unset()*/
            if(isset($_SESSION['password'])){
                //echo 'Tu as ' .$_SESSION['password']. ' ans<br>';
                unset($_SESSION['password']);
            }

            /*On détruit les données de session*/
            session_destroy();
            
            //On tente d'afficher les valeurs des variables age et prenom 
            //echo 'Contenu de $_SESSION[\'password\'] : ' .$_SESSION['password'];
?>