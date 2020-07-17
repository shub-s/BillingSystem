<?php
    session_start();
    if($_SESSION['uname']){
        header("Location: dashboard.php");
    }else{
        header("Location: SecureLogin/");
    }
?>