<?php
    header('Content-type: text/html; charset=utf-8');
    
    session_start();
    require_once("cart&item.php");
    $MyCart = new Cart();
    $MyItems = $myCart->GetAllItems();

    foreach( $MyItems as $key => $MyItem){
        $qty = $_POST['Quity'.$key];

        $MyItem->UpdateItem($qty);
    }
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
    <title>購物車列表</title>
</head>
<body>

    <div class="shopping">
        <div class="shopping_body">
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
                </tr>
                <?php
                $checkcount = 0;
                if ($MyItems){
                    foreach ($MyItems as $key => $MyItem){
                        $checkcount ++;
                        $background  = $checkcount%2==1?"bgcolor=\"#e7e7e7\"":"";
                ?>
                <tr id="item_<?php echo $MyItem->id;?>">
                    <td <?php echo $background;  ?>>
                        <input type="hidden"name="item
                            <?php echo $MyItem->id; ?>"
                            value="<?php echo $MyItem->id;?>">
                        </input> <?php echo $MyItem->name; ?>
                    </td>
                    <td <?php echo $background;?>>
                        <?php echo $MyItem->price; ?>元
                    </td>
                    <td <?php echo $background;?>>
                        <?php echo $MyItem->quantity;?>
                    </td>
                </tr>
                <?php
                    }
                }else{
                ?>
                <tr>
                    <td bgcolor="#e7e7e7" colspan="4">目前無任何購物資料</td>
                </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>

    
</body>
</html>