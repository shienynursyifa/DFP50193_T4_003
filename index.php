<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
        $a = scandir('pic');
        foreach ($a as $gambar) {
            if (!($gambar == '.' or $gambar == '..')) {
        ?>
                <li>
                    <a href="pic/<?php echo $gambar; ?>">
                        <?php echo $gambar; ?>
                    </a>
                </li>
        <?php
            }
        }
        ?>
    </ul>
</body>

</html>