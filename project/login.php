<?php
include "db.php";
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql="select * from reg_tb where username='$username' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    echo $count;
    if($count>0)
    {
        header("location:list.php");
    }
    else
    {
        header("location:login.html");
    }
?>