<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title = "Рестораны Москвы - " . $restaurant['name']; ?></title>
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
    <main>
        <h1>Описание ресторанов</h1>
        <h2>Black Star Burger</h2>
        <p>Black Star Burger – народный ресторан, создающий продукт премиального 
            качества по доступной цене. Уникальная авторская рецептура, специальная 
            система прожарки котлет и выпекания булочек, позволяет добиться неповторимого вкуса. 
            На данный момент открыто больше 50 ресторанов на территории страны, и более 15 за ее пределами.
        </p>
        <?php
        $arr = array("бургер", "хот-дог", "салат", "закуска");
        echo '<ul>';
        for($i = 0; $i<count($arr); $i++){
        echo "<li><p>$arr[$i]</p></li>";
        }
        echo '</ul>'
        ?>

        <h2>Farsh</h2>
        <p>Farsh - это ресторан в Москве, специализирующийся на бургерах и стейках с 
            различными начинками. В интерьере присутствуют элементы лофт-стиля, атмосфера 
            непринужденная и дружелюбная.
        </p>
        <?php
        $arr = array("бургер", "хот-дог", "салат", "закуска");
        echo '<ul>';
        for($i = 0; $i<count($arr); $i++){
        echo "<li><p>$arr[$i]</p></li>";
        }
        echo '</ul>'
        ?>
    </main>
    <footer>
        Сформировано <?php echo date('d.m.Y в H:i:s'); ?>
    </footer>
</body>
</html>

