<?php
session_start();

$con=mysqli_connect("localhost","root","","reg_db");

if(mysqli_connect_error()){
    echo"cannot connect to database";
    exit();
}

?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
    
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <div class="header">
                <h2>panel</h2>
</div>
<div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <button type="submit" name="logout">LOG OUT</button>
                </form>
            </div>
</div>
</nav>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-12">
                    <table class="table text-center table-dark">
                        <thead>
                            <tr>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Phone NO</th>
                                <th scope="col">Address</th>
                                <th scope="col">Pay Mode</th>
                                <th scope="col">Orders</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query="SELECT * FROM `order_tb`";
                                $user_result=mysqli_query($con,$query);
                                while($user_fetch=mysqli_fetch_assoc($user_result))
                                {
                                    echo"
                                        <tr>
                                            <td>$user_fetch[Full_Name]</td>
                                            <td>$user_fetch[Phone_No]</td>
                                            <td>$user_fetch[Address]</td>
                                            <td>$user_fetch[Pay_mode]</td>
                                            <td>
                                                <table class='table text-center table-dark'>
                                                    <thead>
                                                        <tr>
                                                            <th scope='col'>Item name</td>
                                                            <th scope='col'>Price</th>
                                                            <th scope='col'>Quantity</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                    ";
                                $order_query="SELECT * FROM `useror_tb`";
                                $order_result=mysqli_query($con,$order_query);
                                while($order_fetch=mysqli_fetch_assoc($order_result))
                                {
                                    echo"
                                        <tr>
                                            <td>$order_fetch[Item_Name]</td>
                                            <td>$order_fetch[Price]</td>
                                            <td>$order_fetch[Quantity]</td>
                                        <tr>
                                        ";
                                    }
                                    echo"
                                                </tbody>
                                            </td>
                                        </tr>
                                    ";
                                }
                            ?>
                         
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <?php
            if(isset($_POST['logout']))
            {
                session_destroy();
                header("location:project.php");
            }
            ?>
            </body>
            </html>