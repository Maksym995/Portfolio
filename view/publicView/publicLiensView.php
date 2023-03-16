<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Liens</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<?php 
    include_once "inc/menuView.php" 
?>
    
<div class="liens">
<?php
        # tant qu'on a des liens
        foreach($liens as $item):
        ?>
            <div class="girdliens">
                <div class="lienssize">
                    <a href="<?=$item['url']?>"><img src="<?=$item['img']?>"  alt=""></a>
                </div> 
                <div class="textarea">
                    <p><?=nl2br($item['description'])?></p>
                </div>
            </div>
        <?php
        endforeach;
    ?>
</div>
    
<div class="liensfooter">
    <?php 
        include_once "inc/footerView.php" 
    ?>
</div>
</body>
</html>