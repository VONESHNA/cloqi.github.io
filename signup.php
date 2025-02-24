<?php
require_once './db/index.php';
require_once './lib/dbops.php';
require_once './lib/constants.php';
if (isset($_POST["register"])) {
    $fullname = Dbops::getinput($_POST["fullname"]);
    $email = Dbops::getinput($_POST["email"]);
    $password = Dbops::getinput($_POST["password"]);
    $type = 0;
    $created =dateTime;
    $data   =   ['con'=>Con::connect(), 'fullname'=>$fullname, 'email'=>$email, 'password'=>$password, 'type'=>$type, 'created'=>$created];
    if(Dbops::saveMember($data)>0)
    {
        echo "<script>
        alert('Success, Thank you for registering');window.location='./'
        </script>";
    }else{
        echo "<script>
        alert('Technical issue, Please try again');
        window.location='login.php'</script>";
    }
}


?>
