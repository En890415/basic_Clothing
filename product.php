<?php
    session_start();
    require_once("database.php");
    $_SESSION['status'] = "Product";
    /*取得資料庫資料*/ 
    $db = new datafunction();
    $result=$db->Product();
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style></style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "150px";
            document.getElementById("topnav").style.marginLeft = "100px";
        }
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
    <title>GU登入</title>
</head>
<body>
    <div class="wrapper">
    <!-- Navigator -->
    <div class="topnav">

    <!-- Collapsed Sidebar -->
    <div class="topleft">
        <button  id="sidebarcontrol" class="openbtn">☰</button>
    
        <script>
        var test=1;
            document.getElementById("sidebarcontrol").onclick = function(){
                test++;
                if (test%2==0) {
                    openNav();
                } else {
                    closeNav();
                }
            };
//        $("#sidebarcontrol").click(function() {
//        test++;
//            if (test%2==0) {
//                openNav();
//            } else {
//                closeNav();
//            }
//            })
        </script>  
    <img src="img/GU.png" width=50px align="left">
        <a  href="main.php">首頁</a>
        <a  href="#classify">商品分類</a>
        <a href="#news">最新消息</a>
        <a href="#contact">關於我們</a>
        
    </div> 
    <div class="topright">
        <a>💂</a>
        <a href="MyCart.php">🛒</a>
        <a href='personal.php'><?php 
            echo $_SESSION['account_name'];
            ?>
            </a>
<!--
        <div  style="float: right">
            <input style="cursor: pointer;border-radius: 5px" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">搜尋</button>
            </div>
-->  
        </div>
    </div>
    <!-- Collapsed Sidebar 隱藏介面 -->
    <div id="mySidebar" class="leftbar">
    <a href="#">MAN</a>
    <a href="#">WOMAN</a>
    <a href="#">KID</a>
    <a href="#">折價區</a>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <?php
                    foreach($result as $p){
                ?>
                    <div class=" col-md-6 col-lg-3 "> 
                        <div class="card">
                        <img src="<?php echo $p["img"] ?>" class="card-img-top img-fluid"> 
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $p["name"] ?></h3>
                            <h3 class="card-text"><?php echo "$" . $p["price"] ?></h3>
                            <button class="btn btn-info" 
                            onclick="location='allcart/additem.php?id=<?php echo $p['id']; ?>';">加入購物車</button>
                            </div>
                        </div>
                    </div> 
                <?php
                    }
                ?>   
            </div>
        </div>
    </div>

</div> 
    <div class="footer">
        <h1>Director:En</h1>  
        <h1>@en4ni</h1>
    </div> 
</body>
</html>
