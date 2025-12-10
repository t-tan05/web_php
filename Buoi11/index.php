<?php
    include_once './connection.php';
    $key=$_GET['key'] ?? '';
    $sql = "select * from category where cat_name like ?";
    $arr = ["%$key%"];
    $stmt = $pdo->prepare($sql);
    $stmt->execute($arr);
    $n = $stmt->rowCount();
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    ?>
    <h1>Them danh muc</h1>
    <form action="store.php" method="post">
        ma loai: <input type="text" name="cat_id" id=""> <br>
        Ten loai: <input type="text" name="cat_name" id=""> <br>
        <input type="submit" value="Them" name="sm">
    </form>


    <form action="index.php" method="get">
        Ten: <input type="text" name="key" id=""> <input type="submit" value="Gui">

    </form>

    <table>
        <?php
            foreach($data as $item){
                ?>
                <tr>
                    <td><?php echo $item->cat_id ?></td>
                    <td><?php echo $item->cat_name ?></td>
                    <td>
                        <form action="delete.php" method="post">
                            <input type="hidden" name="cat_id" value="<?php echo $item->cat_id ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                <?php
            }
        ?>
    </table>
    <?php
?>