<?php
    $f = $_FILES['x'];
    $ten = $f['name']; //tenfile
    $loi = $f['error']; //Ma loi 0 -> 4
    $loai = $f['type']; //Loại file
    $tam = $f['tmp_name']; //file tam
    $n = $f['size']; //kich thuoc file
    move_uploaded_file($nguon, $dich) //trả về true: thành công, false: không thành công
?>

