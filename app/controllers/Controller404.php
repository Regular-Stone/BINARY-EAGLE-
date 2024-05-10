<?
    class Controller404 extends Controller
    {
        public function index()
        {
            echo $this->renderView('404', []);
        }
    }