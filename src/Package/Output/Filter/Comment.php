<?php

namespace Package\Difference\Fun\Output\Filter\Output\Filter;

use Difference\Fun\App;

use Difference\Fun\Module\Controller;
use Difference\Fun\Module\Parse\Value;

class Comment extends Controller
{

    public static function remove(App $object, $destination, $filter, $options = []): mixed
    {
        if(array_key_exists('response', $options)){
            $options['response'] = Value::remove_comment($options['response']);
        }
        return $options['response'];
    }

}