<?php

class Request {
    
    public $url; //Url called by user
    public $page = 1; //The number of the page viewed
    public $prefix = false;
    public $data = false;
    
    function __construct() {
        $this->url = isset($_SERVER['PATH_INFO'])?$_SERVER['PATH_INFO']:'/';
        if (isset ($_GET['page']) AND (is_numeric($_GET['page'])) AND $_GET['page']> 0){
            $this->page = ceil($_GET['page']);
        }
        if (!empty ($_POST)){
            foreach($_POST as $k =>$v){
                $this->data[$k]=$v;
            }
        }
    }
    
    public function issetParameter($id){
        return isset($this->data) && isset($this->data[$id])&& $this->data[$id]!= "";
    }
}
