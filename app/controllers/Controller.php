<?php
abstract class Controller {
    protected function renderView($view, $pageTitle, $data = []) {
        count($data) > 0 ? extract($data) : null;
        ob_start();
        require_once 'app/views/' . $view;
        $content = ob_get_clean();
        require_once 'app/views/includes/template.php';
    }

    public function loadModel(string $model) :object{
        $allowedModels = ['User', 'Database', 'Admin', 'Home']; // Modèles autorisés
    
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

    protected function validate(string $data, string $rules) :string{
        require_once '/app/utils/cleaner.php';
        $pattern = '//';
        $data = cleaner($data);
        $redirectionUrl = '/binary_back/contact?error=data_invalid';
        switch($rules){
            case 'email': // Validation d'une adresse email
                $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';
                if (!preg_match($pattern, $data)) {
                    $this->redirect($redirectionUrl);
                }
                return $data;
            case 'url': // Validation d'une URL
                $pattern = '/^(http|https):\/\/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/';
                if (!preg_match($pattern, $data)) {
                    $this->redirect($redirectionUrl);
                }
                return $data;
            case 'model': // Validation du nom d'un modèle
                $pattern = '/^[a-zA-Z]+$/';
                if (!preg_match($pattern, $data)) {
                    $this->redirect($redirectionUrl);
                }
                return $data;
            case 'password': // Validation d'un mot de passe
                $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/'; // Au moins une minuscule, une majuscule, un chiffre, un caractère spécial et 8 caractères minimum
                if (!preg_match($pattern, $data)) {
                    $this->redirect($redirectionUrl);
                }
                return $data;
            case 'username': // Validation d'un nom d'utilisateur
                $pattern = '/^[a-zA-Z0-9._-]{3,20}$/'; // Entre 3 et 20 caractères alphanumériques
                if (!preg_match($pattern, $data)) {
                    $this->redirect($redirectionUrl);
                }
                return $data;
            case 'text': // Validation d'un texte
                $pattern = '/^[a-zA-Z0-9._-]{3,20}$/'; // Entre 3 et 20 caractères alphanumériques
                if (!preg_match($pattern, $data)) {
                    throw new Exception("Invalid text");
                }
                return $data;
            default:
                throw new Exception("Invalid rules");
            }
        }

    protected function redirect(string $url) {
        header('Location: ' . $url);
        exit();
    }
}