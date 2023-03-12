<?php
# debug with file's name
# echo __FILE__;
# var_dump($_SESSION);

if(isset($_GET['disconnect'])){
    // si la déconnexion renvoie true (on est connecté)
    if(deconnect()){
        // redirection
        header("Location: ./");
    }

}else{
    // appel de la vue
    include "../view/privateView/pivateAdminView.php";
}