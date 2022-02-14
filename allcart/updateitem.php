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
        $Cart->UpdateItem($id,$qty);
    }

?>