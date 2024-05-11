<?
    class ControllerAdminConnect extends Controller
    {
        public function index() :void
        {
            echo $this->renderView('adminConnect', []);
        }
    }