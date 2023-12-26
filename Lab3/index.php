<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = "Рестораны Москвы - Главная"; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@400;600;700&family=Inclusive+Sans&family=Montserrat:wght@400;600&family=Open+Sans:wght@300&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href=<?php echo "index.php";?> class='.activ'><?php echo "Главная";?></a></li>
                <li><a href=<?php echo "restaurants.php";?> class='.activ'><?php echo "Рестораны";?></a></li>
                <li><a href=<?php echo "reataurant.php";?> class='.activ'><?php echo "Подробнее";?></a></li>
            </ul>
        </nav>
    </header>
    <div class="div1">
        <h1>Лучшие бургерные Москвы</h1>
    </div>
    <div class="div2">
            <p>Какими должны быть бургеры? Безусловно, вкусными и при этом полезными, 
                качественными, но по разумной цене. Можно ли найти в Москве блюда, которые 
                отвечают всем этим требованиям одновременно? Мы собрали список из 15 заведений, 
                продукция которых пользуется наибольшей популярностью у жителей и гостей столицы и получает массу 
                положительных отзывов.</p>
        </div>
    <footer>
        Сформировано <?php echo date('d.m.Y в H:i:s'); ?>
    </footer>
</body>
</html>
