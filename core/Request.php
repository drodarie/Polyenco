<?php

class Request {
    
    public $url; //Url called by user
    public $page = 1; //The number of the page viewed
    
    function __construct() {
        $this->url = $_SERVER['PATH_INFO'];
        if (isset ($_GET['page']) AND (is_numeric($_GET['page'])) AND $_GET['page']> 0){
            $this->page = ceil($_GET['page']);
        }
    }
}
