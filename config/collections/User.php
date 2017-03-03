<?php

use Norm\Schema\String;
use Norm\Schema\Password;

return array(
    'schema' => array(
        'first_name' => String::create('first_name')->filter('trim|required')->set('list-column', true),
        'last_name' => String::create('last_name')->filter('trim|required')->set('list-column', true),
        'username' => String::create('username')->filter('trim|required|unique:User,username')->set('list-column', true),
        'password' => Password::create('password')->filter('trim|confirmed|salt'),
        'email' => String::create('email')->filter('trim|required|unique:User,email')->set('list-column', true),
        'birthday' => String::create('birthday')->filter('trim'),
        'gender' => String::create('gender')->filter('trim'),
        'mobile_phone' => String::create('mobile_phone')->filter('trim'),
        'address' => String::create('address')->filter('trim'),
        'role'      => ArrayReference::create('role_id')
                    ->to('Role', null, 'name')
    ),
);