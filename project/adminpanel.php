<?php 
    require("conn.php");
    session_start();
    session_regenerate_id(true);
    if(!isset($_SESSION['AdminLoginId'])){
        header("location:adminlog.php")
    }
    ?>