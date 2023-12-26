<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = "Рестораны Москвы - Рестораны"; ?></title>
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
                <li><a href=<?php echo "restaurant.php";?> class='.activ'><?php echo "Подробнее";?></a></li>
            </ul>
        </nav>
    </header>
    <div class="div1">
        <h1>Топ бургерных</h1>
    </div>
    <div class="div2">
        <?php echo '<img width="300px"height="250px" src="burger'.(date('s') % 2+1).'.jpg">';?>
        <?php echo '<img width="300px" height="250px" src="bur'.(date('s') % 2+1).'.jpg">';?>

        <?php
        $arr = array("Black Star Burger", "Farsh");
        echo '<ul>';
        for($i = 0; $i<count($arr); $i++){
        echo "<li><p>$arr[$i]</p></li>";
        }
        echo '</ul>'
        ?>

    </div>
    <footer>
        Сформировано <?php echo date('d.m.Y в H:i:s'); ?>
    </footer>
</body>
</html>
