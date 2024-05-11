<?php
    
    function database() : PDO{
        require_once 'env_database.php';
        try {
            $db = new PDO("mysql:host={$localHost['host']};dbname={$localHost['dbname']};charset={$localHost['charset']}", $localHost['user'], $localHost['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, $localHost['options']['PDOErrorMod']);
            $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, $localHost['options']['PDOFetchMode']);
            return $db;
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }