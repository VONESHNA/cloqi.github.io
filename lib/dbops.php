<?php
    
    class Dbops{
        private static  $membertbl='members';
        private static $categorytbl='category';
        private static $productbl='product';
        private static $cartTbl='carts';
        private static $wishtbl='wishes';
        private static $ordertbl='order';
        public static function getint($i){
            $i=trim($i);
            $i=(int)$i;
            return $i;
        }
        public static function getinput($i){
            $i=addslashes(trim($i));
            return $i;
        }
        public static function saveMember($data){
            $con            =   $data['con'];
            $fullname       =   $data['fullname'];
            $email          =   $data['email'];
            $mobno          =   $data['mobno'];
            $created        =   $data['created'];
            $type           =   $data['type'];
            $mobno          =   $data['mobno'];
            $password       =   $data['password'];
            $tbl=self::$membertbl;
            $fields='`fullname`, `password`, `email`, `type`, `created`';
            $rows='"'.$fullname.'","'.$password.'","'.$email.'","'.$type.'","'.$created.'"';
            $q="INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            $mq=mysqli_query($con, $q);
            $lastin=mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }
        public static function update_bb($con,$updatedata, $edit){$u =  $updatedata;
            $n           =  $u[0];
            $dateb       =  $u[1];
            $to          =  $u[2];
            $from        =  $u[3];
            $amount      =  $u[4];
            $mobno       =  $u[5];

            $tbl=static::$bbtbl;
            $where="WHERE id='".$edit."'";
            $r=mysqli_query($con,"UPDATE  $tbl SET `bdate`='".$dateb."', `name`='".$n."' , `mobno`='".$mobno."', 
                `dfromy`='".$from."', `dtoy`='".$to."' $where");
            return $r;
        }
        public static function delbb($con, $id){
            $id=static::getint($id);
            $tbl=static::$bbtbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE id="'.$id.'"');
            return $r;
        }
        
        public static function loginMember($data){
            $con            =   $data['con'];
            $mobnoemail     =   $data['mobnoemail'];
            $password       =   $data['password'];
            $tbl=static::$membertbl;
            $q="SELECT `fullname`, `type`, `email`, `mobno`, `id` FROM ".$tbl." WHERE `password`='".$password."' AND (`mobno`='".$mobnoemail."' OR `email`='".$mobnoemail."')";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            $n>0?$f=mysqli_fetch_assoc($qr):$f='';
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

        public static function getMember(){
            $tbl=static::$membertbl;
            $q="SELECT * FROM ".$tbl." WHERE 1";
            $n=mysqli_num_rows($q);
            return $n;
        }

        public static function getCustomers($con){
            $tbl=self::$membertbl;
            $q="SELECT * FROM ".$tbl." WHERE type=0 ORDER BY id DESC ";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


        public static function saveCategory($data){
            $con            =   $data['con'];
            $name           =   $data['name'];
            $img            =   $data['img'];
            $description    =   $data['description'];
            $created        =   $data['created'];
            $tbl            =   self::$categorytbl;
            $fields         =   '`name`,`img`,`description`, `created`';
            $rows           =   '"'.$name.'", "'.$img.'", "'.$description.'","'.$created.'"';
            $q              =   "INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            $mq             =   mysqli_query($con, $q);
            $lastin         =   mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }

        public static function updateCategory($data){
            $con            =   $data['con'];
            $edit           =   $data['edit'];
            $name           =   $data['name'];
            $img            =   $data['img'];
            $description    =   $data['description'];
            $updated        =   $data['created'];
            $tbl            =   self::$categorytbl;
            $where="WHERE id='".$edit."'";
            $r=mysqli_query($con,"UPDATE  $tbl SET  `name`='".$name."' ,  `img`='".$img."' , `description`='".$description."', `updated`='".$updated."' $where");
            return $r;

        }

        public static function deleteCategory($data){
            $con            =   $data['con'];
            $delete         =   static::getint($data['delete']);
            $tbl            =   self::$categorytbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE id="'.$delete.'"');
            return $r;
        }

        public static function deleteProduct($data){
            $con            =   $data['con'];
            $delete         =   static::getint($data['delete']);
            $tbl            =   self::$productbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE id="'.$delete.'"');
            return $r;
        }




        public static function getCategory($con){
            $tbl            =   self::$categorytbl;
            $q="SELECT * FROM ".$tbl." ORDER BY id DESC";
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

        public static function getCategoryById($data){
            $con            =   $data['con'];
            $id             =   $data['edit'];
            $tbl            =   self::$categorytbl;
            $q="SELECT * FROM ".$tbl." WHERE id='".$id."'";
           
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            $n>0?$f=mysqli_fetch_assoc($qr):$f='';
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


        public static function getProductByCategoryId($data){
            $con            =   $data['con'];
            $catid          =   $data['catid'];
            $tbl            =   self::$productbl;
            $categorytbl    =   self::$categorytbl;

            $q="SELECT product.*,  category.name AS categoryname, category.img AS categoryimage FROM ".$tbl." JOIN  ".$categorytbl." ON ".$tbl.".category=".$categorytbl.".id WHERE ".$tbl.".category=$catid.";
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            $f=mysqli_fetch_assoc($qr);
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


  public static function getProductListByCategoryId($data){
            $con            =   $data['con'];
            $catid          =   $data['catid'];
            $tbl            =   self::$productbl;
            $categorytbl    =   self::$categorytbl;

            $q="SELECT product.*,  category.name AS categoryname FROM ".$tbl." JOIN  ".$categorytbl." ON ".$tbl.".category=".$categorytbl.".id WHERE ".$tbl.".category=$catid.";
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr))
            {
                $f[]=$temp;
            }    
            }else{
                $f=[];
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }



                public static function saveProduct($data){
            $con               =   $data['con'];
            $category          =   $data['category'];
            $name              =   $data['name'];
            $description       =   $data['description'];
            $image_1           =   $data['image1'];
            $image_2           =   $data['image2'];
            $image_3           =   $data['image3'];
            $image_4           =   $data['image4'];
            $image_5           =   $data['image5'];
            $image_6           =   $data['image6'];
            $actualprice=$data['actualprice']; 
            $sellingprice=$data['sellingprice'];
            $xs=$data['xs']; $s=$data['s']; 
            $m=$data['m'];
            $l=$data['l']; 
            $xl=$data['xl']; 
            $xxl=$data['xxl'];
            $xxxl=$data['xxxl'];
            $created           =   $data['created'];
            $tbl               =   self::$productbl;
            $fields            =   '`category`,`name`,`description`,`actualprice`,`sellingprice`,`xs`,`s`,`m`,`l`,`xl`,`xxl`,`xxxl`,`image_1`,`image_2`,`image_3`,`image_4`,`image_5`,`image_6`, `created`';
            $rows              =   '"'.$category.'","'.$name.'","'.$description.'", "'.$actualprice.'", "'.$sellingprice.'",  "'.$xs.'",  "'.$s.'",  "'.$m.'",  "'.$l.'",  "'.$xl.'",  "'.$xxl.'",  "'.$xxxl.'", "'.$image_1.'","'.$image_2.'","'.$image_3.'","'.$image_4.'","'.$image_5.'","'.$image_6.'","'.$created.'"';
            $q                 =   "INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            $mq                =   mysqli_query($con, $q);
            $lastin            =   mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }

          public static function updateProduct($data){
            $con               =   $data['con'];
            $edit              =   $data['edit'];
            $name              =   $data['name'];
            $description    =   $data['description'];
            $category          =   $data['category'];
            $updated           =   $data['created'];
            $image_1           =   $data['image1'];
            $image_2           =   $data['image2'];
            $image_3           =   $data['image3'];
            $image_4           =   $data['image4'];
            $image_5           =   $data['image5'];
            $image_6           =   $data['image6'];
            $upated            =   $data['updated'];
            $actualprice=$data['actualprice']; 
            $sellingprice=$data['sellingprice'];
            $xs=$data['xs']; $s=$data['s']; 
            $m=$data['m'];
            $l=$data['l']; 
            $xl=$data['xl']; 
            $xxl=$data['xxl'];
            $xxxl=$data['xxxl'];
            $tbl               =   self::$productbl;
            $where="WHERE id='".$edit."'";
            $r=mysqli_query($con,"UPDATE  $tbl SET  `name`='".$name."' ,  `description`='".$description."' , `category`='".$category."', `actualprice`='".$actualprice."', `sellingprice`='".$sellingprice."', `xs`='".$xs."' , `s`='".$s."' , `m`='".$m."' , `l`='".$l."' , `xl`='".$xl."' , `xxl`='".$xxl."',  `xxxl`='".$xxxl."',  `updated`='".$updated."' $where");

            !empty($image_1)?$r=mysqli_query($con,"UPDATE  $tbl SET `image_1`='".$image_1."'  , `updated`='".$updated."' $where"):'';

             !empty($image_2)?$r=mysqli_query($con,"UPDATE  $tbl SET `image_2`='".$image_2."' , `updated`='".$updated."' $where"):'';

              !empty($image_3)?$r=mysqli_query($con,"UPDATE  $tbl SET  `image_3`='".$image_3."' , `updated`='".$updated."' $where"):'';

              !empty($image_4)?$r=mysqli_query($con,"UPDATE  $tbl SET   `image_4`='".$image_4."' , `updated`='".$updated."' $where"):'';

              !empty($image_5)?$r=mysqli_query($con,"UPDATE  $tbl SET    `image_5`='".$image_5."' , `updated`='".$updated."' $where"):'';

              !empty($image_6)?$r=mysqli_query($con,"UPDATE  $tbl SET     `image_6`='".$image_6."' , `updated`='".$updated."' $where"):'';


            return $r;

        }

        public static function getProduct($con){
            $tbl            =   self::$productbl;
            $categorytbl    =   self::$categorytbl;

            $q="SELECT product.*,  category.name AS categoryname FROM ".$tbl." JOIN  ".$categorytbl." ON ".$tbl.".category=".$categorytbl.".id ORDER BY product.id DESC";
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

      



         public static function getProductById($data){
            $con            =   $data['con'];
            $edit           =   $data['edit'];
            $tbl            =   self::$productbl;
            $categorytbl    =   self::$categorytbl;

            $q="SELECT product.*,  category.name AS categoryname FROM ".$tbl." JOIN  ".$categorytbl." ON ".$tbl.".category=".$categorytbl.".id WHERE ".$tbl.".id=$edit.";
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            $f=mysqli_fetch_assoc($qr);
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


                public static function saveCart($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $product        =   $data['product'];
            $size           =   $data['size'];
            $created        =   $data['created'];
            $quantity        =   $data['quantity'];
            $tbl=self::$cartTbl;
            $fields='`customer`, `product`, `size`, `quantity`, `created`';
            $rows='"'.$customer.'","'.$product.'","'.$size.'","'.$quantity.'","'.$created.'"';
            $q="INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            $mq=mysqli_query($con, $q);
            $lastin=mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }

        public static function updateCart($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $product        =   $data['product'];
            $size           =   $data['size'];
            $created        =   $data['created'];
            $quantity        =   $data['quantity'];
            $tbl=self::$cartTbl;
            $where="WHERE id='".$edit."'";
            $r=mysqli_query($con,"UPDATE  $tbl SET  `customer`='".$customer."' , `product`='".$product."', `size`='".$size."',  `quantity`='".$quantity."',`updated`='".$updated."' $where");
            return $r;

        }


        public static function saveWish($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $product        =   $data['product'];
            $size           =   $data['size'];
            $created        =   $data['created'];
            $quantity        =   $data['quantity'];
            $tbl=self::$wishtbl;
            $fields='`customer`, `product`, `size`, `quantity`, `created`';
            $rows='"'.$customer.'","'.$product.'","'.$size.'","'.$quantity.'","'.$created.'"';
            $q="INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            $mq=mysqli_query($con, $q);
            $lastin=mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }

        public static function updateWish($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $product        =   $data['product'];
            $size           =   $data['size'];
            $created        =   $data['created'];
            $quantity        =   $data['quantity'];
            $tbl=self::$wishtbl;
            $where="WHERE id='".$edit."'";
            $r=mysqli_query($con,"UPDATE  $tbl SET  `customer`='".$customer."' , `product`='".$product."', `size`='".$size."',  `quantity`='".$quantity."',`updated`='".$updated."' $where");
            return $r;

        }


        public static function getWishBycustomer($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $tbl            =   self::$wishtbl;
             $productbl    =   self::$productbl;
            $q="SELECT ".$tbl.".*, ".$productbl.".name AS productname, ".$productbl.".sellingprice AS sellingprice, ".$productbl.".image_1 AS img1, ".$productbl.".image_2 AS img2, ".$productbl.".image_3 AS img3, ".$productbl.".image_4 AS img4, ".$productbl.".image_5 AS img5, ".$productbl.".image_6 AS img6 FROM ".$tbl."  JOIN ".$productbl." ON ".$tbl.".product=".$productbl.".id  WHERE ".$tbl.".customer=".$customer."";
               
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

public static function getWishId($data){
            $con            =   $data['con'];
            $id             =   $data['wishid'];
            $tbl            =   self::$wishtbl;
             $productbl    =   self::$productbl;
            $q="SELECT ".$tbl.".*, ".$productbl.".name AS productname, ".$productbl.".sellingprice AS sellingprice, ".$productbl.".image_1 AS img1, ".$productbl.".image_2 AS img2, ".$productbl.".image_3 AS img3, ".$productbl.".image_4 AS img4, ".$productbl.".image_5 AS img5, ".$productbl.".image_6 AS img6 FROM ".$tbl."  JOIN ".$productbl." ON ".$tbl.".product=".$productbl.".id  WHERE ".$tbl.".id=".$id."";
               
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            $f=mysqli_fetch_assoc($qr);
                
            }else{
                $f=[];
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

                public static function deleteCart($data){
            $con            =   $data['con'];
            $delete         =   static::getint($data['delete']);
            $tbl            =   self::$cartTbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE id="'.$delete.'"');
            return $r;
        }

                        public static function deleteCartByCustomer($data){
            $con            =   $data['con'];
            $delete         =   static::getint($data['delete']);
            $tbl            =   self::$cartTbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE customer="'.$delete.'"');
            return $r;
        }

                public static function deleteWish($data){
            $con            =   $data['con'];
            $delete         =   static::getint($data['delete']);
            $tbl            =   self::$wishtbl;
            $r=mysqli_query($con, 'DELETE FROM '.$tbl.' WHERE id="'.$delete.'"');
            return $r;
        }

        public static function getCartBycustomer($data){
            $con            =   $data['con'];
            $customer       =   $data['customer'];
            $tbl            =   self::$cartTbl;
             $productbl    =   self::$productbl;
            $q="SELECT ".$tbl.".*, ".$productbl.".name AS productname, ".$productbl.".sellingprice AS sellingprice, ".$productbl.".image_1 AS img1, ".$productbl.".image_2 AS img2, ".$productbl.".image_3 AS img3, ".$productbl.".image_4 AS img4, ".$productbl.".image_5 AS img5, ".$productbl.".image_6 AS img6 FROM ".$tbl."  JOIN ".$productbl." ON ".$tbl.".product=".$productbl.".id  WHERE ".$tbl.".customer=".$customer."";
               
            
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

        public static function getnewbilltoken($con){
            $q="SELECT MAX(billtoken) AS billtoken FROM `order` WHERE 1 ";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            $temp=mysqli_fetch_assoc($qr);
            $f=1+(int)$temp['billtoken'];
                empty($f)?$f=1:'';
            }else{
                $f=1;
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }
        public static function saveOrder($data){
            $con            =   $data['con'];
            $customer       =   (int)$data['customer'];
            $product        =   (int)$data['product'];
            $size           =  mysqli_real_escape_string($con,(string)trim($data['size']));
            $created        =   trim($data['created']);
            $quantity        = (int)$data['quantity'];
            $billtoken      = $data['billtoken'];
            $tbl='order';
            $fields='`customer`, `product`, `size`, `quantity`, `created`';
            $rows='"'.$customer.'","'.$product.'","'.$size.'","'.$quantity.'","'.$created.'"';
            // $q="INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
            // $mq=mysqli_query($con, $q);$mysqli=  $mq;
            $result= mysqli_query($con,'INSERT INTO `order`(`customer`, `product`, `size`, `quantity`, `billtoken`, `created`) VALUES ("'.$customer.'","'.$product.'","'.$size.'","'.$quantity.'","'.$billtoken.'","'.$created.'")');
            $lastin=mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }

        public static function getBillingDetail($con){
            $tbl=self::$ordertbl;
            $q="SELECT  members.fullname AS username, members.email AS useremail, bill.* FROM `bill`  JOIN members ON bill.customer=members.id  ORDER BY bill.billtoken DESC";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }

        
        public static function getOrdersByBillToken($data){
            $con=$data['con'];
            $billtoken=$data['billtoken'];
            $tbl=self::$ordertbl;
            $q="SELECT   product.name AS productname, product.sellingprice AS sellingprice,  category.name AS categoryname, order.size AS size, order.quantity AS quantity, bill.* FROM `order` JOIN `bill` ON order.billtoken=bill.billtoken JOIN product ON order.product=product.id JOIN category ON product.category=category.id ORDER BY order.billtoken DESC";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


        public static function getOrders($con){
            $tbl=self::$ordertbl;
            $q="SELECT  members.fullname AS username, members.email AS useremail, product.name AS productname, product.sellingprice AS sellingprice,  category.name AS categoryname, order.size AS size, bill.* FROM `order` JOIN `bill` ON order.billtoken=bill.billtoken JOIN members ON bill.customer=members.id JOIN product ON order.product=product.id JOIN category ON product.category=category.id ORDER BY order.billtoken DESC";
            $qr=mysqli_query($con,$q);
            $n=mysqli_num_rows($qr);
            if($n>0)
            {
            while($temp=mysqli_fetch_assoc($qr)){$f[]=$temp;}
                
            }else{
                $f='';
            }
            $r=['n'=>$n,'f'=>$f];
            return $r;
        }


          public static function saveBillingDetail($data){
            $con            =   $data['con'];
            $customer       =   (int)$data['customer'];
            $firstname        =   mysqli_real_escape_string($con,$data['firstname']);
            $lastname           =  mysqli_real_escape_string($con,(string)trim($data['lastname']));
            $created        =   trim($data['created']);
            $email        = mysqli_real_escape_string($con,$data['email']);
            $contact    =mysqli_real_escape_string($con,$data['contact']);
            $address    =mysqli_real_escape_string($con,$data['address']);
            $city = mysqli_real_escape_string($con,$data['city']);
            $pincode = mysqli_real_escape_string($con,$data['pincode']);
            $landmark = mysqli_real_escape_string($con,$data['landmark']);
            $billtoken = $data['billtoken'];
            $tbl='bill';
            $fields='`customer`, `firstname`, `lastname`, `email`, `contact`, `address`, `city`, `pincode`, `landmark`, `billtoken`, `created`';
            $rows='"'.$customer.'","'.$firstname.'","'.$lastname.'","'.$email.'","'.$contact.'","'.$address.'","'.$city.'","'.$pincode.'","'.$landmark.'","'.$billtoken.'","'.$created.'"';
             $q="INSERT INTO ".$tbl."(".$fields.") VALUES (".$rows.")";
             $mq=mysqli_query($con, $q);$mysqli=  $mq;
//            $result= mysqli_query($con,'INSERT INTO `bill`(`customer`, `firstname`, `lastname`, `email`, `contact`, `address`, `city`, `pincode`, `landmark`,  `created`) VALUES ("'.$customer.'","'.$firstname.'","'.$lastname.'","'.$email.'","'.$contact.'","'.$address.'","'.$city.'","'.$pincode.'","'.$landmark.'","'.$created.'")');
            $lastin=mysqli_insert_id($con);
            $lastin<1?$lastin=0:'';
            return $lastin;
        }


    }

?>