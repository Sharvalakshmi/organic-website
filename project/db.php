<?php
$conn=mysqli_connect('localhost','root','','reg_db');
if($conn->connect_error)
{
    die('Connection Failed :'.$conn->connect_error);
}
else
{
    echo "connect";
}
?>