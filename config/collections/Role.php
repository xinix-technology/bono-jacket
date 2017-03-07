<?php

use Norm\Schema\String;
use Norm\Schema\Password;

return array(
    'schema' => array(
        'name'   => String::create('name')->filter('trim|required|unique:Role,name')->set('list-column', true),
    ),
);