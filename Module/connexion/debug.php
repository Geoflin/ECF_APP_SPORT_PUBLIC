<?php
//ce petit fichier va permettre de faire disparaitre l'affichage des erreurs php (merci à https://christianelagace.com/php/comment-empecher-php-dafficher-les-messages-derreurs-en-mode-production/)
$debug = false;
if ($debug) {
    // gère et affiche tous les niveaux d'erreurs en mode débogage
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
}
else {
    // en mode production, ne gère pas certains niveaux pour des raisons de performance (ceux précédés de ~), tel que suggéré dans php.ini
    // même pour les niveaux gérés, aucun message ne sera affiché
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
    ini_set('display_errors', '0');
}
?>