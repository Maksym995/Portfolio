<?php
#var_dump($db);

 $sqlTravaux = "SELECT `titre`, `description`, `img`, `url` FROM `travaux` ORDER BY `id` ASC; ";

 try {
     $queryTravaux = mysqli_query($db, $sqlTravaux);
 }catch(Exception $e){
     # arrêter le script et afficher l'erreur (de type SQL)
     exit(mb_convert_encoding($e->getMessage(),'UTF-8','ISO-8859-1'));
 }
 
 
 # on convertit les liens récupérés en tableaux associatifs intégrés dans un tableau indexé
 $travaux = mysqli_fetch_all($queryTravaux,MYSQLI_ASSOC);
 
 
 
 # on efface les données récupérées par le "SELECT.." précédent (bonnes pratiques)
 mysqli_free_result($queryTravaux);
