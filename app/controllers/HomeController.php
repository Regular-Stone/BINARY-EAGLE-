<?php
class HomeController extends Controller implements DefaultPageInterface{
    public function index() {
        $home = new Home();
        $data = $home->getHomeData();
        $this->renderView('pages/home.php', 'Accueil', ['data' => $data]);
    }
}