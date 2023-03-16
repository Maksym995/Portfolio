<?php
 /*var_dump($db);*/

$sqlLiens = "SELECT `titre`, `description`, `img`, `url` FROM `liens` ORDER BY `id` ASC; ";

try {
    $queryLien = mysqli_query($db, $sqlLiens);
}catch(Exception $e){
    # arrêter le script et afficher l'erreur (de type SQL)
    exit(mb_convert_encoding($e->getMessage(),'UTF-8','ISO-8859-1'));
}


# on convertit les liens récupérés en tableaux associatifs intégrés dans un tableau indexé
$liens = mysqli_fetch_all($queryLien,MYSQLI_ASSOC);



# on efface les données récupérées par le "SELECT.." précédent (bonnes pratiques)
mysqli_free_result($queryLien);
