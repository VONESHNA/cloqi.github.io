<?php require_once './topmenu.php';


if (isset($_POST["register"])) {
  $name = Dbops::getinput($_POST["name"]);
  $description = Dbops::getinput($_POST["description"]);
  $category = Dbops::getint($_POST["category"]);
  $actualprice = Dbops::getinput($_POST["actualprice"]);
  $sellingprice = Dbops::getinput($_POST["sellingprice"]);
  $xs = Dbops::getinput($_POST["xs"]);
  $s = Dbops::getinput($_POST["s"]);
  $m = Dbops::getinput($_POST["m"]);
  $l = Dbops::getinput($_POST["l"]);
  $xl = Dbops::getinput($_POST["xl"]);
  $xxl = Dbops::getinput($_POST["xxl"]);
  $xxxl = Dbops::getinput($_POST["xxxl"]);
  $created =dateTime;
  $_FILES['img1']['size']>0?$image1=Fileops::productimageup('img1'):$image1='';
    $_FILES['img2']['size']>0?$image2=Fileops::productimageup('img2'):$image2='';
      $_FILES['img3']['size']>0?$image3=Fileops::productimageup('img3'):$image3='';
        $_FILES['img4']['size']>0?$image4=Fileops::productimageup('img4'):$image4='';
          $_FILES['img5']['size']>0?$image5=Fileops::productimageup('img5'):$image5='';
            $_FILES['img6']['size']>0?$image6=Fileops::productimageup('img6'):$image6='';
  $data   =   ['con'=>Con::connect(), 'category'=>$category, 'name'=>$name, 'description'=>$description,  'image1'=>$image1,'image2'=>$image2, 'image3'=>$image3, 'image4'=>$image4, 'image5'=>$image5, 'image6'=>$image6, 'actualprice'=>$actualprice, 'sellingprice'=>$sellingprice, 'xs'=>$xs, 's'=>$s, 'm'=>$m,'l'=>$l, 'xl'=>$xl, 'xxl'=>$xxl, 'xxxl'=>$xxxl, 'created'=>$created];


  if(Dbops::saveProduct($data)>0)
  {
      echo "<script>
      alert('Success, Added new Product');window.location='./productmanage.php'
      </script>";
  }else{
      echo "<script>
      alert('error, Please try again');
      window.location='./productmanage.php'</script>";
  }
}


if (isset($_POST["update"])) {
  $category = Dbops::getint($_POST["category"]);
  $name = Dbops::getinput($_POST["name"]);
  $description = Dbops::getinput($_POST["description"]);
  $edit = Dbops::getinput($_POST["edit"]);
  $actualprice = Dbops::getinput($_POST["actualprice"]);
  $sellingprice = Dbops::getinput($_POST["sellingprice"]);
  $xs = Dbops::getinput($_POST["xs"]);
  $s = Dbops::getinput($_POST["s"]);
  $m = Dbops::getinput($_POST["m"]);
  $l = Dbops::getinput($_POST["l"]);
  $xl = Dbops::getinput($_POST["xl"]);
  $xxl = Dbops::getinput($_POST["xxl"]);
  $xxxl = Dbops::getinput($_POST["xxxl"]);
  $updated =dateTime;
  $_FILES['img1']['size']>0?$image1=Fileops::productimageup('img1'):$image1='';
    $_FILES['img2']['size']>0?$image2=Fileops::productimageup('img2'):$image2='';
      $_FILES['img3']['size']>0?$image3=Fileops::productimageup('img3'):$image3='';
        $_FILES['img4']['size']>0?$image4=Fileops::productimageup('img4'):$image4='';
          $_FILES['img5']['size']>0?$image5=Fileops::productimageup('img5'):$image5='';
            $_FILES['img6']['size']>0?$image6=Fileops::productimageup('img6'):$image6='';
  $data   =   ['con'=>Con::connect(), 'edit'=>$edit, 'category'=>$category, 'name'=>$name, 'description'=>$description,  'image1'=>$image1,'image2'=>$image2, 'image3'=>$image3, 'image4'=>$image4, 'image5'=>$image5, 'image6'=>$image6,'actualprice'=>$actualprice, 'sellingprice'=>$sellingprice, 'xs'=>$xs, 's'=>$s, 'm'=>$m,'l'=>$l, 'xl'=>$xl, 'xxl'=>$xxl, 'xxxl'=>$xxxl,  'updated'=>$updated];
  if(Dbops::updateProduct($data)>0)
  {
      echo "<script>
      alert('Success, updated the Product');window.location='./productmanage'
      </script>";
  }else{
      echo "<script>
      alert('error, Please try again');
      window.location='./productmanage'</script>";
  }

}

if(isset($_REQUEST['edit'])){
  $edit= Dbops::getint($_GET['edit']);
  $data=['con'=>Con::connect(), 'edit'=>$edit];
  $productEditnf=Dbops::getProductById($data);
  $productEditnf['n']>0?$productEdit=$productEditnf['f']:$productEdit=[];
      $oldimage1 = adminproduct.$productEdit['image_1'];
      $oldimage2 = adminproduct.$productEdit['image_2'];
      $oldimage3 = adminproduct.$productEdit['image_3'];
      $oldimage4 = adminproduct.$productEdit['image_4'];
      $oldimage5 = adminproduct.$productEdit['image_5'];
      $oldimage6 = adminproduct.$productEdit['image_6'];

}
if(isset($_REQUEST['delete'])){
  $delete= Dbops::getint($_GET['delete']);
  $data=['con'=>Con::connect(), 'delete'=>$delete];
  if(Dbops::deleteProduct($data)>0)
  {
      echo "<script>
      alert('Success, deleted this Product');window.location='./productmanage'
      </script>";
  }
  else{
        echo "<script>
        alert('error, Please try again');
        window.location='./productmanage'</script>";
  }
}

$cats=Dbops::getCategory(Con::connect());
$cats['n']>0?$categories=$cats['f']:$categories=[];
$pds=Dbops::getProduct(Con::connect());
$pds['n']>0?$products=$pds['f']:$products=[];
?>

<section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

<!-- Login Form-->
<div class="d-flex flex-column w-100 align-items-center">

  <!-- Logo-->
  <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
    <div class="d-flex align-items-center">
        <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
        <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Manage Product</span>
    </div>      </a>
  <!-- Logo-->
  
  <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
    <h3 class="fw-bold">Product</h3>

    <!-- Login Form-->
    <form class="mt-4" method="post" action=""  enctype="multipart/form-data"> 
      <div class="form-group">
        <!-- <label class="form-label" for="login-email">Email address</label>
        <input type="email" class="form-control" id="login-email" placeholder="name@email.com"> -->
      </div>
      <div class="form-group">
        <!-- <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
          Password
          <a href="./forgot-password.html" class="text-muted small ms-2 text-decoration-underline">Forgotten
            password?</a>
        </label> -->
     <div class="form-group">
             <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Category</label>
             <select class="form-control" name="category" required>
               <?php if(!isset($_REQUEST['edit'])){?> <option value="">Choose Any </option> <?php } ?>
              <?php foreach($categories AS $k=>$v){$categoryName=$v['name'];$categoryId=$v['id'];?><option value="<?php echo $categoryId;?>" <?php if($categoryId==$productEdit['category']){ echo "selected";}?>><?php echo $categoryName; ?></option><?php }?></select>
                  </div>
             <div class="form-group">

         <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Product Name</label>
        <input type="text" name="name" minlength="3" class="form-control" id="login-password" placeholder="Enter Product" <?php if(isset($_REQUEST['edit'])){?> value="<?php if(isset($productEdit)){echo $productEdit['name'];}?>"<?php }?> required>
            </div>



         <div class="form-group">

      <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
        Product Desciption</label>
         <textarea class="form-control" name="description" minlength="3" class="form-control" > <?php if(isset($_REQUEST['edit'])){?> <?php if(isset($productEdit)){echo $productEdit['description'];}?><?php }?> </textarea>
      </div>



        <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Product Image</label>
        <br/>1 <?php if(!empty($productEdit['image_1'])){?> 
          <a href="<?php echo  $oldimage1;?>" target="_blank">
          <img src="<?php echo $oldimage1;?>" width="50px;">
          </a>
        <?php } ?>
        <input type="file" class="form-control" name="img1" accept="image/png, image/jpeg, image/jpg">
        <br/>
        <br/><br/>2 
         <?php if(!empty($productEdit['image_2'])){?>
          <a href="<?php echo  $oldimage2;?>" target="_blank">
          <img src="<?php echo $oldimage2;//$productEdit['image_1'];?>" width="50px;">
          </a>
          <?php }?>
        
        <input type="file" class="form-control" name="img2" accept="image/png, image/jpeg, image/jpg">
           <br/><br/>3 
           <?php if(!empty($productEdit['image_3'])){?>
            <a href="<?php echo  $oldimage3;?>" target="_blank">
            <img src="<?php echo $oldimage3;//$productEdit['image_1'];?>" width="50px;">
            </a>
            <?php } ?>
          
        <input type="file" class="form-control" name="img3" accept="image/png, image/jpeg, image/jpg">
        <br/> 
           <br/><br/>4 
           <?php if(!empty($productEdit['image_4'])){?>
            <a href="<?php echo  $oldimage4;?>" target="_blank">
            <img src="<?php echo $oldimage4;//$productEdit['image_1'];?>" width="50px;">
            </a>
            <?php } ?>
          
        <input type="file" class="form-control" name="img4" accept="image/png, image/jpeg, image/jpg">
        <br/>
           <br/><br/>5 
            <?php if(!empty($productEdit['image_5'])){?>
              <a href="<?php echo  $oldimage5;?>" target="_blank">
              <img src="<?php echo $oldimage5;//$productEdit['image_1'];?>" width="50px;">
            </a>
            <?php } ?>
        <input type="file" class="form-control" name="img5" accept="image/png, image/jpeg, image/jpg">
        <br/>
           <br/><br/>6 
            <?php if(!empty($productEdit['image_6'])){?>
              <a href="<?php echo  $oldimage6;?>" target="_blank">
              <img src="<?php echo $oldimage6;//$productEdit['image_6'];?>" width="50px;">
            </a>
             <?php } ?>
        <input type="file" class="form-control" name="img6" accept="image/png, image/jpeg, image/jpg">

      </div>
<!-- actual price -->
   <div class="form-group">
 <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Actual Price</label>

<input type="text"  class="form-control" placeholder="Enter Actual Price" name="actualprice"  <?php if(isset($_REQUEST['edit'])){?> value="<?php if(isset($productEdit)){echo $productEdit['actualprice'];}?>"<?php }?>>
 </div>
<!-- actual price -->
<!-- selling price -->
   <div class="form-group">
 <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Selling Price</label>

<input type="text"  class="form-control" placeholder="Enter Selling Price" name="sellingprice"  <?php if(isset($_REQUEST['edit'])){?> value="<?php if(isset($productEdit)){echo $productEdit['sellingprice'];}?>"<?php }?>>
</div>
<!-- selling price -->

<!-- avilable size -->
   <div class="form-group">
 <label for="login-password" class="form-label d-flex justify-content-between align-items-center">Available Sizes</label>
  <label>XS</label>
<input type="checkbox" name="xs" value="1" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['xs']=='1'){echo 'checked';}}?><?php }?>>
  <label>S</label>
<input type="checkbox" name="s" value="2" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['s']=='2'){echo 'checked';}}?><?php }?>>
  <label>M</label>
<input type="checkbox" name="m" value="3" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['m']=='3'){echo 'checked';}}?><?php }?>>
  <label>L</label>
<input type="checkbox" name="l" value="4" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['l']=='4'){echo 'checked';}}?><?php }?>>
  <label>XL</label>
<input type="checkbox" name="xl" value="5" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['xl']=='5'){echo 'checked';}}?><?php }?>>
  <label>XXL</label>
<input type="checkbox" name="xxl" value="6" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['xxl']=='6'){echo 'checked';}}?><?php }?>>
  <label>XXXL</label>
<input type="checkbox" name="xxxl" value="7" <?php if(isset($_REQUEST['edit'])){?>  <?php if(!empty($productEdit)){if($productEdit['xxl']=='7'){echo 'checked';}}?><?php }?>>
</div>
<!-- available size -->



    <?php if(isset($_REQUEST['edit'])){?>
         <div class="form-group">
      <input type="hidden" name="edit" value="<?php echo $edit; ?>">
      <button type="submit" name="update" value="1" class="btn btn-primary d-block w-100 my-4">Update</button>
</div>
    <?php }else{?>
   <div class="form-group">
      <button type="submit" name="register" value="1" class="btn btn-primary d-block w-100 my-4">Save</button>
</div>

    <?php } ?>
    </form>
    <!-- / Login Form -->

  </div>
</div>
<!-- / Login Form-->

</section>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

<!-- Login Form-->
<div class="d-flex flex-column w-100 align-items-center">

  <!-- Logo-->
  <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
    <div class="d-flex align-items-center">
        <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
        <span class="fw-black text-uppercase tracking-wide fs-6 lh-1"> Product List</span>
    </div>      </a>
  <!-- Logo-->
  
  <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
    <h3 class="fw-bold">Product</h3>

    <!-- Login Form-->
 <table>
  <thead>
    <tr>
      <td><br/><br/>S. No. &nbsp; &nbsp; &nbsp;</td>
      <td><br/><br/> Category &nbsp; &nbsp; &nbsp;</td>
      <td><br/><br/> Product &nbsp; &nbsp; &nbsp;</td>
      <td><br/> Images </td>
      <td >&nbsp;&nbsp;&nbsp;  Action</td>
    </tr>
  </thead>
  <tbody>
    <?php $i=0;foreach($products as $k=>$v){
      ++$i; 
      $categoryname = $v['categoryname'];
      $productname = $v['name'];
      $image1 = adminproduct.$v['image_1'];
      $image2 = adminproduct.$v['image_2'];
      $image3 = adminproduct.$v['image_3'];
      $image4 = adminproduct.$v['image_4'];
      $image5 = adminproduct.$v['image_5'];
      $image6 = adminproduct.$v['image_6'];
      $edit=$v['id'];
      $delete=$v['id'];
      ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo  $categoryname;?></td>
      <td><?php echo  $productname;?></td>
       <td >
         <?php if(!empty($v['image_1'])){ ?><a href="<?php echo  $image1;?>" target="_blank"><img src="<?php echo  $image1;?>" width="50px;"></a><?php } ?>
         <?php if(!empty($v['image_2'])){ ?><a href="<?php echo  $image2;?>" target="_blank"><img src="<?php echo  $image2;?>" width="50px;"></a><?php } ?>
         <?php if(!empty($v['image_3'])){ ?><a href="<?php echo  $image3;?>" target="_blank"><img src="<?php echo  $image3;?>" width="50px;"></a><?php } ?>
         <?php if(!empty($v['image_4'])){ ?><a href="<?php echo  $image4;?>" target="_blank"><img src="<?php echo  $image4;?>" width="50px;"></a><?php } ?>
         <?php if(!empty($v['image_5'])){ ?><a href="<?php echo  $image5;?>" target="_blank"><img src="<?php echo  $image5;?>" width="50px;"></a><?php } ?>
         <?php if(!empty($v['image_6'])){ ?><a href="<?php echo  $image6;?>" target="_blank"><img src="<?php echo  $image6;?>" width="50px;"></a><?php } ?> 
       <br/><br/>
       </td>
      <td> <a href="?edit=<?php echo $edit;?>" >edit</a> </td>
      <td><a href="?delete=<?php echo $delete;?>"  style="color:red;" onclick="return confirm('sure, delete this product ?')">delete</a></td>

    </tr>
    <?php } ?>
</tbody>
 </table>
    <!-- / Login Form -->

  </div>
</div>
<!-- / Login Form-->

</section>

    <!-- Page Aside-->
     <?php require_once 'aside.php';?>
    <!-- / Page Aside-->





    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>