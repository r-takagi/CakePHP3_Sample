<?php
namespace App\Controller;

class BordersController extends AppController {
    public function index() {
        $data = $this->Borders->find('all');
        $this->set('data',$data);
    }
}