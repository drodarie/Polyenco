<?php

class EntrepriseController extends Controller {
    
    public function __construct($request){
        parent::__construct($request);
        $this->admin_email = 'contact.polyenco@gmail.com';
        $this->subject = 'Mail envoyé à partir du site';
    }
    
    public function index(){
        $this->setVars(array(
            "content_for_header" => ROOT . DS . 'view' . DS . 'Entreprise' . DS . 'headerEntreprise.php',
            "style_for_page" => CSS . 'entreprise.css'));      
    }
    
    private function buildContent(){
        return '<p>Nom : ' . $this->request->data["contact_nom"] . '</p>\n'
                .'<p>Prénom : ' . $this->request->data["contact_prenom"] . '</p>\n'
                .'<p>Adresse Email : ' . $this->request->data["contact_email"] . '</p>\n'
                .'<p>Telephone : ' . $this->request->data["contact_tel"] . '</p>\n'
                .'<p>Entreprise : ' . $this->request->data["contact_entreprise"] . '</p>\n'
                .'<p>Message :\n\n ' . $this->request->data["contact_message"] . '</p>\n'
                .'<p>Date : '.date('d\/m\/y G:i').'</p>';
    }
    
    public function testForm(){
        return isset($this->request->data["contact_nom"])&&isset($this->request->data["contact_prenom"])&&isset($this->request->data["contact_email"])
        &&isset($this->request->data["contact_tel"])&&isset($this->request->data["contact_entreprise"])&&isset($this->request->data["contact_message"]);
    }
    
    public function sendEmail(){
        if ($this->testForm()){
            $content=$this->buildContent();        
            if (!mail($this->admin_email,$this->subject,$content,'De :' . $this->request->data["contact_email"])){
                $this->Session->setFlash("Erreur lors de l'envoi de votre message.<br>Réessayez plus tard ou contactez Polyenco directement.","danger");
                Router::redirect('Entreprise/index', 0, 'Contact');
            }
        }
        else {
            $this->Session->setFlash('Certains paramètres du formulaire sont manquants. Veuillez les compléter.',"danger");
            Router::redirect('Entreprise/index', 0, 'Contact');
        }
        Router::redirect('Entreprise/index');
    }
}

