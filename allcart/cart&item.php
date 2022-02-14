<?php
session_start();

class CartItem{//商品資料
    var $_id;
    var $_name;
    var $_price;
    var $_quantity;
    var $_subtotal;//子項目

    function CartItem($_id,$_name,$_price,$_quantity){//建構
        $this->init();
        $this->_id = $_id;
        $this->_name = $_name;
        $this->_price = $_price;
        $this->_quantity = $_quantity;
        $this->CalcSub();
        
    }
    function init(){//商品初始化
        $_id = "";
        $_name = "";
        $_price = 0;
        $_quantity = 0;
        $_subtotal = 0;
    }
    function UpdateItem($quantity){//數量更改
        $this->_quantity = $quantity;
        $this->CalcSub();
    }
    function CalcSub(){//計算總價格
        $this->_subtotal = $this->_quantity*$this->_price;
    }
    function GetSubTotal(){//商品價格小計
        return $this->_subtotal;
    }
    function GetItem(){//商品資訊

        $item = array();
        $item['id'] = $this->_id;
        $item['name'] = $this->_name;
        $item['price'] = $this->_price;
        $item['quantity'] = $this->_quantity;
        $item['subtotal'] = $this->_subtotal;
        
        return $item;
    }
}
class Cart{//購物車資料
    var $_items = array();
    var $total = 0;

    function Cart(){//建構
        $this->init();
    }
    
    function AddItem($id,$name,$price,$quantity){//新增商品
        if(!is_object($this->items[$id])){
            $this->_items[$id] = new CartItem($id,$name,$price,$quantity);
            $this->refresh();
            $_SESSION['Cart'] = $this;
        }
    }
    function UpdateItem($id,$quantity){//更新商品數量
        if(is_object($this->_item[$id])){
            $this->items_[$id]->UpdateItem($quantity);
            $this->refresh();
            $_SESSION['Cart'] = $this;
        }
    }
    function RemoveItem($id){//刪除商品
        if(is_object($this->items[$id])){
            unset($this->items[$id]);
            $this->refresh();
            $_SESSION['Cart'] = $this;
        }   
    }
    function GetTotal(){//商品價格總計
        $this->refresh();
        return $this->total;
    }
    function GetAllItems(){//所有商品資訊
        if(count($this->_items)){//判定購物車有無商品
            return $this->_items;
        }else{
            return false;
        }
    }
    function ClearCart(){//重製購物車
        unset($this->_items);
        unset($_SESSION['Cart']);
    }
    function init(){//購物車初始化
        if(isset($_SESSION['Cart'])){//已經有購物車
            $this->_items = array();
            $this->total = 0;
            $_SESSION['Cart'] = $this;
        }else{                       //尚未有購物車
            $cart = $_SESSION['Cart'];
            $this->_items = $cart->_items;
            $this->total = $cart->total;
            $this->refresh();
        }
    }
    function refresh(){//資料變動時，重新計算總價格
        $this->total = 0;
        reset($this->_items);//回歸預設值
        foreach($this->_items as $key => $item){
            $this->total += $item->GetSubTotal;
        }
        reset($this->_items);
    }
}



?>