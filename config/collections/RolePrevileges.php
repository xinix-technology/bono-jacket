<?php

use Norm\Schema\String;
use Norm\Schema\Password;
use Norm\Schema\Referece;

return array(
    'schema' => array(
        'role'   => Reference::create('role')->filter('trim|required')->set('list-column', true),
        'type' => String::create('type')->filter('trim|required'),
        'rule' => String::create('rule')->filter('trim|required'),
    ),
);