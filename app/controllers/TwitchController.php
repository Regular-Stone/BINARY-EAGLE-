<?php
    class TwitchController extends Controller implements DefaultPageInterface
    {
    public function index()
        {

            $this->renderView('pages/twitch.php', 'Twitch');
        }
    }