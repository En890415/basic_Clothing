<?php
    session_start();
    require_once("database.php");
    $_SESSION['status'] = "Logout";
    /*取得資料庫資料*/ 
    $db = new datafunction();
    $result=$db->Logout();
    echo $result;
?>
