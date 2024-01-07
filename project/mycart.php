<?php
session_start();
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

<body>
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="shop.html">
                    <img src="category-4.png" width="60" height="35" class="d-inline-block align-text-top">
                    freshyyveg
                </a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="project.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="shop.php">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login1.php" >login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="newac.php" >new account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" >contact:0123456789</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="trade.php" >Trade</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <?php
                        $count=0;
                        if(isset($_SESSION['cart'])) 
                        {
                            $count=count($_SESSION['cart']);
                        }
                   ?>
                    <a href='mycart.php'class="btn btn-outline-success">My Cart(<?php echo $count;?>)</a>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
            <table class="table">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Serial No.</th>
                        <th scope="col">Item_Name</th>
                        <th scope="col">Item_Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                <?php
                    if(isset($_SESSION['cart']))
                    {
                        foreach($_SESSION['cart'] as $key => $value)
                        {
                            $sr=$key+1;
                            echo"
                                <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                                    <td>
                                        <form action='cart1.php' method='POST'>
                                            <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='10'>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form action='cart1.php' method='POST'>
                                            <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>
                </tbody>
            </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                <h4>Grand Total:</h4>
                <h5 class="text-right" id="gtotal"><?php echo $total?></h5>
                <br>
                <?php
                    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                    {
                ?>
                <form action="purchase.php" method="POST">
                    <div class="form-group">
                        <label>Full name</label>
                        <input type="text" name="Full_Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="number" name="Phone_No" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>address</label>
                        <input type="text" name="Address" class="form-control" required>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Pay_mode" value="COD" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Cash on delivery
                        </label>
                    </div>
                    
                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                </form>
                <?php
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }

    subTotal();
</script>
</body>
</html>
