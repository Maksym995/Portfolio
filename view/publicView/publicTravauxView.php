<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Travaux</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>

<?php 
    include_once "inc/menuView.php" 
?>

<div class="travaux">
<?php
        # tant qu'on a des liens
        foreach($travaux as $item):
        ?>
            <div>
               <a href="<?=$item['url']?>"><img src="<?=$item['img']?>"alt=""></a>
                <h1><?=$item['titre']?></h1>
                <p><?=nl2br($item['description'])?></p>
            </div>
        <?php
        endforeach;
    ?>
</div>

<div class="travauxfooter">
<?php 
    include_once "inc/footerView.php" 
?>
</div>
</body>
</html>