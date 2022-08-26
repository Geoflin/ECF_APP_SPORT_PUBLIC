<?php
session_start();
/*puis on la détruit avec unset()*/
    if(isset($_SESSION['password'])){
        unset($_SESSION['password']);
    }
    session_destroy();
?>