<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Maksym</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<?php 
    include_once "inc/menuView.php" 
?>

    <div class="">
    <h1>Mon formulaire de contact</h1>
    <p>Merci de me laisser un message</p>
    <?php
    if(isset($erreur))
    echo $erreur;
    else{
    ?>
    <form action="" method="post" name="contact">
        <input name="lenom" placeholder="Votre nom" required><br>
        <input name="lemail" placeholder="Votre mail" required><br>
        <input name="lesujet" placeholder="Sujet" required><br>
        <textarea name="lemessage" placeholder="Votre message" required></textarea><br>
        <input type="submit" value="Envoi du mail">
    <?php
    }
    ?>
    </form>
</div>

<?php 
    include_once "inc/footerView.php" 
?>

</body>
</html>