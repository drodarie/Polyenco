<?php

class Router{
    /**
     * Allows to parse an URL to get its parameters
     * @param type $url URL to parse
     * @param type $request Object to store the results
     */
    static function parse($url, $request){
        $url = trim($url);
        $params = explode('/', $url);
        
        $request->controller = $params[0];
        $request->action = isset($params[1])?$params[1]:'index';
        $request->params = array_slice($params,2);
    }
}

