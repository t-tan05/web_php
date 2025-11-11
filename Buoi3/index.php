<?php
    const a = 10;
    define('b', 5); //khai bao hang so
    $s1 = "abc";
    $a = "x";
    $s2 = $s1 . a; //? = cộng chuỗi

    echo "s2 la: $s2";
    echo "<br>";

    // $s3 .= $s1; // $s3 = $s3 . $s1; => lỗi vì s3 chưa đc khởi tạo

    // echo $s3;
    // echo "<br>";


    //a++ // loi vi la hang so

    $x = defined('a'); //kiem tra true false
    echo $x;
    echo "<br>";

    $y = isset($s1) ? $s1:2; //kiem tra s1 co ton tai khong unset($s1) de xoa
    echo "y = $y";
    echo "<br>";


    unset($s1); //xóa biến $s1
    $c= isset($s1) ? $s1:2;
    echo "c = $c";
    echo "<br>";

    $y2 = $s1 ?? 3; //$y2 = isset($s1) ? $s1 : 3;
    echo "y2 = $y2";
    echo "<br>";


    $s2 = $s3 ?? 3; // $s2 = isset($s3) ? $s3 : 3;
    echo "s2 = $s2";
    echo "<br>";

    $n1 = 10;
    $n2 = '5';
    $n3 = $n1 + $n2; //15


    $s1 = "($n1 + $n2) = $n3"; //echo $s1; (10 + 5) = 15
    echo "n1 + n2 = n3: ".$s1; // (10 + 5) = 15
    echo "<br>";


    $s2 = '($n1 + $n2) = $n3'; //$n1 + $n2 = $n3
    echo $s2;
    echo "<br>";

    
    $s3 = "a+b =".(a+b); 
    echo $s3;
?>

<?php

    /*
        Nhóm lệnh include
        Include path;
        Include_once path;
        require path;
        require_one path;      
    */

    /*
        Biến - Hằng: Phân biệt hoa thường
        Hàm: Không phân biệt
        Hàm của người sử dụng
        funcion TênHàm(LTSố 1, TSố 2,)
    */
    echo "<br>";

    function F5(&$a, $b){
        $a = 1; 
        $b++;
        return $a + $b;
    }

    $x1 = 3;
    $x2 = 4;
    $s = F5($x1, $x2);
    echo "$s - $x1 - $x2";

    function F1(&$a, &$b, $c = 2){
        $a *= 4; //8
        $b -= 3; //3
        $c--; //1
        return $a + $b + $c;
    }

    echo "<br>";
    $n = 2;
    $m = "4" + "2";
    $s = F1($n, $m);
    echo "1.n=$n, m = $m, s = $s";

?>
