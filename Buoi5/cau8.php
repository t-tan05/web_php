<?php
    $x8 = isset($_GET['x']) ? $_GET['x'] : -1;
    $y8 = $_POST['Y'] ?? -5;
    $z8 = isset($_REQUEST['z']) ? $_REQUEST['z'][0] : -6;
    echo "<br> 8. $x8 - $y8 - $z8"
?>