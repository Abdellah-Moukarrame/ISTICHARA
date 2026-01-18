<?php
require "./View/auth/login.php";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $email=$_POST['email_auth'];
    $password =$_POST['password_auth'];

    if ($password == "admin" && $email == "admin@admin.com") {
       header("location: admin/dashboard");
    }
    else{
       header("location: "); 
    }
    
}
