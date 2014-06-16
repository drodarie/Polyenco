<?php

class Model {
    
    static $connections = array();
    public $dbname = 'default';
    public $table = false;
    public $database;
    public $primaryKey = 'id';
    
    function __construct() {
        $conf = Conf::$dbnames[$this->$dbname];        
        if ($this->table===false){
            $this->table = strtolower(get_class($this)).'s';
        }
        if (isset(Model::$connections[$this->$dbname])){
            $this->database = Model::$connections[$this->$dbname];
            return true;
        }
        try{
            $pdo= new PDO('mysql:host='.$conf['host'].';dbname='.$conf['database'].';',
                $conf['login'],
                    $conf['password'],
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            $pdo->setAttribute(PDO::ATTR_ERR, PDO::ERRMODE_WARNING);
            Model::$connections[$this->$dbname] = $pdo;
            $this->database = $pdo;
        }catch (PDOException $ex){
            if (Conf::$debug>=1){die($ex->getMessage());}
            else {die('Impossible de se connecter à la base de données');}
        }
    }
    
    /**
     * Allows to execute a SQL request with parameters
     * @param type $req SQL request with an array of conditions
     * @return type Array of lines witch match the request
     */
    public function find($req){
        $sql = 'SELECT ';
        
        if (isset($req['fields'])){
            if (!is_array($req['fields'])){
                $sql.= $req['fields'];
            }
            else{
                $sql.= implode (', ',$req['fields']);
            }
        }else{
            $sql.="*";
        }
        $sql.=' FROM '.$this->table.' as '.get_class($this);
        if (isset($req['conditions'])){
            $sql .= 'WHERE ';
            if (!is_array($req['conditions'])){
                $sql.= $req['conditions'];
            }
            else{
                $cond = array();
                foreach ($req['conditions'] as $k=>$v) {
                    if (!is_numeric($v)){
                        $v = '"'.mysql_escape_string($v).'"';
                    }
                    $cond[]= "$k => $v";
                }
                $sql.=implode(' AND ',$cond);
            }
        }
        $pre = $this->database->prepare($sql);
        $pre->execute();
        return $pre->fetchAll(PDO::FETCH_OBJ);
    }
    
    /**
     * Allows to execute a SQL request and keep only the first line
     * @param type $req SQL request with an array of conditions
     * @return type First line witch match the request
     */
    public function findFirst($req){
        return current($this->find($req));
    }
}

