<?php
namespace Package\Difference\Fun\Output\Filter\Trait;

use Difference\Fun\App;

use Difference\Fun\Module\Core;
use Difference\Fun\Module\File;

use Difference\Fun\Node\Model\Node;

use Exception;
trait Import {

    public function role_system(): void
    {
        $object = $this->object();
        $package = $object->request('package');
        if($package){
            $node = new Node($object);
            $node->role_system_create($package);
        }
    }
}