<?php
require 'vendor/autoload.php';

//Routing
$page = 'home';
if (isset($_GET['p'])) {
    $page = $_GET['p'];
}

//Récupère les derniers tutoriels
function tutoriels(){
    $pdo = new PDO ('mysql:dbname=sport;host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_NAMED);
    $tutoriels = $pdo->query('SELECT * FROM api_clients LIMIT 10');
    return $tutoriels;
}

//Rendu du template
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, [
    'cache' => false, //__DIR__.'/tmp'
]);

switch($page) {
    case 'contact':
        echo $twig->render('contact.twig');
        break;
    case 'home':
        echo $twig->render('home.twig', ['tutoriels' => tutoriels()]);
        break; 
    default:
        header('HTTP/1.0 404 Not Found');
        echo $twig->render('404.twig');
        break;
}


