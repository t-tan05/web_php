<?php
    $m = 2;
    Include 'a.html'; //Đóng file php lại và mở file html và xuất file
    Include 'a.php';
    echo "$m = $n"; //$n = 3
    echo "<br>";
    Include 'a.php'; // n đã tồn tại nên n = n + 2
    echo "<br>";
    echo "$m + $n"; //$n = 5
    Include_once 'a.php'; //vì đã include rồi nên không include nữa
    echo "<br>";
    echo $n; //n = 5
    require 'a.php'; //bắt buộc phải có file a.php nếu không có sẽ báo lỗi và dừng chương trình
    echo "<br>";
    echo $n;
?>