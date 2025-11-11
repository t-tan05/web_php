<?php

    /*
        Mảng

        Cú pháp in ra mảng
        print_r(mảng);
        var_dump(mảng);

        Đếm số phần tử trong mảng
        count(mảng); 

        ---Hàm trong php không phân biệt chữ hoa chữ thường---

    */
    echo "<pre>";
    $m1 = array();
    var_dump($m1);
    print_r($m1);
    echo "<br>";
    $m2 = [];

    var_dump($m2);
    echo "<br>";

    $m3 = array(1,3);

    print_r($m3);
    echo "<br>";

    $m4 = [1,3];
    var_dump($m4);
    echo "<br>";

    $m5 = array('x'=>1, 'y'=>3);
    var_dump($m5);
    echo "<br>";
    print_r($m5);
    echo "<br>";

    echo Count($m5);
    echo "<br>";


    $m6 = ['x'=>1, 'y'=>3];
    echo count($m6);
    echo "<br>";

    $m7 = [0 => 1, 1 => 3]; //giống nhau với $m4 và $m3

    //Truy xuất phần tử trong mảng
    $x = $m6['y']; //x = 3

    $y = $m6['z']??0 ; //Nếu z không tồn tại thì gán y = 0

    //Xóa
    $i = 'x';
    unset($m6[$i]);
    echo count($m6); //Còn 1 phần tử
    echo "<br>";

    //Thêm, sửa
    $m5['z'] = 10; //Lấy chưa có ptu z thì sẽ thêm pty mới vào
    array_push($m5, 20);
    $m5['y'] = 5; //Nếu có ptu y thì sẽ gán đè giá trị mới vào
    print_r($m5);
    echo "<br>";

    //Duyệt mảng
    for($i = 0; $i < count($m4); $i++){
        echo "ptu $i: = {$m4[$i]}"; //{$m4[$i]} bao ptu này thì sẽ hiểu là ptu mảng
        echo "<br>";
    }

    //foreach dùng cho mọi mảng
    foreach($m5 as $k=>$v){ //k sẽ là index, v là value, nếu sài foreach($m5 as $v) thì v sẽ là value
        echo "ptu $k= $v";
        echo "<br>";
    }

    $m1 = [1,3,6];
    $tong = 0;
    for($i = 0; $i < count($m1); $i++){
        if($m1[$i] % 2 == 0){
            $tong += $m1[$i];
        }

    }

    echo "Tổng các số chẵn trong mảng = $tong";
    $tong = 0;
    foreach($m1 as $chiso=>$giatri){
        if($giatri % 2 ){
            $tong += $giatri + $chiso;
        }
    }
    echo "<hr>Tong 2 = $tong";


    //Mảng 2 chiều
    $m1 = [[1,3,5],
        [2,4]];


    $x = $m1[0][2]; //5

    $r1 = ['x'=>1, 'y'=>2];
    $r2 = ['x'=>3, 'y'=>6];
    $m2 = [$r1, $r2];
    $y = $m2[1]['y']; //6

    $m3 = [['id'=>1, 'name'=>'sp1', "price"=>2],
        ['id'=>2, "name"=>"sp2", "price"=>8]];


?>
<table border='1'>
    <tr>
        <th>STT</th>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
    foreach($m3 as $key=>$value)
    {
        ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['price'] ?></td>
        </tr>
        <?php

    }
    ?>
</table>