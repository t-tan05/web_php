<pre><?php
    $s = $_SERVER['SCRIPT_FILENAME'];
    echo "File nay luu tai: $s \n";
    if(isset($_SERVER['QUERY_STRING'])){
        echo 'Query_String = '. $_SERVER['QUERY_STRING'];
    }
    print_r($_SERVER);
    echo "POST";
    print_r($_POST['n']);
?>