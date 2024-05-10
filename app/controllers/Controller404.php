<?
    class Controller404 extends Controller
    {
        public function index() :void
        {
            echo $this->renderView('404', []);
        }
    }