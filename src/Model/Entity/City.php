<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

class City extends Entity
{
     protected $_accessible = [
         'state_id' => true,
         'name' => true,
         'state' => true,
     ];
}