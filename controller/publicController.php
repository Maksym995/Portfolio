<?php
if(isset($_GET['p'])){
    
    // utilisation du switch
    switch($_GET['p']){
        case 'accueil':
            include "../view/publicView/publicAccueilView.php";
            break;
        case 'contact':
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

// si on veut se connecter 
