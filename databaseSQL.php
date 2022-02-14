<?php
    //header("Content-Type:text/html; charset=utf-8");
    class databaseSQL{
        protected $servername;
        protected $username;
        protected $password;
        protected $database;
        public function __construct(){//建構連至資料庫
            $this->servername='localhost';
            $this->username='root';
            $this->password='qwer890415';
            $this->database='gu';
            
        }
    }
?>