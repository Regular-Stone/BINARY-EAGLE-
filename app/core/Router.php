<?php
require_once 'config/rootConfig.php';

class Router{

public static function routeRequest() : void{
// On inclut la fonction sanitize() pour nettoyer les données
require_once 'app/utils/cleaner.php';
$url = isset($_GET['url']) ? cleaner($_GET['url']) : '/';
$urlParts = explode('/', trim($url, '/'));

// L'url est donc décomposée comme suit: nom du contrôleur, nom de l'action, paramètres
// $urlParts[0] = nom du contrôleur (ou de la page), $urlParts[1] = nom de l'action, $urlParts[2] = paramètres (si existent), etc.
// Donc a partir dde $urlParts[2] ce ne sont que des paramètres


// On inclut le fichier des routes
$routes = require_once 'app/core/config/routes.php';



$controllerName = !empty($urlParts[0]) ? ucfirst(cleaner($urlParts[0])) . 'Controller' : 'HomeController';
// On inclut le contrôleur correspondant à la page demandée que si le fichier existe et que la page est autorisée sinon on affiche une page d'erreur
(((file_exists('app/controllers/' . $controllerName . '.php')) && (array_key_exists($controllerName, $routes)))) ? require_once 'app/controllers/' . $controllerName . '.php' : require_once 'app/controllers/ErrorController.php';

// On instancie le contrôleur
$controller = new $controllerName();

// Si l'action est précisée dans l'URL, on l'exécute
$action = !empty($urlParts[1]) ? cleaner($urlParts[1]) : 'index';

// On utilise l'action demandée que si elle existe dans le contrôleur et qu'elle est autorisée sinon on utilise l'action par défaut (index)
if (in_array($action, $routes[$controllerName]) && method_exists($controller, $action)) {

    $params = array_slice($urlParts, 2);
    $reflection = new ReflectionMethod($controllerName, $action);
    $methodParams = $reflection->getParameters();

    if (count($params) < count($methodParams)) {
        $controller->index();
    } else {
        foreach($params as $param) {
            $param = cleaner($param);
        }
        $controller->$action(...$params); // On exécute l'action demandée grace à l'opérateur de décomposition

    }
} else {
    $controller->index();
}
}
}