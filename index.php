<?php
require_once './app/utils/functions.php';
require_once './app/controllers/Controller.php';
//Analyse de l'URL avec parse_url() et retourne ses composants 
$url = parse_url(sanitaze($_SERVER['REQUEST_URI']));


$path = isset($url['path']) ? $url['path'] : '/';
const templateUrl = './app/views/template.php';
switch($path){
    case $path === "/binary-eagle" || $path === "/binary-eagle/" || $path === "/binary_back/":
        header("Location: /binary-eagle/accueil");
        break;
    case $path === "/binary-eagle/accueil" :
        $page = 'home';
        require_once templateUrl;
        break;
    case $path === "/binary-eagle/a-propos" :
        $page = 'about';
        require_once templateUrl;
        break;
    case $path === "/binary-eagle/contact" :
        $page = 'contact';
        require_once templateUrl;
        break;
    case $path === "/binary-eagle/events" :
        $page = 'events';
        require_once templateUrl;
        break;
    case $path === "/binary-eagle/twitch" :
        $page = 'twitch';
        require_once templateUrl;
        break;
    case $path === "/binary-eagle/discord" :
        $page = 'discord';
        require_once templateUrl;
        break;


    default:
        $page = '404';
        require_once templateUrl;
        break;
}
