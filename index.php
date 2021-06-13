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
</head>

<body>
    <div class="container">

        <?php

        foreach ($albumsList as $albums) {

        ?>
            <ul>
                <li>
                    <?php echo "<td><img src = \"" . $albums["poster"] . "\" </td>" ?> <br>
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
</body>

</html>