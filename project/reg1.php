<?php

include "db.php";
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $pass= $_POST['pass'];
    $sql="insert into reg_tb(username,email,password,pass) values('$username','$email','$password','$pass')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:login.html");
    }
    else
    {
        echo "error";
    }
?>