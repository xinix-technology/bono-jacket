<?php

namespace App\Controller;

use \Norm\Controller\NormController;
use Norm\Norm;

class RoleController extends AppController
{


	public function create()
    {
        
        $entry = $this->collection->newInstance()->set($this->getCriteria());

        $this->data['entry'] = $entry;
        $this->data['previlege'] = $this->generatePrevilege();

        if ($this->request->isPost()) {
            
            try {
                $post = $this->request->getBody();

                if(!empty($post['rule'])){
                    $rule = $post['rule'];
                    unset($post['rule']);
                }

                $result = $entry->set($post)->save();
                
                $this->createPrevilege($entry->getId(), $rule);

                h('notification.info', $this->clazz.' created.');

                h('controller.create.success', array(
                    'model' => $entry
                ));
            } catch (Stop $e) {
                throw $e;
            } catch (Exception $e) {
                // no more set notification.error since notificationmiddleware will
                // write this later
                // h('notification.error', $e);

                h('controller.create.error', array(
                    'model' => $entry,
                    'error' => $e,
                ));

                // rethrow error to make sure notificationmiddleware know what todo
                throw $e;
            }
        }
    }


    public function update($id)
    {
        try {
            $entry = $this->collection->findOne($id);
            
        } catch (Exception $e) {
            // noop
        }

        if (is_null($entry)) {
            return $this->app->notFound();
        }

        if ($this->request->isPost() || $this->request->isPut()) {
            try {
                $merged = array_merge(
                    isset($entry) ? $entry->dump() : array(),
                    $this->request->getBody() ?: array()
                );

                if(!empty($merged['rule'])){
                    $rule = $merged['rule'];
                    unset($merged['rule']);
                }


                $entry->set($merged)->save();

                $this->createPrevilege($entry->getId(), $rule);

                h('notification.info', $this->clazz.' updated');

                h('controller.update.success', array(
                    'model' => $entry,
                ));
            } catch (Stop $e) {
                throw $e;
            } catch (Exception $e) {
                h('notification.error', $e);

                if (empty($entry)) {
                    $model = null;
                }

                h('controller.update.error', array(
                    'error' => $e,
                    'model' => $entry,
                ));
            }
        }

        $this->data['entry'] = $entry;
        $this->data['previlege'] =  $this->generatePrevilege($id);
    }

    public function createPrevilege($idRole, $model){

        $roleprevileges = \Norm::factory('RolePrevileges')->find(array('role'=>$idRole));
        
        foreach ($roleprevileges as $key => $value) {
            $value->remove();            
        }
        

        foreach ($model as $key => $value) {
            $row = array('role' => $idRole,'type' => 'uri' , 'rule' => $value);
            $entry = \Norm::factory('RolePrevileges')->newInstance();
            $entry->set($row)->save();
        }



    }

    public function generatePrevilege($id = null){

        $previlege =  \Norm::factory('Previleges')->find()->sort(array('ordering' => 1));
        $prearray = array();

        if($id){
            $previlegerole = \Norm::factory('RolePrevileges')->find(array('role' => $id));
            $datarole = array();
            foreach ($previlegerole as $key => $value) {
                $datarole[$value['rule']] = true;
            }
            
        }

        foreach ($previlege as $key => $value) {
            if(empty($prearray[$value['module']])){
                $prearray[$value['module']] = array();
            }else{
                if(empty($prearray[$value['module']][$value['submodule']])){
                    $prearray[$value['module']][$value['submodule']] = array();
                }
            }
            if(!empty($datarole[$value['uri']])){
                $prearray[$value['module']][$value['submodule']][$value['action']] = array("uri" => $value['uri'] , "exists" => true);    
            }else{
                $prearray[$value['module']][$value['submodule']][$value['action']] = array("uri" => $value['uri'] , "exists" => false);    
            }
            
        }



        return  $prearray;

    }

}