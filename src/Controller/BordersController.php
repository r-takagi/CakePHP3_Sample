<?php
namespace App\Controller;

class BordersController extends AppController {
    public function index() {
        $data = $this->Borders->find('all');
        $this->set('data',$data);
        $this->set('entity',$this->Borders->newEntity());
    }

    public function addRecord(){
        if ($this->request->is('post')) {
            $bord = $this->Borders->newEntity($this->request->data);
            $this->Bords->save($board);
        }
        return $this->redirect(['action' => 'index']);
    }
}