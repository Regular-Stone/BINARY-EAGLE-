<?php
    class EventsController extends Controller implements DefaultPageInterface
    {
        public function index()
        {
            $this->renderView('pages/events.php', 'Événements');
        }
    }