<?php
    session_start();
    require_once("database.php");
    $_SESSION['status'] = "Personal";
    /*取得資料庫資料*/ 
    $db = new datafunction();
    $result=$db->Personal($_SESSION["account_name"]);
    $row=mysqli_fetch_array($result);
    
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
        <a href="#">🛒</a>
        <a href='personal.php'><?php 
            echo $_SESSION['account_name'];
            ?>
            </a>
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
                    <form  method="post"  class="test" >
                        <a>
                        姓名:<input type="text" name="name" value=
                        "<?php echo $row["name"]; ?>" readonly>
                        </a>
                        帳號:<input type="text" name="id" value=
                        "<?php echo $row["id"]; ?>"  readonly>
                        密碼:<input  type="text" name="password" value=
                        "<?php echo $row["pw"]; ?>" readonly>
                        <br><br>
                        <?php 
                            echo $error;
                        ?>
                    </form>
                    <a href="logout.php"><button class="btn btn-primary">登出</button></a>
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
