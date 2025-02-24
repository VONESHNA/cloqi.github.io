<?php
date_default_timezone_set('Asia/Kolkata');
class Con{
    public static $server="localhost";//live
    public static $user="user..";//live
    public static $pass="pass..";//live
    public static $db="cloqi";//live
    public static function getserver(){
        $server=trim($_SERVER['HTTP_HOST']);
        return $server;
    }
    public static function lorl(){
        $s=static::getserver();
        $t=explode('.',$s);
        count($t)>1?$r=1:$r=0;
        return $r;
    }
    public static function connect(){
        $ll=Con::lorl();//live or local
        $ll==1?$ls=static::$server:$ls="localhost";
        $ll==1?$lu=static::$user:$lu="root";
        $ll==1?$lp=static::$pass:$lp="";
        $db=static::$db;
        $con = mysqli_connect($ls, $lu, $lp, $db);
        !$con?$r= die("Connection failed: " . mysqli_connect_error()):$r=$con;
        return $r;

    }
}


// define('devtest',0);
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname='test';
// // Create connection
// $con = mysqli_connect($servername, $username, $password,$dbname);

// // Check connection
// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// else{
// //echo "Connected successfully";
// }
// print_r($_SERVER['HTTP_HOST']);
// //mysqli_query($con, "INSERT INTO `booking`( `ckin`, `ckout`, `status`) VALUES ('2023-01-03','2024-02-03','1')");
?>