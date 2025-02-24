<?php
session_start();
require_once '../db/index.php';
require_once '../lib/dbops.php';
require_once '../lib/constants.php';
require_once '../lib/helper.php';
$con = Con::connect();

if(isset($_REQUEST)){
     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     $landmark=$_POST['landmark'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $pincode=$_POST['pincode'];
}
if(isset($_SESSION['customer']))
{
  $customer=$_SESSION['userid'];
$data=['con'=>$con, 'customer'=>$customer];


  $cartnf=Dbops::getCartBycustomer($data);
  $cartnf['n']>0?$cart=$cartnf['f']:$cart=[];


}
//if(isset($_SESSION['customer'])){'save';
$customer = $_SESSION['userid'];//$_SESSION['customer'];

$created =dateTime;

$billtokenfn=Dbops::getnewbilltoken($con);
$billtokenfn['n']>0 && !empty($billtokenfn['f'])?$billtoken=$billtokenfn['f']:'';




$subtotal=0;

          foreach($cart as $K=>$v){
              $product=$v['product'];
  $productName=$v['productname'];
  $size=$v['size'];
  $sellingprice=$v['sellingprice'];
  $quantity=$v['quantity'];
 $total=$quantity*$sellingprice;
 $subtotal+=$total;
 $shipping=0;
 $grandtotal=$shipping+$subtotal;
 $data   =   ['con'=>$con,'customer'=>$customer, 'product'=>$product,'size'=>$size, 'quantity'=>$quantity, 'billtoken'=>$billtoken, 'created'=>$created];      
 $saveorder=Dbops::saveOrder($data);

             }

     if($saveorder>0)
   {

      $data   =   ['con'=>$con,'customer'=>$customer, 'firstname'=>$firstname,'lastname'=>$lastname, 'email'=>$email, 'contact'=>$contact, 'landmark'=>$landmark, 'address'=>$address, 'city'=>$city, 'pincode'=>$pincode, 'billtoken'=>$billtoken, 'created'=>$created];

    Dbops::saveBillingDetail($data);
    $data   =   ['con'=>$con,'delete'=>$customer];

    Dbops::deleteCartByCustomer($data);
         echo "<script>
        alert('Success, Your order placed');window.location='../'
        </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='../checkout'</script>";
  }



//}else{'keep in session only';}
?>