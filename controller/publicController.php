<?php
require_once "../model/ContactModel.php";

if(isset($_GET['p'])){
    
    // utilisation du switch
    switch($_GET['p']){
        case 'accueil':
            include "../view/publicView/publicAccueilView.php";
            break;
        case 'contact':


# Connexion
try{
    # $PDOConnect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='. DB_CHARSET.';port='.DB_PORT, DB_LOGIN, DB_PWD);
    $MysqliConnect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($MysqliConnect, DB_CHARSET);

}catch(Exception $e){
    exit($e->getMessage());
}

// si on veut se connecter 
if(isset($_POST['username'],$_POST['password'])){
    $user = htmlspecialchars(strip_tags(trim($_POST['username'])),ENT_QUOTES);
    $pwd = htmlspecialchars(strip_tags(trim($_POST['password'])),ENT_QUOTES);

    $connect = connectUsers($MysqliConnect,$user,$pwd);

    if(is_string($connect)){
        $message = $connect;
    }else{
        header("Location: ./");
        exit();
    }
}

// on veut envoyer un message
if(isset($_POST['mail'],$_POST['messages'],$_POST['nom'],$_POST['sujet'])){
    $lemail = filter_var(trim($_POST['mail']),FILTER_VALIDATE_EMAIL);
    $lesujet = strip_tags(trim($_POST['sujet']));
    $lenom = strip_tags(trim($_POST['nom']));
    $messageDB = htmlspecialchars(strip_tags(trim($_POST['messages'])),ENT_QUOTES);
    $messageMail = strip_tags(trim($_POST['messages']));

    if($lemail==false || empty($messageDB)){
        $message = "Mail et/ou message non valides, veuillez recommencer !";
    }else{
        $insert = insertMessages($MysqliConnect,$lemail,$messageDB,$lenom,$lesujet);
        if(is_string($insert)){
            $message = $insert;
        }else{
            $message = "Votre message à bien été envoyé!";

            // pour l'admin du site
            $mailMessage = "Mail envoyé par $lemail \r\n \r\n " . $messageMail;
            $envoi = sendMail(MAIL_FROM, MAIL_ADMIN, "Message sur votre site", $mailMessage);
            
            // pour l'utilisateur du site
            $mailMessage = "Votre message a bien été envoyé sur le site http://mailmvc.webdev-cf2m.be/";
            $envoi2 = sendMail(MAIL_FROM, $lemail, "Message du site mailmvc.webdev-cf2m.be", $mailMessage);
            
            if ($envoi === true && $envoi2 == true) {
                $message .= "<br>Félicitation";
            }
        }
    }

}

            include "../view/publicView/publicContactView.php";
            break;
        case 'curriculum':
            include '../view/publicView/publicCvView.php';
            break;
        case 'liens':
            include '../view/publicView/publicLiensView.php';
            break;
        case 'travaux':
            include "../view/publicView/publicTravauxView.php";
            break;
        case 'tutoriels':
            include '../view/publicView/publicTutorielsView.php';
            break;
            case 'admin':
                include '../view/publicView/publicAdminView.php';
                break;
        default:
            include_once "../view/publicView/publicAccueilView.php";
    }

// sinon pas de $_GET['p'];    
}else{
    // inclusion d'homepage une seule X
    include_once "../view/publicView/publicAccueilView.php";
}


//require_once "../view/publicView.php";