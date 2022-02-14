<?php
    header('Content-type: text/html; charset=utf-8');
    
    session_start();
    require_once("cart&item.php");
    $Cart = new Cart();

    $id = $_GET['id'];
    if(isset($id)){
        $Cart->RemoveItem($id);
    }

?>
