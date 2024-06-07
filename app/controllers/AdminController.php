<?php
    class AdminController extends Controller implements DefaultPageInterface {
        public function index(){
            $this->renderView('pages/admin/adminAuth.php', 'Admin');
        }
    }