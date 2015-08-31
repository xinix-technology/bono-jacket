<?php

use Norm\Schema\String;
use Norm\Schema\Password;
use Norm\Schema\Date;

return array(
    'schema' => array(
        'name' => String::create('name')->set('list-column', true),
        'password' => Password::create('password')->set('list-column', true),
        'date' => Date::create('date')->set('list-column', true)->format('input', function(){
            $app = App::getInstance();
            return $app->response->template('_migrate/show');
        })
    ),
);