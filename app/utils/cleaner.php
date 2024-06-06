<?php
    // Fonction pour nettoyer les données reçues et éviter les failles XSS
    function cleaner($data) {
        return htmlentities(strip_tags(stripslashes(trim($data))));
    }