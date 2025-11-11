<?php
    if(!isset($_SESSION))
        session_start();
    $n = isset($_SESSION['dem']) ? $_SESSION['dem'] : 0;

    $n++;
    $_SESSION['dem'] = $n;
?>

<h1>Ban da truy cap trang <?php echo $n ?> lan</h1>
<a href="vd3.php">Toi VD 3</a>