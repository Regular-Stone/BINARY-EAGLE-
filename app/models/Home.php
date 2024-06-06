<?php
    // Ici je crée la classe Home qui va me permettre de gérer les données de la table main_content

    class Home
    {
        private $db;

        public function __construct() {
            require_once 'app/core/config/databaseConfig.php';
            $this->db = Database::getInstance($host, $dbname, $user, $password);
        }

        // Je crée une méthode qui va me permettre de récupérer les données de la table main_content
        public function getHomeData() :array
        {   
            // Je récupère la connexion à la base de données
            $db = $this->db->getConnexion();


            // Je prépare la requête pour l'ex  écution
            $query = $db->prepare('SELECT main_content_title,main_content_content,img_path FROM main_content');

            // J'exécute la requête
            $query->execute();


            // Je stocke les données dans une variable
            $data = $query->fetchAll();
            // Je ferme la requête
            $query->closeCursor();
            // Je retourne les données
            return $data;
            
        }
    }