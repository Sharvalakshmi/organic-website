<?php 
    require("conn.php");
    session_start();
    session_regenerate_id(true);
 ?>
<html>
    <head>
    <title>freshvegii/login</title>
    <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="back">
            <div class="leftu"></div>
            <div class="rightu">
                <div class="form">
                    <form action="login.php" method="POST">
                        <p>Username</p>
                        <input type="text" name="username" placeholder="Username">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="......"><br>
                        <input type="submit" name="sub" value="Signin">
                    </form>
                </div>    
            </div>
        </div>
    </body>
</html>