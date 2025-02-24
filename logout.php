<?php
session_start();
unset($_SESSION['customer']);
unset($_SESSION['username']);
unset($_SESSION['userid']);
unset($_SESSION['useremail']);
session_destroy();
echo "<script>
        alert('Success, Logged out of your account');
        window.location='./'
        </script>";
?>