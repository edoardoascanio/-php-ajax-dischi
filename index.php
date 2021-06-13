<?php

include_once "./partials/template/header.php";

require "./db/albums.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/dist/style.css">
</head>

<body>
    <div class="container">

        <div class="albums-container">
            <?php

            foreach ($albumsList as $albums) {

            ?>
                <ul>
                    <li>
                       <div class="album"> <?php echo "<td><img src = \"" . $albums["poster"] . "\" </td>" ?></div>
                        <strong><?php echo $albums["title"] ?></strong>
                        <p><?php echo $albums["author"] ?></p>
                        <p><?php echo $albums["genre"] ?></p>
                        <p><?php echo $albums["year"] ?></p>
                    </li>
                </ul>

            <?php
            }
            ?>
        </div>

    </div>
</body>

</html>