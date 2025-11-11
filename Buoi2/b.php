<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sp{
            width: 300px;
            border-style: solid;
            margin: 15px;
            float: left;
        }

        .sp img{
            width: 300px;
        }
    </style>
</head>
<body>
    <?php
        for($i = 1; $i <= 100; $i++)
        {
            $s = "./img/images.jpeg";
            ?>

                <div class="sp">
                    <div>San pham <?php echo $i ?></div>
                    <img src="<?php echo $s ?>" alt="">
                </div>
            <?php
        }
    ?>

    
</body>
</html>