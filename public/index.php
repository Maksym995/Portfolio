<?php

session_start();

require_once "../config.php";
require_once "../model/ContactModel.php";
require_once "../model/LiensModel.php";
require_once "../model/TravauxModel.php";
//require_once "../model/UtilisateursModel.php";



# Connexion
try{
    $db = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($db,DB_CHARSET);
}catch(Exception $e){
    exit($e->getMessage());
}

# Router
if(isset($_SESSION['myID'])&&$_SESSION['myID']==session_id()){
    require_once "../controller/privateController.php";
  
}else{
    require_once "../controller/publicController.php";
}

mysqli_close($db);