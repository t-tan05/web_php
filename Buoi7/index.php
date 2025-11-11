<pre><?php
    $s = $_SERVER['SCRIPT_FILENAME'];
    echo "File này lưu tại: $s \n";
    if(isset($_SERVER['QUERY_STRING'])){
        echo 'Query_String = '. $_SERVER['QUERY_STRING'];
    }
    print_r($_SERVER);
?>