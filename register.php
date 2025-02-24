<?php
require_once './db/index.php';
require_once './lib/dbops.php';
require_once './lib/constants.php';
if (isset($_POST["register"])) {
    $fullname = Dbops::getinput($_POST["fullname"]);
    $mobno = Dbops::getint($_POST["mobno"]);
    $email = Dbops::getinput($_POST["email"]);
    $password = Dbops::getinput($_POST["password"]);
    $type = 0;
    $created =dateTime;
    $data   =   ['con'=>Con::connect(), 'fullname'=>$fullname, 'mobno'=>$mobno, 'email'=>$email, 'password'=>$password, 'type'=>$type, 'created'=>$created];
    if(Dbops::saveMember($data)>0)
    {
        echo "<script>
        alert('Success, Thank you for registering');window.location='./'
        </script>";
    }else{
        echo "<script>
        alert('Technical issue, Please try again');
        window.location='register.php'</script>";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<form method="post" action="">
    <input type="text" name="fullname" placeholder=" Enter Full Name">
    <input type="mobno" name="mobno" minlength="10" maxlength="10" placeholder="Enter Mobile No" pattern=[0-9]{10} required>
    <input type="email" name="email" minlength="8" maxlength="25"placeholder="Enter Email" required>
    <input type="password" name="password" minlength="6" maxlength="25" placeholder="Enter Password" required>
    <button type="submit" name="register" value="1" required>Register</button>
</form>
</body>
</html>