<?php
    
    class ControllerDiscord extends Controller{
        public function index() :void{
            echo $this->renderView('discord', []);
        }
    }