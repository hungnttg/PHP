<?php
class DBController {
    //khai bao thong tin ket noi voi CSDL
    private $host = "localhost";
    private $user="root";
    private $pass = "";
    private $database = "blog_samples";
    //phuong thuc khoi tao
    function __construct(){
        $this->conn = $this->connectDB();//khoi tao ket noi conn csdl
        if(!empty($this->conn)){//neu da ton tai ket noi
            $this->selectDB();//chon database
        }
    }
    //ham ket noi CSDL
    function connectDB(){
        $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->database);
        return $conn;
    }
    //ham chon DB
    function selectDB(){
        mysqli_select_db($this->conn,$this->database);
    }
    //ham chay cau lenh
    function runQuery($query){
        $result = mysqli_query($this->conn,$query);
        //doc ket qua bang vong lap
        while($row=mysqli_fetch_assoc($result)){
            $restltset[] = $row;//chuyen thanh mang
        }
        if(!empty($restltset))
            return $restltset;
        
    }
    //ham lay ve tong so dong
    function numRows($query){
        $result = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);//lay ve tong so dong
        return $rowcount;
    }
    //ham them du lieu
    function insert($query){
        $insert_id="";
        $result = mysqli_query($this->conn,$query);
        if(!empty($result)){
            $insert_id = mysqli_insert_id($this->conn);//gan id
        }
        return $insert_id;
    }
    //ham thuc thi cau lenh
    function execute($query){
        $result = mysqli_query($this->conn,$query);
        return $result;
    }
}

?>