<?php

use Norm\Schema\String;
use Norm\Schema\Password;
use Norm\Schema\Referece;

return array(
    'schema' => array(
        'module'   => String::create('module')->filter('trim|required')->set('list-column', true),
        'submodule' => String::create('submodule')->filter('trim|required')->set('list-column', true),
        'ordering' => String::create('ordering')->filter('trim|required')->set('list-column', true),
        'action' => String::create('action')->filter('trim|required')->set('list-column', true),
        'uri' => String::create('uri')->filter('trim|required')->set('list-column', true),
    ),
);