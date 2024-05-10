<?php
    
    class ControllerContact extends Controller{
        public function index() :void{
            echo $this->renderView('contact', []);
        }
    }