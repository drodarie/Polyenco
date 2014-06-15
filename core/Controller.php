<?php

class Controller {
    
    public $request;
    private $vars = array();
    public $layout = 'default';
    private $rendered = false;
    
    function __construct ($request){
        $this->request = $request;
    }
    
    public function render ($view){
        if ($this->rendered){
            return false;
        }
        
        if (strpos($view, '/')===0){
            $view = ROOT.DS.'view'.$view.'.php';
        }
        $view = ROOT.DS.'view'.DS.$request->controller.DS.$view.'.php';
        ob_start();
        require $view;
        $content_layout = ob_get_clean();
        require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
        $this->rendered=true;
        return true;
    }
    
    public function setVars($key,$value=null){
        if (is_array($key)) {
            $this->vars +=$key;
        } else {
            $this->vars[$key] = $value;
        }
    }
}

