<?php

class Request {
    
    public $url; //Url called by user
    
    function __construct() {
        $this->url = $_SERVER['PATH_INFO'];
    }
}
