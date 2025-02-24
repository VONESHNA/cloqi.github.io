<?php
session_start();
unset($_SESSION['admin']);
session_destroy();
echo "<script>
        alert('Success, Logged out of your account');
        window.location='./'
        </script>";
?>