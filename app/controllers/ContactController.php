<?php
    class ContactController extends Controller implements DefaultPageInterface
    {
        public function index()
        {
            $this->renderView('pages/contact.php', 'Contact');
        }
    }