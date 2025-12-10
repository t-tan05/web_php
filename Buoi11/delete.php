<?php
    $id = $_POST['cat_id'] ?? '';
    include './connection.php';
    if($id != ''){
        $sql = "delete from category where cat_id=?";
        $arr = [$id];
        $stmt = $pdo->prepare($sql);
        $stmt->execute($arr);
        $n = $stmt->rowCount();
        echo "Da xoa $n dong";
        echo "<a href=index.php>Tiep tuc?</a>";
    }
    else{
        header('location:index.php');
    }

?>