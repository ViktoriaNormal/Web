<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Terms</title>
    <link rel="stylesheet" href="style_terms.css">
</head>

        <body>
        <header>
        <nav>
            <ul>
                <li><a href=<?php echo "images.php";?> class='active'><?php echo "Изображения городов";?></a></li>
                <li><a href=<?php echo "terms.php";?> class='active'><?php echo "Термины и определения";?></a></li>
            </ul>
        </nav>
    </header>
            <div class="box">
                <table class="table">
                    <tr>
                        <th>Term</th>
                        <th>Description</th>
                    </tr>

                    <?php 
                    include "connection.php";
                    if($mysql!=null){
                        $result = mysqli_query($mysql, "SELECT * FROM `terms`");
                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row['term']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                </table>
            </div>
            <footer>
        Сформировано <?php echo date('d.m.Y в H:i:s'); ?>
    </footer> 
        </body>

