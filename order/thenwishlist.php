<?php
session_start();
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';
$con = Con::connect();

//if(isset($_SESSION['customer'])){'save';
  $customer = $_SESSION['customer'];
  $product = Dbops::getinput($_GET["product"]);
  $quantity = Dbops::getint($_GET["quantity"]);
  $size = Dbops::getinput($_GET["size"]);
  $created =dateTime;
  $data   =   ['con'=>$con,'customer'=>$customer, 'product'=>$product,'size'=>$size, 'quantity'=>$quantity, 'created'=>$created];

     if(Dbops::saveCart($data)>0)
   {
      //  echo "<script>
      // alert('Success, Added product to cart');window.location='../product?product=$product'
      //  </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='../product?product=$product'</script>";
  }



//}else{'keep in session only';}
?>