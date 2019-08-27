<?php 
class DBconnector{
    var $servername = "ec2-75-101-133-29.compute-1.amazonaws.com";
    var $username = "zrmlzbbiyxtrnw";
    var $password = "5f23eca7d1023cf0224f70e284e4a7b852fac51fed6e6c0c44a4a9b614791165";
    var $dbname = "d9ud3u4p5pk70t";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
			$conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>