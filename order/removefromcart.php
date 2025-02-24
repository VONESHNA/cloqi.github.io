<?php
session_start();
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';
$con = Con::connect();

//if(isset($_SESSION['customer'])){'save';
  $cartid = Dbops::getinput($_GET["cartid"]);
  $data   =   ['con'=>$con, 'delete'=>$cartid, ];

   if(Dbops::deleteCart($data)>0)
   {
       echo "<script>
      alert('Success, Removed this  product from cart');window.location='../cartlist'
       </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='../product?product=$product'</script>";
  }

//}else{'keep in session only';}
?>