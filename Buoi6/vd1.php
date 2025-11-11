<form action="" method="post", enctype="multipart/form-data">
    file <input type='file' name='x' id=""> <br>
    <input type="submit" value="upload">
</form>

<?php
    if(isset($_FILES['x'])){
        $f = $_FILES['x'];
        if($f['error'] == 0) //khong loi
        {
            $ten = $f['name'];
            $loai = $f['type'];
            $arr1 = ['image/jpeg', 'image/png'];
            echo "Loai = $loai";
            if(in_array($loai, $arr1)){
                $tam = $f['tmp_name'];
                move_uploaded_file($tam, "hinh/$ten");
                echo "<img src='hinh/$ten'>";
            }
            else
                echo "Khong phai file hinh";
        }
        else
            echo 'loi.....'.$f['error'];
    }

?>