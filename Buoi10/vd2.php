<pre><?php
    $pdo1= new PDO("mysql:host=localhost:3306;dbname=bookstore;","root" ,"");
    $pdo1->query("set names utf8");
    $t = $_GET['key']??"";
    $sql = "select * from sach where tensach like '%$t%'";
    $stmt = $pdo1->query($sql);
    
    $n = $stmt->rowCount();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $n;


    // print_r($data);
    //$pdo1=null; //Đóng kết nối
    ?>
    <form action="vd2.php" method="get">
    Ten: <input type="text" name="key" value="<?php echo $t ?>">
    <input type="submit" value="Tim kiem">
    </form>
    <table border="1">
        <?php
            foreach($data as $item){
                ?>
                    <tr>
                        <td><?php echo $item['masach'] ?></td>
                        <td><?php echo $item['tensach'] ?></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <?php

?>