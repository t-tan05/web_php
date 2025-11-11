<?php

    /*
        --Mảng

    */

    //Tạo
    $m = ['x'=> 1, 'y'=> 2];

    //Truy xuất
    $n = $m['x'];
    $m['z'] = 5;
    foreach($m as $a=>$b){
        echo "{$a} - {$b}";
    }

    //Kiểm tra phần tử, xóa
    isset($m['x1']);
    unset($m['x']);

    /*
        Mảng 2 chiều
    */

    $m2 = ['x'=>[2,4,6],
            'y'=> [1,3,5]];

    $n2 = $m2['y'][2]; //5

    /*
        Mảng có sẵn trong php (Toàn cục)
        $_GET           {   form: get
        $_REQUEST       }
        $_POST                                      { form: post
        $_FILES //Dành cho form đính kèm file        } + enctype="multipart/form-data"
        $_SESSION   Thông tin phiên làm việc    Ung dung: gio hang, 
                                                quản lý đăng nhập => admin ->index.php, add_product.php, login.html->login.php,
                                                logout.php
                                        
        $_COOKIE
        $_SERVER    Thông tin server / request

        a.php?a=1&b=2&c=&d=abc => QueryString
        $_GET['a'] -> 1
            ['b'] -> 2
            ['c'] -> ""
            ['d'] -> "abc"

    */

    $x1 = $_GET['a']; //7
    $x2 = $_GET['e']; //Error
    $x3 = $_GET['e'] ?? 0;//Trả về 0
    $x4 = isset($_GET['e']) ? $_GET['e'] : 0;
?>