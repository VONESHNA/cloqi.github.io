<?php
require_once 'header.php';

if (isset($_POST["login"])) {
    $mobnoemail =   Dbops::getinput($_POST["mobnoemail"]);
    $password   =   Dbops::getinput($_POST["password"]);
    $data       =   ['con'=>Con::connect(), 'mobnoemail'=>$mobnoemail, 'password'=>$password];
    $user       =   Dbops::loginMember($data);
    $userexist  =   $user['n'];
    $userdata   =   $user['f'];
    if($userexist>0)
    { $_SESSION['customer']='Customer';
      $_SESSION['username']=$userdata['fullname'];
      $_SESSION['useremail']=$userdata['email'];
      $_SESSION['userid']=$userdata['id'];
        echo "<script>
        alert('Success, Looged in');
        window.location='./'
        </script>";
    }else{
        echo "<script>
        alert('Error, Login Credetials mismatch ');
        window.location='login.php'
        </script>";
    }
}


?>
