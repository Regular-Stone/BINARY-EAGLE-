<?php
    class AboutController extends Controller implements DefaultPageInterface
    {
        public function index()
        {
            $this->renderView('pages/about.php', 'À propos');
        }
    }