<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Contact</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="">
<?php 
    include_once "inc/menuView.php" 
?>
<div class="centerbody">
    <div class="formulaire">
        <h1>Le formulaire de contact</h1>
        <h3>Merci de me laisser un message</h3>
        <p class="alert">
        <?php
        if (isset($message)):
            ?>
            <?= $message ?>
        <?php 
        endif;
        ?> 
        </p>
            <form class="form" action="" method="POST" name="contacts">
                <label class="label">Votre nom</label>
                <input class="input" type="text" name="nom">
                <label class="label">Votre mail</label>
                <input class="input" type="text" name="mail">
                <label class="label">Sujet</label>
                <input class="input" type="text" name="sujet">
                <label class="label">Votre message</label>
                <textarea class= "msg" name="messages" maxlength="600"></textarea>
                <input class="submit" type="submit" value="Envoi du mail">
                <?php
                ?>
            </form>

    </div>
</div>
<?php 
    include_once "inc/footerView.php" 
?>
</body>
</html>