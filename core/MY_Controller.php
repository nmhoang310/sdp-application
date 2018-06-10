<?php

class MY_Controller extends CI_Controller
{
    public $data;
    
    function __construct()
    {
        parent::__construct();
    }
    
    protected function putData($key, $value) {
        $this->data[$key] = $value;
    }
    
    protected function getData() {
        return $this->data;
    }
    
    protected function clearData() {
        $this->data = array();
    }
}
?>