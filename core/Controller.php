<?php

class Controller {
    
    public $request;
    private $vars = array();
    public $layout = 'default';
    private $rendered = false;
    
    
    /**
     * 
     * @param type $request Request sent by user
     */
    function __construct ($request){
        $this->request = $request;
    }
    
    /**
     * Allows to render a view
     * @param type $view Name of the view to render
     * @return boolean Render success
     */
    public function render ($view){
        if ($this->rendered){return false;}
        extract($this->vars);
        if (strpos($view, '/')===0){$view = ROOT.DS.'view'.$view.'.php';}
        else{$view = ROOT.DS.'view'.DS.$request->controller.DS.$view.'.php';}
        ob_start();
        require $view;
        $content_layout = ob_get_clean();
        require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
        $this->rendered=true;
        return true;
    }
    
    /**
     * Allows to use one or more variables in the view 
     * @param type $key Name of the parameter or array of variables
     * @param type $value
     */
    public function setVars($key,$value=null){
        if (is_array($key)) {
            $this->vars +=$key;
        } else {
            $this->vars[$key] = $value;
        }
    }
    
    /**
     * Allows to load a Model
     * @param type $name Name of the Model
     */
    public function loadModel($name){
        $file = ROOT.DS.'model'.DS.$name.'.php';
        require_once ($file);
        if (!isset($this->$name)){
            $this->$name = new $name();
        }
    }
    
    /**
     * Allows to display the 404 error page with the error message
     * @param type $message Error message
     */
    public function e404($message){
        header('HTTP/1.0 404 NOT_FOUND');
        $this->set('message',$message);
        $this->render('/errors/404');
        die();
    }
}

