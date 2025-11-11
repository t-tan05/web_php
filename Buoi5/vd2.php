<a href="vd2.html">Trang html</a>
<pre>
<?php
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    print_r($_FILES);
    $filename = $_FILES['h']['name'];
    $fileTemp = $_FILES['h']['tmp_name'];
    $filesave = "img/$filename";
    move_uploaded_file($fileTemp, $filesave);
    echo "<img src='$filesave'>";
?>