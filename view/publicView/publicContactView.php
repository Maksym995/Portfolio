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
<div class="formulaire">
    <h1>Le formulaire de contact</h1>
    <h3>Merci de me laisser un message</h3>

            <?php
            if(isset($erreur))
            echo $erreur;
            else{
            ?>
                <form class="form" action="" method="post" name="contact">
                    <label class="label">Votre nom</label>
                    <input class="input" type="text" name="lenom" required>
                    <label class="label">Votre mail</label>
                    <input class="input" type="text" name="lemail" required>
                    <label class="label">Sujet</label>
                    <input class="input" type="text" name="lesujet" required>
                    <label class="label">Votre message</label>
                    <textarea class= "msg" name="lemessage" maxlength="600" required></textarea>
                    <input class="submit" type="submit" value="Envoi du mail">
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