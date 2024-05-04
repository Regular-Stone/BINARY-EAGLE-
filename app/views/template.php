<?php
    // chemin vers le dossier des vues
    const basicWay = './app/views/';
    // la variable $page est définie dans le fichier index.php
    // elle définit la page à afficher
    require_once basicWay.'header.php';
    require_once basicWay.$page.'.php';
    require_once basicWay.'footer.php';