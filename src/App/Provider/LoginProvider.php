<?php

namespace App\Provider;

class LoginProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;
        $that = $this;



        $app->filter('auth.login.success', function ($user) use ($app) {
            $roles = $user['role'];
            $auth_uris = array();
            foreach ($roles as $key => $role) {
                $roleModel = \Norm::factory('Role')->findOne($role);
                $roleprevileges = \Norm::factory('RolePrevileges')->find(array('role'=>$role));
                $uridata = array();
                foreach ($roleprevileges as $key => $value) {
                    $uridata[] = $value['rule'];
                }
                $uris[] = $uridata;
                $role_names[] = $roleModel['name'];
            }

            
            foreach ($uris as $key => $value) {
                $auth_uris = array_merge($auth_uris, $value);
            }

            $_SESSION['role_names'] = $role_names;
            $_SESSION['auth_uris'] = $auth_uris;
            // var_dump($auth_uris);exit();

            return $user;
        });

        /* Check Access Each Role */

        $app->filter('auth.authorize', function ($options) use ($app) {
            if (is_bool($options)) {
                return $options;
            }

            if(preg_match('/\/.*\.json/', $app->request->getPathInfo())){
                 if(!empty($_SESSION['user'])){
                        return true;
                 }
            }


            // $token = @$_SERVER['HTTP_CHECKITTOKEN'];

            // if($token){
            //     $userLoginModel = \Norm::factory('UserLogin');
            //     $userToken = $userLoginModel->findOne(array('token'=>$token));
            //     if(!empty($userToken) && $userToken['expired'] > date('Y-m-d')){
            //         /// authentiocation for mobile apps
            //         return true;
            //     }
            // }


            $role = isset($_SESSION['role_names']) ? $_SESSION['role_names'] : null;
            if (!is_null($role)) {

                /* Allow user to access homepage */
                if (empty($options['uri'])) {
                    return true;
                }

                $uri = is_string($options)?$options:$options['uri'];
                $segment = explode('/', $uri);


                /* Allow this user for access all authorized uri */
                $auth_uris = $_SESSION['auth_uris'];

                foreach ($auth_uris as $auth_uri) {
                    /* Allow admin for access all URI */
                    if ($auth_uri == '*') {
                        return true;
                    }

                    // $auth_uri =  str_replace(':id', '[a-zA-Z0-9\.\:]+', $auth_uri);
                    $auth_uri =  str_replace('/', '\/', $auth_uri);
                    $auth_uri = "@^" . preg_replace('/(:id)+/', '([a-zA-Z0-9\-\_\.\?\:]+)', $auth_uri) . "$@D";

                    if (preg_match($auth_uri, $options['uri'])) {
                        return true;
                    }
                }

                return false;
            }

            return $options;
        });
    }
}
