<?php
    // chemin vers le dossier des vues
    const viewsFolder = './app/views/';
    // la variable $page est définie dans le fichier index.php
    // elle définit la page à afficher
    require_once viewsFolder.'header.php';
    require_once viewsFolder.$page.'.php';
    require_once viewsFolder.'footer.php';