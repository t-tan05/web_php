<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <style>
        body {
            background: #f4f6fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 300px;
            margin: 40px auto;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 32px 24px;
        }
        h2 {
            color: #2d3e50;
            margin-bottom: 16px;
            font-size: 20px;
        }
        .info {
            margin-bottom: 24px;
        }
        .info img {
            display: block;
            max-width: 300px;
            object-fit: cover;
            border: 2px solid #1976d2;
            background: #eee;
        }
        a {
            display: inline-block;
            margin-right: 16px;
            color: #1976d2;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            $name = "Trần Thanh Tân";
            $mssv = "DH52201412";
            $img = "./img/avatar.jpg";
        ?>
        <div class="info">
            <img src="<?php echo $img ?>" alt="">
            <h2>Họ tên: <?php echo $name ?></h2>
            <h2>MSSV: <?php echo $mssv ?></h2>
        </div>
        <a href="./a.php">Bài tập a</a>
        <a href="./b.php">Bài tập b</a>
        <a href="../MVC2/index.php">Bài tập MVC</a>
    </div>
</body>
</html>