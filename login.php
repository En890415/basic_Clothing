<?php
    session_start();
    require_once("database.php");
    $_SESSION['status'] = "Login";
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
        <a href="login.php">💂</a>
        <a href="#">🛒</a>
        <a href='#'><?php 
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
                <div class=fform>
                <h2 align="center">會員登入</h2>
                <a href="regist.php" style="color:red">尚未註冊</a>
                    <form  method="post"  class="test" >
                        帳號:<input type="text" name="id" value=
                        "<?php echo $id ?>"  required autofocus>
                        密碼:<input  type="text" name="password" value=
                        "<?php echo $password ?>"   required autofocus>
                        <br><br>
                        <input  type="submit" value="送出">
                    </form>
                </div>
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
