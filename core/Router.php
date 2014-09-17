<?php

class Router {

    static $routes = array();
    static $prefixes = array();

    
    static function prefix ($prefix, $url){
        Router::$prefixes[$url]=$prefix;
    }
    
    /**
     * Allows to parse an URL to get its parameters
     * @param type $url URL to parse
     * @param type $request Object to store the results
     */
    static function parse($url, $request) {
        $url = trim($url,'/');
        if (empty($url)) {
            $url = Router::$routes[0]['url'];
        } else {
            $match = false;
            foreach (Router::$routes as $v) {
                if (!$match && preg_match($v['redirreg'],$url,$match)) {
                    $url = $v['origin'];
                    foreach ($match as $k=>$v) {
                        $url = str_replace(':'.$k.':',$v,$url);
                    }
                    $match = true;
                }
            }
        }

        $params = explode('/', $url);
        if (in_array($params[0],array_keys(self::$prefixes))){
            $request->prefix = self::$prefixes[$params[0]];
            array_shift($params);
        }
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'index';
        $request->params = array_slice($params, 2);
        return true;
    }

    static function link($redir, $url) {
        $r = array();
        $r['url']=$url;
        
        $r['originreg'] = preg_replace('#([a-z0-9]+):([^\/]+)#', '${1}:(?P<${1}>${2})', $url); 
        $r['originreg'] = str_replace('/*','(?P<args>\/?.*)',$r['originreg']);
        $r['originreg'] = '#^'.str_replace('/', '\/', $r['originreg']) . '$#';
        
        $r['origin'] = preg_replace('#([a-z0-9]+):([^\/]+)#',':${1}:',$url); 
        $r['origin'] = str_replace('/*',':args:',$r['origin']);
        
        $r['params'] = array();
        $params = explode('/', $url); //explodes the origin url to get its parameters
        foreach ($params as $k => $v) {
            if (strpos($v, ':')) {
                $p = explode(':', $v);
                $r['params'][$p[0]] = $p[1];
            } 
        }
        
        $r['redirreg'] = $redir;
        $r['redirreg'] = str_replace('/*', '(?P<args>/?.*', $r['redirreg']);
        foreach ($r['params'] as $k => $v) {
            $r['redirreg'] = str_replace(":$k:","(?P<$k>$v)", $r['redirreg']);
        }
        $r['redirreg'] = '#^'.str_replace('/','\/', $r['redirreg']).'$#';
        $r['redir'] = preg_replace('#:([a-z0-9]+)#', ':${1}:', $redir);
        $r['redir'] = str_replace('/*', ':args:', $r['redir']);
        Router::$routes[] = $r;
    }

    static function url($url='') {
        trim($url,'/');
        foreach (Router::$routes as $v) {
            $match = array();
            if (preg_match($v['originreg'], $url, $match)) {
                $url = $v['redir'];
                foreach ($match as $k => $w) {
                    $url = str_replace(":$k:", $w, $url);
                }
            }
        }
        foreach (Router::$prefixes as $k=>$v){
            if(strpos($url,$v)===0){
                $url = str_replace($v,$k,$url);
            }
        }
        return BASE_URL . '/' . $url;
    }
    
    static function redirect($url,$code=null,$location=null){
        if ($code==301){
            header("HTTP/1.1 301 MOVED_PERMANENTLY");
        }
        $route=Router::url($url);
        if (isset($location)&& preg_match('#^\w+$#', $location)){
            $route.='/#'.$location;
        }
        header("Location: ".$route);
    }
    
    static function webroot($url){
        trim($url,'/');
        return BASE_URL.$url;
    }
}
