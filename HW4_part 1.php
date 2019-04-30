
<?php

error_reporting(-1);

?>

<!DOCTYPE html>
<html lang="ru">

<?php
    
    $title =  "Онлайн магазин";
    $h1 = "Galary";
    $year = 2018;
    
    ?>
    
<head>
    <meta charset="UTF-8">
    <!--<link href="styles/site.css" rel="stylesheet">-->
    <title><?php echo $title ?></title>
</head>
<body>
<header>
    <h1><?php echo $h1 ?></h1>
</header>

    <?php
    $goods = [
        [
           
            //'img' => include 'link1.php', // можно здорово сократить код за счет include
            'img' => '<a href="images/goods/Iphone.jpg" target_blank><img src="/images/goods/Iphone.jpg" width=150, heiht=300 alt=""></a>',
        ],
        [
            
            'img' => '<a href="images/goods/friday_29.jpg" target_blank><img src="/images/goods/friday_29.jpg" width=150, heiht=300 alt=""></a>',
        ],
        [
            
            'img' => '<a href="images/goods/gsmart.jpg" target_blank><img src="/images/goods/gsmart.jpg" width=150, heiht=300 alt=""></a>',
        ],
        [
           
            'img' => '<a href="images/goods/htc.jpg" target_blank><img src="/images/goods/htc.jpg" width=150, heiht=300 alt=""></a>',
        ],
        [
            
            'img' => '<a href="images/goods/samsung.jpg" target_blank><img src="/images/goods/samsung.jpg" width=150, heiht=300 alt=""></a>',
        ],
    ];

    foreach ($goods as $key => $good) {
        echo $good['img'] . '<br>';

        echo '<hr>';
    }
        

    ?>

<footer>
    
</footer>
</body>
</html>
