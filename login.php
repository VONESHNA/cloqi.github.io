<?php
require_once 'header.php';

if (isset($_POST["register"])) {
    $fullname = Dbops::getinput($_POST["fullname"]);
    $email = Dbops::getinput($_POST["email"]);
    $password = Dbops::getinput($_POST["password"]);
    $type = 0;
    $created =dateTime;
    $data   =   ['con'=>Con::connect(), 'fullname'=>$fullname,  'email'=>$email, 'password'=>$password, 'type'=>$type, 'created'=>$created];
    if(Dbops::saveMember($data)>0)
    {
        echo "<script>
        alert('Success, Thank you for registering');window.location='./'
        </script>";
    }else{
        echo "<script>
        const container = document.querySelector('.container');
        container.classList.remove('sign-up-mode');
        alert('Technical issue, Please try again');
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  
  </head>
  <body>
    <div class="container" style="background-color: black;">
      <div class="forms-container">
        <div class="signin-signup">
          <form  method="post" action="signin.php" class="sign-in-form">
            <h2 class="title" style="color: rgb(241, 244, 247);">Sign In</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="mobnoemail" placeholder="Enter Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Enter Password" required />
            </div>

            <button type="submit" name="login" class="btn solid" value="1" required>Login</button>

            
          </form>


          <form method="post" action="signup.php"  class="sign-up-form">
            <h2 class="title" style="color: rgb(247, 249, 252);">Sign Up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input  type="text" name="fullname" placeholder=" Enter User Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" minlength="8" maxlength="25"placeholder="Enter Email" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" minlength="6" maxlength="25" placeholder="Enter Password" required/>
            </div>
          
            <button type="submit" name="register" value="1" class="btn solid"  required>Sign Up</button>


            
          </form>
        </div>
      </div>
      <div class="panels-container">

        <div class="panel left-panel">
            <div class="content">
                <h3>New here?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                <button class="btn transparent" id="sign-up-btn">Sign Up</button>
            </div>
            <img src="./VID-20250112-WA0055_026.jpg" class="image" alt="">
        </div>

        <div class="panel right-panel">
            <div class="content">
                <h3>One of us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio minus natus est.</p>
                <button class="btn transparent" id="sign-in-btn">Sign In</button>
            </div>
            <img src="./VID-20250112-WA0055_026.jpg" class="image" alt="">
        </div>
      </div>
    </div>

    <script src="./app.js"></script>
  </body>
</html>
