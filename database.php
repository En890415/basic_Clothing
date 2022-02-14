<?php
    session_start();
    require_once("datafunction.php");
    $status = $_SESSION['status'];
    $db = new datafunction();

    if($db->Dbconnect()){
            if(isset($status)){
                switch ($status) {
                    case "Regist":
                        if(isset($_POST['id']) && isset($_POST['password']) && isset($_POST['name'])){
                            return $db->Regist($_POST['id'],$_POST['password'],$_POST['name']);
                        }
                        break;
                    case "Login":
                        if(isset($_POST['id']) && isset($_POST['password'])){
                            return $db->Login($_POST['id'],$_POST['password']);
                        }
                        break;
                    case "Logout":
                        return $db->Logout();   
                        break;
                    case "Personal":
                        if(isset($_SESSION['account_name'])){
                            return $db->Personal($_SESSION['account_name']);
                        }
                        break;
                    case "Product":
                        return $db->Product();   
                        break;
                    default:
                        echo "wtf";
                        break;
                }
            }
    }  
?>