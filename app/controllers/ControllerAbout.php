<?php
    
    class ControllerAbout extends Controller{
        public function index() :void{
            echo $this->renderView('about', []);
        }
    }