<?php

namespace App\Controller;

use \Norm\Controller\NormController;

class AppController extends NormController
{
    
    public $uploadConfig = array(
            'filename' => null,
            'path' => './',
            'size' => 2097152, // default 2MB
            'allowed' => array()
        );

    public $uploadData = array(
            'filename' => null,
            'path' => null,
            'fullpath' => null
        );

    public $errors = array();
    protected $filterrow = array();

    public function getSearch(){

        $search = $this->request->get('!search');

        if($search){
            $schema =  $this->collection->schema();
            $dtsearch = array();
            foreach ($schema as $value) {
                if($value->get('name')[0] !='$'){
                    if($value->get('list-column')){
                        $dtsearch[] = array($value->get('name').'!like' => $search);
                    }
                }
            }

            $search = array('!or' => $dtsearch);

        }else{
            $search = array();
        }

        return $search;
    }

    public function getSort(){
        $sort = parent::getSort();
        $sort['$created_time'] = -1;
        return $sort;
    }

    public function getCriteria(){
        $criteria = parent::getCriteria();

        $criteria = array_merge($criteria,$this->getSearch());

        return $criteria;
    }

    public function upload($filename, $config)
    {
        if (!$filename) {
            throw new Exception('Missing argument filename.');
        }
        $this->uploadConfig['filename'] = $filename;
        $this->uploadConfig = array_merge($this->uploadConfig, $config);

    }

    protected function doUpload()
    {
        
        if (isset($_FILES[$this->uploadConfig['filename']])) {

            $file_name = $_FILES[$this->uploadConfig['filename']]['name'];
            $file_size =$_FILES[$this->uploadConfig['filename']]['size'];
            $file_tmp =$_FILES[$this->uploadConfig['filename']]['tmp_name'];
            $file_type=$_FILES[$this->uploadConfig['filename']]['type'];
            $file_ext=strtolower(end(explode('.', $_FILES[$this->uploadConfig['filename']]['name'])));
            $extensions = $this->uploadConfig['allowed'];

            if (in_array($file_ext, $extensions) === false) {
                $this->setError("extension not allowed, please choose a ".implode(', ', $this->uploadConfig['allowed'])." file.");
            }

            if ($file_size > $this->uploadConfig['size']) {
                $this->setError('File size must be excately ' . $this->uploadConfig['size']);
            }

            if (!$this->getUploadError()) {
                if (!file_exists($this->uploadConfig['path'])) {
                    mkdir($this->uploadConfig['path'], 0755, true);
                }

                move_uploaded_file($file_tmp, $this->uploadConfig['path'].$file_name);
                $this->setUploadData('filename', $file_name);
                $this->setUploadData('path', $this->uploadConfig['path']);
                $this->setUploadData('fullpath', str_replace('../', '', trim($this->uploadConfig['path'].$file_name)));
                return true;
            } else {
                return false;
            }
        }

    }

    public function setUploadData($key, $val)
    {
        $this->uploadData[$key] = $val;
    }

    public function getUploadData()
    {
        return $this->uploadData;
    }

    public function getUploadError()
    {
        return $this->errors;
    }

    public function setError($err)
    {
        array_push($this->errors, $err);
    }

    protected function csv_to_array($filename='', $delimiter=',')
    {
        if (!file_exists($filename) || !is_readable($filename)) {
            return false;
        }

        ini_set('auto_detect_line_endings', true);

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false)
            {
                if (!$header) {
                    $header = $row;
                    $different = array_diff($header, $this->filterrow);

                    if(count($different) > 0){
                        throw new \Exception("CSV Format Is invalid", 400);
                    }
                } else {

                    if(count($header) == count($row)){
                        $data[] = array_combine($header, $row);
                    }else{
                        throw new \Exception("CSV Format Is invalid", 400);
                    }
                }
            }
            fclose($handle);
        }

        return $data;
    }

    protected function filterRow($mandatoryFields, &$value)
    {
        $result  = true;
        $error  = '';

        foreach ($mandatoryFields as $key => $v) {
            if (empty($value[$v])) {
                if ($key != count($mandatoryFields)-1) {
                    $error .= $v .', ';
                } else {
                    $error .= $v;
                }
            }
        }

        if ($error != '') {
            $error = 'Column ' . $error . ' cannot be empty';
        }
        return $error;
    }


    protected function listError($error)
    {
        $result ='';
        foreach ($error as $key => $value) {
            $result .= 'line ' . $key  . ' : '. $value .'<br>';
        }

        return  $result;
    }
}
