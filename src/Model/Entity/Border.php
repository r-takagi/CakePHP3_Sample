<?php
namespace App\Model\Enriry;

use Cake\ORM\Entitiy;

class Corder extends Entitiy {
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}