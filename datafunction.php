<?php
session_start();
class datafunction /* extends databaseSQL*/ {//子繼承父
    // protected $link;
    // protected $sql;
    // protected $query;
    // protected $servername;
    // protected $username;
    // protected $password;
    // protected $database;
    // public function __construct(){//子類別
    //     $dbc = new databaseSQL();
    //     $this->servername=$dbc->servername;
    //     $this->username=$dbc->username;
    //     $this->password=$dbc->password;
    //     $this->database=$dbc->database;
    // }    
    function Dbconnect(){
        $link = mysqli_connect('localhost','root','qwer890415','gu');
        if(!$link){
            echo "<p>連接失敗</p>". mysqli_connect_error();
        }
        mysqli_query($link,"SET NAMES UTF8");
        return $link;
        /*
        
        $this->link=mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        return $this->link;
        */
    }
    function Regist($id,$password,$name){//註冊
        $link = mysqli_connect('localhost','root','qwer890415','gu');
        mysqli_query($link,"SET NAMES UTF8");
        $sql = "INSERT INTO user( id, pw, name) VALUES ('".$id."','".$password."','".$name."')";
        if (mysqli_query($link, $sql)) {
            echo "<script type='text/javascript'>alert('註冊成功');</script>";
            header("Location: login.php");
        } 
    }
    function Login($id,$password) {//登入
        $link = mysqli_connect('localhost','root','qwer890415','gu');
        mysqli_query($link,"SET NAMES UTF8");
        $sql="SELECT * FROM user WHERE id='$id' ";
        $result=mysqli_query($link,$sql);
        
        while($row=mysqli_fetch_array($result)){//帳密正確
            if($row["pw"]==$password){
                $_SESSION['account_name'] = $row["name"];
                header("Location: main.php");
            }
        }
        if(mysqli_num_rows($result)==0){//帳密不正確
            //echo "無此帳號";
            echo "<script type='text/javascript'>alert('此帳號未註冊');</script>";
    
        }else{
            //echo "錯誤密碼";
            echo "<script type='text/javascript'>alert('密碼錯誤');</script>";
        }   
    }
    function Logout(){//登出
        unset($_SESSION['account_name']);
        header("Location: main.php") ;
    }
    function Personal($name){//資料庫個人資料
        $link = mysqli_connect('localhost','root','qwer890415','gu');
        $sql = " SELECT * FROM user WHERE name='$name' ";
        mysqli_query($link,"SET NAMES UTF8");
        $result=mysqli_query($link,$sql);
        return $result;

        // $row=mysqli_fetch_array($result);
        // return $row;
        
    }
    function Product(){//資料庫商品資料
        $link = mysqli_connect('localhost','root','qwer890415','gu');
        $sql = " SELECT * FROM product ";
        mysqli_query($link,"SET NAMES UTF8");
        $result=mysqli_query($link,$sql);
        return $result;
    }
}

?>