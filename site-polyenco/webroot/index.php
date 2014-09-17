<?php
    define('WEBROOT', dirname(__FILE__));
    define('ROOT',dirname(WEBROOT));
    define('DS',DIRECTORY_SEPARATOR);
    define('CORE',ROOT.DS.'core');
    define('BASE_URL',dirname(dirname($_SERVER['SCRIPT_NAME'])));

    require CORE.DS.'Includes.php';
    

    define('CSS',Router::webroot("/webroot/css/" ));
    define('JS',Router::webroot("/webroot/js/"));
    define('IMG',Router::webroot("/webroot/img/" ));
    define('BOOTSTRAP',Router::webroot("/webroot/Librairies/bootstrap/"));
    define('BRUSHED',Router::webroot("/webroot/Librairies/brushed/_include/"));
    
    new Dispatcher();
?>