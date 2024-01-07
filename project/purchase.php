<?php
session_start();
$con=mysqli_connect("localhost","root","","reg_db");
    if(mysqli_connect_error()){
        echo"<script>
            alert('cannot connect to database');
            window.location.href='mycart.php';
        </script>";
        exit();
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST['purchase']))
        {
            $query1="INSERT INTO `order_tb`( `Full_Name`, `Phone_No`, `Address`, `Pay_mode`) VALUES ('$_POST[Full_Name]','$_POST[Phone_No]','$_POST[Address]','$_POST[Pay_mode]')";

            if(mysqli_query($con,$query1))
            {
                $order_Id=mysqli_insert_id($con);
                $query2="INSERT INTO `useror_tb`(`order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";        
                $stmt=mysqli_prepare($con,$query2);
                if($stmt)
                {
                    mysqli_stmt_bind_param($stmt,"isii",$order_Id,$Item_Name,$Price,$Quantity);
                    foreach($_SESSION['cart'] as $key => $values)
                    {
                        $Item_Name=$values['Item_Name'];
                        $Price=$values['Price'];
                        $Quantity=$values['Quantity'];
                        mysqli_stmt_execute($stmt);
                    } 
                    unset($_SESSION['cart']);
                    echo"<script>
                        alert('order placed');
                        window.location.href='shop.php';
                    </script>";
                }
                else
                {
                    echo"<script>
                        alert('SQL query error');
                        window.location.href='mycart.php';
                    </script>";
                }
            }

            else
            {
                echo"<script>
                    alert('SQL error');
                    window.location.href='mycart.php';
                </script>";

            }
        }
    }
    
    ?>