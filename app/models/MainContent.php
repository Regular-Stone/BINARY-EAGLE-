<?php
    // Ici je crée la classe mainContent qui va me permettre de gérer les données de la table main_content

    class MainContent
    {
        // Je crée une méthode qui va me permettre de récupérer les données de la table main_content
        public function getMainContent(PDO $db) :array
        {   

            
            // Je prépare la requête pour l'exécution
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