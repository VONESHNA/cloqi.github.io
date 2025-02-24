<?php

require_once './header.php';

if (isset($_POST["login"])) {
    $mobnoemail =   Dbops::getinput($_POST["mobnoemail"]);
    $password   =   Dbops::getinput($_POST["password"]);
    $data       =   ['con'=>Con::connect(), 'mobnoemail'=>$mobnoemail, 'password'=>$password];
    if(Dbops::loginMember($data)['n']>0)
    { //print_r(Dbops::loginMember($data)['f']);
        if(Dbops::loginMember($data)['f']['type']==1)
        {   $_SESSION['admin']='Admin';
            echo "<script>
            alert('Success, Looged in');
            window.location='./dashboard.php'
            </script>";
        }
    }else{
        echo "<script>
        alert('Error, Login Credetials mismatch ');
        window.location='./'
        </script>";
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
    <input type="text" name="mobnoemail" placeholder="Enter Mobile No Or Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button type="submit" name="login" value="1" required>Login</button>
</form>
</body>
</html>