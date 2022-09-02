<?php

//Routing
if (isset($_POST['template'])) {
    $page = $_POST['template'];
}

//On choisi le template à activer
switch($page) {
    case 'Ajout_partenaire':
        //Récupère paramètre mail
        $client_name = $_POST['client_name'];
        $password = $_POST['password'];
        $sendSmtpEmail = array('client_name'=>$client_name, 'password'=>$password, 'mail'=>$_POST['mail']);
        require_once 'templates/Ajout_partenaire.php';
    break; 
    case 'Ajout_salle_de_sport':
        //Récupère paramètre mail
        $client_name = $_POST['client_name'];
        $Nom = $_POST['Nom'];
        $password_salle = $_POST['password_salle'];
        $sendSmtpEmail = array('client_name'=>$client_name, 'nom'=>$Nom, 'mail'=>$_POST['mail'], 'mail_salle'=>$_POST['mail_salle'], 'password_salle'=>$password_salle);
        require_once 'templates/Ajout_salle_de_sport.php';
    break;
    case 'marque_de_sport_activee_desactivee':
        //Récupère paramètre mail
        $client_name = $_POST['client_name'];
        $marque_active_ou_desactive = $marque_active_ou_desactive;
        $sendSmtpEmail = array('client_name'=>$client_name, 'marque_active_ou_desactive'=>$marque_active_ou_desactive, 'mail'=>$_POST['mail']);
        require_once 'templates/marque_de_sport_activee_desactivee.php';
    break;
    case 'salle_active_ou_desactivee':
        $client_name = $_POST['client_name'];
        $nom_salle = $_POST['nom_salle'];
        $salle_active_ou_desactivee = $salle_active_ou_desactivee;
        $sendSmtpEmail = array('client_name'=>$client_name, 'nom_salle'=>$nom_salle, 'salle_active_ou_desactivee'=>$salle_active_ou_desactivee, 'mail_partenaire'=>$_POST['mail_partenaire'], 'mail_structure'=>$_POST['mail_structure']);
        require_once 'templates/salle_de_sport_activee_desactivee.php';
    break;
    case 'modifications_permissions_globales':
        $client_name = $_POST['client_name'];
        $sendSmtpEmail = array('client_name'=>$client_name, 'mail'=>$_POST['mail']);
        require_once 'templates/modifications_permissions_globales.php';
    break;
    //Si aucun des templates ne correspond: on renvoie une erreur 404    
    default:
        echo 'Erreur 404';
        break;
} 