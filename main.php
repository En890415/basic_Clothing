<?php
  session_start();
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
    
    <title>GU_shop</title>
</head>
<body>
  <div class="wrapper">
    <!-- Navigator -->
    <div class="topnav">
<!--
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
-->
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
          <!-- <div class="ddropdown">
            <a class="dropbtn">商品分類</a>
            <div class="dropdown-content">
              <a href="product.php">鞋子/配件</a>
            </div>
          </div>  -->
          <a href="#news">最新消息</a>
          <a href="#contact">關於我們</a>
          <a href="product.php">鞋子/配件</a>
          
      
      <div class="topright">
          <a href="login.php">💂</a>

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
    <!-- Carousel -->
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Inner -->
        <div class="carousel-inner" role="listbox">
            
          <div class="item active">
            <img src="img/main01.jpg" >
            <div class="carousel-caption">
              <h3>圖片1</h3>
              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
            </div>
          </div>

          <div class="item">
            <img src="img/main02.jpg" >
            <div class="carousel-caption">
              <h3>圖片2</h3>
              <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
            </div>
          </div>
    
          <div class="item">
            <img src="img/main03.jpg" >
            <div class="carousel-caption">
              <h3>圖片3</h3>
              <p>Beautiful flowers in Kolymbari, Crete.</p>
            </div>
          </div>

          <div class="item">
            <img src="img/main04.jpg" >
            <div class="carousel-caption">
              <h3>圖片4</h3>
              <p>Beautiful flowers in Kolymbari, Crete.</p>
            </div>
          </div>
  
        </div>
        <!-- Control -->
<!--
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">前</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">後</span>
        </a>
-->
    </div>
</div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3 "> 
          <div class="card">
            <img src="img/clothes_01.jpg" class="card-img-top img-fluid"> 
            <div class="card-body">
              <h2 class="card-title">滿千送百</h2>
              <a class="card-text">春夏秋冬
              </a>
              <button class="btn btn-info">即刻購買</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 "> 
            <div class="card">
              <img src="img/clothes_02.jpg" class="card-img-top img-fluid"> 
              <div class="card-body">
                <h2 class="card-title">滿千送百</h2>
                <a class="card-text">春夏秋冬
                </a>
                    <button class="btn btn-info">即刻購買</button>
                </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3 "> 
            <div class="card">
              <img src="img/clothes_03.jpg" class="card-img-top img-fluid"> 
              <div class="card-body">
                <h2 class="card-title">滿千送百</h2>
                  <a class="card-text">春夏秋冬
                  </a>
                  <button class="btn btn-info">即刻購買</button>
                </div>
            </div>
          </div> 
          <div class="col-sm-12 col-md-6 col-lg-3 "> 
            <div class="card">
              <img src="img/clothes_04.jpg" class="card-img-top img-fluid"> 
              <div class="card-body">
                <h2 class="card-title">滿千送百</h2>
                    <a class="card-text">春夏秋冬
                    </a>
                    <button class="btn btn-info">即刻購買</button>
                </div>
            </div>
          </div >  
      </div>
      <div class="row">
          <div class="col-sm-12  col-lg-6"></div>
          <div >
              <img src="img/banner.jpg">
          </div>
      </div>   
    </div>  
    </div>  
  </div>
  <div class="footer">
        <h1>Director:En</h1>  
        <h1>@en4ni</h1>
    </div>
    </div>
    </body>
    
</html>