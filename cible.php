<?php

$destinataire = $_POST['email']; //destinataire
$expediteur = 'From: ghaffar@codecademy.fr'."\r\n"; //expediteur
$objet = $_POST['sujet'];
$msg = $_POST['message'];


if (isset($_POST['envoyer'])){ //traitement effectué apres envoi

if mail($destinataire, $objet, $msg, $expediteur);{ //envoie le mail

    $alert = 'E-mail envoyé';

} 
elseif(empty($destinaire)   // verifie si les champs sont vides
    || empty($expediteur)
    || empty($objet) 
    || empty($msg))
{  
    $alert = 'Tous les champs doivent être renseignés'; 
}   

else 
{
   $alert = 'Erreur d\'envoi de l\'e-mail';
}
 echo $alert;
}
?>
