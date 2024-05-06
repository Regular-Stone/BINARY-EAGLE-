<?php
require_once './app/utils/functions.php';
require_once './app/controllers/Controller.php';
//Analyse de l'URL avec parse_url() et retourne ses composants 
$url = parse_url(sanitaze($_SERVER['REQUEST_URI']));


$path = isset($url['path']) ? $url['path'] : '/';
const templateUrl = './app/views/template.php';

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

// le chemin complet est localhost:8000/binary_back/...
// on veut juste le chemin après le localhost:8000
// on utilise la fonction str_replace() pour remplacer le chemin complet par rien
// on obtient donc juste le chemin après le localhost:8000
$page = str_replace('/binary_back', '', $path);

// Le tableaux de routes à en clef le chemin et en valeur le nom de la vue
// On vérifie si le chemin existe dans le tableau des routes en utilisant la fonction array_key_exists()
// Si le chemin existe, on récupère le nom de la vue correspondant à ce chemin
// Sinon, on affiche la page 404
if (array_key_exists($page, $pathsAllowed)) {
    $page = $pathsAllowed[$page];
} else {
    $page = '404';
}



require_once templateUrl;