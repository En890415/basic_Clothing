<?php
    header('Content-type: text/html; charset=utf-8');
    
    session_start();
    require_once("cart&item.php");
    $Cart = new Cart();

    $id = $_GET['id'];
    $qty = $_GET['quantity'];
    if(!is_numeric($qty)){
        $qty =  1;
    }
    if(isset($id)){
        $Cart->AddItem($id,"產品名稱",100,$qty);
    }
    $refer = $_SERVER['HTTP_REFERER'];//獲取上一頁網址
    if(strlen(trim($refer)) == 0){
        $refer = "product.php";
    }
    
    header("Location:$refer");


?>