<?php

class Session {
    public function __construct (){
        if (!isset($_SESSION)){
            session_start();
        }
    }
    
    public function setFlash($message,$type = 'success'){
        $_SESSION['flash']=array('message' => $message, 'type'=>$type);
    }
    
    public function flash (){
        if (isset($_SESSION['flash']['message'])){
            $html = '<div class="alert alert-'.$_SESSION['flash']['type'].' alert-dismissable">'
                    . '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
            if ($_SESSION['flash']['type']=='danger'){
                $html .='<span class="glyphicon glyphicon-ban-circle"></span>'
                        . '<strong> Erreur : </strong>';
            }else if ($_SESSION['flash']['type']=='success'){
                $html.='<span class="glyphicon glyphicon-ok-circle"></span>';
            }
            $html.=$_SESSION['flash']['message'].'</div>';
            $_SESSION['flash']=array();
            return $html;
        }
    }
}

