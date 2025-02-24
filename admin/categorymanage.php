<?php require_once './topmenu.php';


if (isset($_POST["register"])) {
  $name = Dbops::getinput($_POST["name"]);
  $description = Dbops::getinput($_POST["description"]);
  $created =dateTime;
  $data   =   ['con'=>Con::connect(), 'name'=>$name, 'description'=>$description, 'created'=>$created];
   if(Dbops::saveCategory($data)>0)
   {
       echo "<script>
      alert('Success, Added new Category');window.location='./categorymanage.php'
       </script>";
   }else{
       echo "<script>
       alert('error, Please try again');
       window.location='./categorymanage.php'</script>";
  }
}


if (isset($_POST["update"])) {
  $name = Dbops::getinput($_POST["name"]);
  $description = Dbops::getinput($_POST["description"]);
  $edit = Dbops::getinput($_POST["edit"]);
  $updated =dateTime;
  $data   =   ['con'=>Con::connect(), 'edit'=>$edit, 'name'=>$name,  'description'=>$description,  'updated'=>$updated];
  if(Dbops::updateCategory($data)>0)
  {
      echo "<script>
      alert('Success, updated the  Category');window.location='./categorymanage'
      </script>";
  }else{
      echo "<script>
      alert('error, Please try again');
      window.location='./categorymanage'</script>";
  }

}

if(isset($_REQUEST['edit'])){
  $edit= Dbops::getint($_GET['edit']);
  $data=['con'=>Con::connect(), 'edit'=>$edit];
  $catEditnf=Dbops::getCategoryById($data);
  $catEditnf['n']>0?$catEdit=$catEditnf['f']:$catEdit=[];

}
if(isset($_REQUEST['delete'])){
  $delete= Dbops::getint($_GET['delete']);
  $data=['con'=>Con::connect(), 'delete'=>$delete];
  if(Dbops::deleteCategory($data)>0)
  {
      echo "<script>
      alert('Success, deleted this Categroy');window.location='./categorymanage'
      </script>";
  }
  else{
        echo "<script>
        alert('error, Please try again');
        window.location='./categorymanage'</script>";
  }
}

$cats=Dbops::getCategory(Con::connect());
$cats['n']>0?$categories=$cats['f']:$categories=[];
?>

<section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

<!-- Login Form-->
<div class="d-flex flex-column w-100 align-items-center">

  <!-- Logo-->
  <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
    <div class="d-flex align-items-center">
        <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
        <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Manage Category</span>
    </div>      </a>
  <!-- Logo-->
  
  <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
    <h3 class="fw-bold">Category</h3>

    <!-- Login Form-->
    <form class="mt-4" method="post" action=""> 
      <div class="form-group">
        <!-- <label class="form-label" for="login-email">Email address</label>
        <input type="email" class="form-control" id="login-email" placeholder="name@email.com"> -->
      </div>
      <div class="form-group">
        <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
        Category Name</label>
        <input type="text" name="name" minlength="3" class="form-control" id="login-password" placeholder="Enter Category" <?php if(isset($_REQUEST['edit'])){?> value="<?php if(isset($catEdit)){echo $catEdit['name'];}?>"<?php }?> required>
      </div>
      <div class="form-group">

      <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
        Category Desciption</label>
         <textarea name="description" minlength="3" class="form-control" > <?php if(isset($_REQUEST['edit'])){?> <?php if(isset($catEdit)){echo $catEdit['description'];}?><?php }?> </textarea>
      </div>

    <?php if(isset($_REQUEST['edit'])){?>
      <input type="hidden" name="edit" value="<?php echo $edit; ?>">
      <button type="submit" name="update" value="1" class="btn btn-primary d-block w-100 my-4">Update</button>

    <?php }else{?>

      <button type="submit" name="register" value="1" class="btn btn-primary d-block w-100 my-4">Save</button>


    <?php } ?>
    </form>
    <!-- / Login Form -->

  </div>
</div>
<!-- / Login Form-->

</section>

<section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

<!-- Login Form-->
<div class="d-flex flex-column w-100 align-items-center">

  <!-- Logo-->
  <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
    <div class="d-flex align-items-center">
        <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
        <span class="fw-black text-uppercase tracking-wide fs-6 lh-1"> Category List</span>
    </div>      </a>
  <!-- Logo-->
  
  <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
    <h3 class="fw-bold">Category</h3>

    <!-- Login Form-->
 <table>
  <thead>
    <tr>
      <td><br/><br/>S. No. &nbsp; &nbsp; &nbsp;</td>
      <td><br/><br/> Category &nbsp; &nbsp; &nbsp;</td>
      <td><br/><br/> Description &nbsp; &nbsp; &nbsp;</td>
      <td>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Action</td>
    </tr>
  </thead>
  <tbody>
    <?php $i=0;foreach($categories as $k=>$v){
      ++$i; 
      $category = $v['name'];
      $description = $v['description'];
      $edit=$v['id'];
      $delete=$v['id'];
      ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo  $category;?></td>
      <td><?php echo  $description;?></td>
      <td> &nbsp; &nbsp; &nbsp;<a href="?edit=<?php echo $edit;?>" >edit</a> </td>
      <td> &nbsp;<a href="?delete=<?php echo $delete;?>"  style="color:red;" onclick="return confirm('sure, delete this entry ?')">delete</a></td>

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