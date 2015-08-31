<?php

use Norm\Schema\String;

return array(
    'schema' => array(
        'title' => String::create('title')->set('list-column', true),
        'description' => String::create('description')->set('list-column', true),
        'group' => String::create('group')->set('list-column', true),
        'date' => String::create('date')->set('list-column', true),
    ),
);