<?php
    
    class ControllerEvents extends Controller{
        public function index() :void{
            echo $this->renderView('events', []);
        }
    }