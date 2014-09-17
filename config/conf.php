<?php

class Conf {
    //Level of Debug
    static $debug =0;
    
    //List of databases
    static $databases = array(
        'default' => array(
            'host' => 'https://phpmyadmin.ovh.net/',
            'login' => 'juniorpoadm',
            'password' => 'Po98jhTY',
            'database' => 'site_polyenco'
        )
    );

}
Router::link("", "Entreprise/index");