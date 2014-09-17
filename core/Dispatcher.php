<?php

class Dispatcher {
    
    var $request;
    
    function __construct(){
        $this->request = new Request();
        Router::parse($this->request->url,$this->request);
        $controller = $this->loadController();
        $action = $this->request->action;
        if($this->request->prefix){
            $action = $this->request->prefix.'_'.$action;
        }
        if (!in_array($action,array_diff(get_class_methods($controller),get_class_methods('Controller')))){
            $this->error('Le controleur '.$this->request->controller.' n\'a pas de methode '.$this->request->action);
        }
        call_user_func_array(array($controller,$action), $this->request->params);
        $controller->render($action);
    }
    
    /**
     * Allows to generate an error page in case of routing problem
     * @param type $message Type of error
     */
    function error ($message){
        $controller = new Controller($this->request);
        $controller->e404($message);
    }
    
    /**
     * Allows to load the Controller depending on the user's request
     * @return \name The Controller loaded
     */
    function loadController (){
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'controller'.DS.$name.'.php';
        if (!file_exists($file)){
            $this->error('Le controleur '.$this->request->controller.' n\'existe pas.');
        }        
        require $file;
        $controller = new $name($this->request);
        $controller->Session=new Session();
        return $controller;
    }
}

