<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop.me</title>
    <link rel="stylesheet" href="http://localhost/shop.me/style.css">
</head>
<body>

    <?php
    require_once 'home-1.php';
    ?>
    <style>
        /*Do not remove*/ 
        .header{
        width: 100%;
        height: 100vh;
        padding: 0 10%;
        background: <?php echo $code?>;
    }

    </style>
    
    <div class="header">
        <nav>
            <img src="images/<?php echo $img?>" alt="<?php echo $alt?>">
            <ul>
                <li><a href="<?php echo $nav1link?>"><?php echo $nav1?></a></li>
                <li><a href="<?php echo $nav2link?>"><?php echo $nav2?></a></li>
                <li><a href="<?php echo $nav3link?>"><?php echo $nav3?></a></li>
                <li><a href="<?php echo $nav4link?>"><?php echo $nav4?></a></li>
                <li><a href="<?php echo $nav5link?>"><?php echo $nav5?></a></li>
            </ul>
        </nav>

        <div class="text-box">
            <h1><?php echo $h1?></h1>
            <p><?php echo $p?></p>
            <a href="#">Shop Now</a>
        </div>
        <div class="user-box">
            <img src="images/user.png" alt="">
        </div>

    </div>

</body>
</html>
