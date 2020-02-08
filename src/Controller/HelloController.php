<?php
namespace App\Controller;

class HelloController extends AppController {
    public function initialize() {
        $this->name = 'Hello';
        //$this->autoRender = false;
        $this->viewBuilder()->autoLayout(true);
        $this->viewBuilder()->Layout('Hello');
    }

    public function index() {
        //$this->viewBuilder()->autoLayout(true);
        //$this->autoRender = true;
        $this->set('msg','ヘッダーエレメント！');
        $n = rand(1,2);
        $this->set('footer','Hello/footer' . $n);
    }

    //public function other() {
    //    $this->viewBuilder()->autoLayout(false);
    //    $this->autoRender = true;
    //}
}