<?php
    
    class ControllerContact extends Controller{
        public function index($db) :void{
            echo $this->renderView('contact', []);
        }

        public function handleFormSubmission($data, $db) :void{


            if(!isset($data['name']) || !isset($data['email']) || !isset($data['subject']) || !isset($data['message']) || !isset($data['g-recaptcha-response'])){
                header('Location: /binary_back/contact?error=missing_data');
                return;
            }



            foreach($data as $key => $value){
                $data[$key] = sanitaze($value);
            }
            $this->validate($data['name'], 'username');
            $this->validate($data['email'], 'email');
            $this->validate($data['subject'], 'text');
            $this->validate($data['message'], 'text');

            // Je vérifie si le captcha est valide
            $captcha = $data['g-recaptcha-response'];
            $secretKey = "6LdFI9spAAAAAGbmPlQ6pJmnHOS9CrZp6pG_9nUF";
            $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha");
            $responseKeys = json_decode($response, true);
            if(intval($responseKeys["success"]) !== 1) {
                header('Location: /binary_back/contact?error=captcha');
                return;
            }
            


            // Je récupère les données du formulaire
            $name = $data['name'];
            $email = $data['email'];
            $subject = $data['subject'];
            $message = $data['message'];


            // J'envoie le mail
            $to = "binary-eagle@gmail.com";
            $subject = "$subject de $name";
            $headers = "From: $email";
            $message = "Sujet: $subject\n\n$message";
            mail($to, $subject, $message, $headers);

            
            // Je veux mettre un paramètre dans l'URL pour afficher un message de succès
            header('Location: /binary_back/contact?success=true');
        }

        public function setSuccessPopop($message) :void{
            echo "
            <script>
            Swal.fire({
                icon: 'success',
                title: '$message',
                showConfirmButton: false,
                timer: 1500
            });
            </script>";
        }
    }