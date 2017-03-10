<?php

/**
 * Bono App Configuration
 *
 * @category  PHP_Framework
 * @package   Bono
 * @author    Ganesha <reekoheek@gmail.com>
 * @copyright 2013 PT Sagara Xinix Solusitama
 * @license   https://raw.github.com/xinix-technology/bono/master/LICENSE MIT
 * @version   0.10.0
 * @link      http://xinix.co.id/products/bono
 */

use Norm\Schema\String;
use Norm\Schema\Password;

return array(
    'application' => array(
        'title' => 'Bono',
        'subtitle' => 'One great application'
    ),
    'bono.timezone' => 'Asia/Jakarta',
    'bono.prettifyURL' => false,
    'bono.salt' => '123456789',
    'bono.theme' => array(
        'class' => 'Xinix\\Theme\\Jacket',
        'overwrite' => true,
    ),
    'bono.providers' => array(
        'Norm\\Provider\\NormProvider' => array(
            'datasources' => array(
                // 'filedb' => array(
                //     'driver' => 'ROH\\FDB\\Connection',
                //     'dataDir' => '../srv/data',
                // ),
                // to use mongo
                'mongo' => array(
                    'driver' => 'Norm\\Connection\\MongoConnection',
                    'database' => 'bono',
                ),
            ),
            'collections' => array(
                'default' => array(
                    // The observer, more like a hook event
                    'observers' => array(
                        'Norm\\Observer\\Ownership',
                        'Norm\\Observer\\Timestampable',
                    ),

                    // Limit the entries that shown, then paginate them
                    'limit' => 10,
                ),

                // Resolver to find where the schemas config stored see in /config/collections folder
                'resolvers' => array(
                    'Norm\\Resolver\\CollectionResolver',
                ),
            ),
        ),
        'Bono\\Provider\\LanguageProvider' => null,
        'App\\Provider\\AppProvider',
        // uncomment below to enable auth
        // 'App\\Provider\\LoginProvider',
        'DapurXinix\\Provider\\DapurXinixProvider'=>array(
                'Upload_Directory' => dirname(__DIR__).'/www/data',// set directory for upload on application 
                'bucket' => 'data'
            ),
    ),
    'bono.middlewares' => array(
        'Bono\\Middleware\\StaticPageMiddleware' => null,
        'Bono\\Middleware\\ControllerMiddleware' => array(
            'default' => 'App\\Controller\\AppController',
            'mapping' => array(
                '/icons' => null,
                '/table' => null,
                '/list' => null,
                '/grid' => null,
                '/detail' => null,
                '/user' => null,
                '/form' => null,
                '/previleges' => null,
                '/role' => '\\App\Controller\\RoleController'
            ),
        ),
        // uncomment below to enable auth
        // 'Xinix\\BonoAuth\\Middleware\\AuthMiddleware' => array(
        //     'driver' => 'Xinix\\BonoAuth\\Driver\\NormAuth',
        // ),
        'Bono\\Middleware\\NotificationMiddleware' => null,
        'Bono\\Middleware\\SessionMiddleware' => null,
        'Bono\\Middleware\\ContentNegotiatorMiddleware' => array(
            'extensions' => array(
                'json' => 'application/json',
            ),
            'views' => array(
                'application/json' => 'Bono\\View\\JsonView',
            ),
        ),
    ),
);
