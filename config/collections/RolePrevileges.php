<?php

use Norm\Schema\String;
use Norm\Schema\Password;
use Norm\Schema\Reference;

return array(
    'schema' => array(
        'role'   => Reference::create('role')->to('Role')->filter('trim|required')->set('list-column', true),
        'type' => Reference::create('type')->to(array("URI" => "uri" , "MODULE" => "module" ))->filter('trim|required'),
        'rule' => String::create('rule')->filter('trim|required'),
    ),
);