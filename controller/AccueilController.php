<?php

class AccueilController extends Controller {
    public function index(){
        $this->setVars("style_for_page", CSS . 'accueil.css');      
    }
}
