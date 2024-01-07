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
        <a class="navbar-brand" href="#">
        <img src="category-4.png" width="60" height="35" class="d-inline-block align-text-top">
                    freshyyveg
        </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="project.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#" >contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.html" >login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="newac.html" >new account</a>
                </li>
            </ul>
        </div>
        <div>
            <a href="cart.php" class="btn btn-outline-success">My Cart(0)</a>
        </div>
    </div>
    </nav>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light mt-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-8">
                <table class="table">
                <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial No.</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php
        $total=0;
        if(isset($_SESSION['cart']))
        {
            foreach($_SESSION['cart'] as $key => $value)
            {
                $total=$total+$value['Price'];
                echo"
                <tr>
                <td>1</td>
                <td>$value[Item_Name]</td>
                <td>$value[Price]</td>
                <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'>/td>
                <td><button class='btn btn-sm  btn-outline-danger'>REMOVE</button></td>
                </tr>
                ";
            }
        }

      ?>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
                </table>
        </div>
    </div> 
</body>
</html>

