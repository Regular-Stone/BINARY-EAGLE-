<?php
    class ControllerHome extends Controller{

        public function index($db) :void{
            $contentManager = $this->loadModel('MainContent');
            $data = $contentManager->getMainContent($db);

            echo $this->renderView('home', ['home' => $data]);
        }
    }