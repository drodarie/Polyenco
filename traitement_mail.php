<?php 

if(isset($_POST['contact_nom'])&& isset($_POST['contact_prenom'])&& isset($_POST['contact_tel']) && isset($_POST['contact_email']) && isset($_POST['contact_message'])){
    $nom=$_POST['contact_nom']; 
    $prenom=$_POST['contact_prenom']; 
    $entreprise=$_POST['contact_entreprise'];
    $tel=$_POST['contact_tel'];
    $mail=$_POST['contact_email']; 
    $objet="Formulaire de contact"; 
    $message=$_POST['contact_message']; 

    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP"; 

    $subject="$objet"; 
    $destinataire="contact.polyenco@gmail.com";
    $body="\r\n $prenom $nom \r\n Entreprise: $entreprise \r\n Tel: $tel \r\n Email: $mail \r\n $message \r\n"; 

    if (mail($destinataire,$subject,$body,$headers)) 
         { 
              header('Location: index.php?envoi=0#Contact');
                      exit();
         } 
         else 
         { 
             header('Location: index.php?envoi=1#Contact');
                      exit();
         } 
}
else
{ 
              header('Location: index.php?envoi=1#Contact');
                      exit();
} 
?>