<?php
require_once './app/utils/sanitaze.php';
require_once './app/utils/database.php';
require_once './app/controllers/Controller.php';
//Analyse de l'URL avec parse_url() et retourne ses composants 
$url = parse_url(sanitaze($_SERVER['REQUEST_URI']));


$path = isset($url['path']) ? $url['path'] : '/';


// Tableaux des routes
$pathsAllowed = [
    '/' => 'home',
    '/accueil' => 'home',
    '/a-propos' => 'about',
    '/contact' => 'contact',
    '/events' => 'events',
    '/twitch' => 'twitch',
    '/discord' => 'discord',
    '/404' => '404'
];

// On récupère le chemin de la page en utilisant la fonction str_replace() pour supprimer le chemin /binary_back
$page = str_replace('/binary_back', '', $path);

// Le tableaux de routes à en clef le chemin et en valeur le nom de la vue
// On vérifie si le chemin existe dans le tableau des routes en utilisant la fonction array_key_exists()
// Si le chemin existe, on récupère le nom de la vue correspondant à ce chemin
// Sinon, on affiche la page 404

if (array_key_exists($page, $pathsAllowed)) {
    // On se connecte à la base de données
    $db = database();
    // On appelle le contrôleur correspondant à la page
    require_once './app/controllers/Controller' . ucfirst($pathsAllowed[$page]) . '.php'; 
    $controller = 'Controller' . ucfirst($pathsAllowed[$page]);
    $controller = new $controller();
    $controller->index($db);
} else {
    header('location: /binary_back/404');
}

