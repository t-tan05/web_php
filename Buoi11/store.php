<?php
    include './connection.php';
    $id = $_POST['cat_id'] ?? '';
    $name = $_POST['cat_name'] ?? '';

    if($id != ''){
        //Kiem tra tung khoa tai day. Neu chua co cart_id nay moi them
        $sql = "insert into category (cat_id, cat_name)
        values(:cat_id, :cat_name) "; //cach 2'

        $stmt = $pdo->prepare($sql);
        $stmt->execute([':cat_id'=>$id, ':cat_name'=>$name]);

        //co th in thong qua ra
    };

    header('location:index.php');
?>