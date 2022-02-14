<?php
    header('Content-type: text/html; charset=utf-8');//在 PHP 中送回 HTML 資料前，需先傳完所有的標頭。
    
    session_start();
    require_once("allcart/cart&item.php");
    $MyCart = new Cart();
    $Myitems = $MyCart->GetAllItems();
	
	if(isset($_SESSION['Cart'])){
		echo "yes";
		
		foreach ($_SESSION['Cart'] as $key => $a){
			echo $a[id];
		}
	}else{
		echo "no";
	}
?>
<!DOCTYPE html >
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/MyCar.js"></script>
	<script type="text/javascript" src="js/prototype.js"></script>
    <title>購物車內容</title>
</head>
<body>
	<div class="wrapper">
		<div class="topnav">
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
			</div>
			<div class="topright">
				<a href="login.php">💂</button></a>

				<a href="#">🛒</a>
				<a href='personal.php'><?php 
					echo $_SESSION['account_name'];
					?>
				</a>
			</div>
		</div>
		<div class="content">
			<div class="container">
				<table width="100%" border="0" cellpadding="6" cellspacing="0" id="mytable">
					<tr>
						<td width="43%" class="shopping_w1"
							style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">商品名稱
						</td>
						<td width="21%" class="shopping_w1"
							style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">價格
						</td>
						<td width="21%" class="shopping_w1"
							style="border-right: 1px solid #d2d2d2; border-bottom: 1px solid #d2d2d2;">數量
						</td>
						<td width="15%" style="border-bottom: 1px solid #d2d2d2;">
							<table width="96" border="0" cellpadding="0" cellspacing="0">
								<tr>
									<td width="70%" align="center" valign="middle"><!--  <input name="Submit" type="submit" class="shopping_bt" style="cursor: pointer;" value="刪 除" />--></td>
									<td width="30%" align="center" valign="middle"></td>
								</tr>
							</table>
						</td>
					</tr>
					<?php

					$checkcount = 0;
					if ($Myitems)
					{
						foreach ($Myitems as $key => $Myitem)
						{
							$checkcount ++;
							$background  = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":"";
							//var_export($Myitem);
							?>
					<tr id="item<?php echo $Myitem->id;?>">
						<td <?php echo $background;?>>
							<input type="hidden"
								name="item<?php echo $Myitem->id;?>" value="<?php echo $Myitem->id; ?>">
							</input> <?php echo $Myitem->name; ?></td>
						<td <?php echo $background;?>><?php echo $Myitem->price; ?>元</td>
						<td <?php echo $background;?>>
						<select name="Quity<?php echo $Myitem->id;?>" class="shopping_down"
							onchange="amount();">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select></td>
						<td <?php echo $background;?>>
						<table width="96" border="0" cellpadding="0" cellspacing="0">
							<tr>
								<td width="70%" align="center" valign="middle"><input
									name="button<?php echo $Myitem->id; ?>" type="button"
									class="shopping_bt" style="cursor: pointer;"
									onclick="del(<?php echo $Myitem->id; ?>);" value="刪 除" /></td>
								<td width="30%" align="center" valign="middle"></td>
							</tr>
						</table>
						</td>
					</tr>
					<?php
						}
					}
					else{
						?>
					<tr>
						<td bgcolor="#e7e7e7" colspan="4">目前無任何購物資料</td>
					</tr>
					<?php
					}
					?>
				</table>
				<table  border="0" cellpadding="5" cellspacing="0" style="margin-top: 10px;">
					<tr>
						<td colspan="2" align="right">總金額：<span class="shopping_w2"
							id="amount">0</span>元</td>
					</tr>
				</table>
				<script type="text/javascript">amount();</script>
			</div>	
		</div>
	</div>
	<div class="footer">
        <h1>Director:En</h1>  
        <h1>@en4ni</h1>
    </div>
	
</body>
</html>