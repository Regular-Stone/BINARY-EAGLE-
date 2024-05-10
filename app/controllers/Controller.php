<?php
    abstract class Controller {
        // Méthode pour afficher une vue
        public function renderView(string $path , array $data) :string{
            ob_start(); // Démarre la temporisation de sortie
            require_once __DIR__ . '/../views/header.php';
            require_once __DIR__ . '/../views/' . $path . '.php';
            require_once __DIR__ . '/../views/footer.php';
            return ob_get_clean(); // Lit le contenu courant du tampon de sortie puis l'efface
        }

        // Méthode pour rediriger l'utilisateur
        public function redirect(string $path) :void{
            header("Location: $path");
            exit();
        }

        // Méthode pour charger un modèle
        public function loadModel(string $model) :object{
            $allowedModels = ['User', 'Database', 'Admin', 'MainContent']; // Modèles autorisés
        
            $validatedModel = $this->validate($model, 'model'); 
        
            if(!$validatedModel){
                throw new Exception("Invalid model name");
            }
        
            if(in_array($validatedModel, $allowedModels)){
                require_once "./app/models/$validatedModel.php";
                return class_exists($validatedModel) ? new $validatedModel() : throw new Exception("Model class not found");
            } else {
                throw new Exception("Model not found");
            }
        }

        // Méthode pour valider les données
        public function validate(string $data, string $rules) :string{
        require_once './app/utils/database.php';
        $pattern = '//';
        $data = sanitaze($data);
        switch($rules){
            case 'email': // Validation d'une adresse email
                $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';
                if (!preg_match($pattern, $data)) {
                    throw new Exception("Invalid email");
                }
                return $data;
            case 'url': // Validation d'une URL
                $pattern = '/^(http|https):\/\/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';
                if (!preg_match($pattern, $data)) {
                    throw new Exception("Invalid URL");
                }
                return $data;
            case 'model': // Validation du nom d'un modèle
                $pattern = '/^[a-zA-Z]+$/';
                if (!preg_match($pattern, $data)) {
                    throw new Exception("Invalid model name");
                }
                return $data;
            default:
                throw new Exception("Invalid rules");
            }
        }
    }