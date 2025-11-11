<?php
    $u = $_POST['u'] ?? '';
    $p = $_POST['p'] ?? '';
    if($u == 'admin' && $p == '123456'){
        if(!isset($_SESSION)) session_start();
        $_SESSION['admin'] = $u;
        header('location:index.php'); exit;
    }
    header('location:login.html');
?>