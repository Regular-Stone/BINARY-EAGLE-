<?php
    
    class ControllerContact extends Controller{
        public function index($db) :void{
            echo $this->renderView('contact', []);
        }

        public function handleFormSubmission($data = []) :void{


            if(!isset($data['name']) || !isset($data['email']) || !isset($data['subject']) || !isset($data['message'])){
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