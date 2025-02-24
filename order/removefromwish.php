<?php
session_start();
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';
$con = Con::connect();

//if(isset($_SESSION['customer'])){'save';
  $wishid = Dbops::getinput($_GET["wishid"]);
  $data   =   ['con'=>$con, 'delete'=>$wishid, ];

   if(Dbops::deletewish($data)>0)
   {
       echo "<script>
      alert('Success, Removed this  product from Wishlist');window.location='../wishlist'
       </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='../wishlist'</script>";
  }

//}else{'keep in session only';}
?>