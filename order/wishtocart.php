<?php
session_start();
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';
$con = Con::connect();
$wishid=Dbops::getint($_GET['wishid']);
$data=['con'=>$con, 'wishid'=>$wishid];
$wishnf=Dbops::getWishId($data);
$wishnf['n']>0?$wish=$wishnf['f']:$wish=[];


//if(isset($_SESSION['customer'])){'save';
  $customer = $_SESSION['userid'];//$_SESSION['customer'];
  $product = Dbops::getinput($wish["product"]);
  $quantity = Dbops::getint($wish["quantity"]);
  $size = Dbops::getinput($wish["size"]);
  $created =dateTime;
  $data   =   ['con'=>$con,'customer'=>$customer, 'product'=>$product,'size'=>$size, 'quantity'=>$quantity, 'created'=>$created];

     if(Dbops::saveCart($data)>0)
   {
   	$data   =   ['con'=>$con,'delete'=>$wishid];
   	Dbops::deleteWish($data);
        echo "<script>
       alert('Success, Added product to cart');window.location='../wishlist'
        </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='../wishlist'</script>";
  }



//}else{'keep in session only';}
?>