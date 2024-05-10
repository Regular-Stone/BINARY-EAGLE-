<?php
    // Je crée un tableau associatif pour les données de la base de données en local
    $localHost = [
        'host' => 'localhost',
        'dbname' => 'binary_eagle',
        'charset' => 'utf8',
        'user' => 'root',
        'password' => 'hellodu47',
        'options' => [
            'PDOErrorMod' => PDO::ERRMODE_EXCEPTION,
            'PDOFetchMode' => PDO::FETCH_ASSOC
        ]
    ];