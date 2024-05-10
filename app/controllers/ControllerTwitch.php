<?php
    
    class ControllerTwitch extends Controller{
        public function index() :void{
            echo $this->renderView('twitch', []);
        }
    }