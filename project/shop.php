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
                            <a class="nav-link active" href="login.php">login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="newac.php">new account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" >contact:0123456789</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="trade.html" >Trade</a>
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
    <div class="container mt-5"> 
        <div class="row">
            <div class="col-lg-3"> 
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="bri.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">BRINJAL</h5>
                            <p class="card-text">Price:Rs.35</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="brinjal">
                            <input type="hidden" name="Price" value="35">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="product-9.png" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">CARROT</h5>
                            <p class="card-text">Price:Rs.40</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="carrot">
                            <input type="hidden" name="Price" value="40">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="beet.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">BEETROOT</h5>
                            <p class="card-text">Price:Rs.25</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="beetroot">
                            <input type="hidden" name="Price" value="25">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="bro.webp" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">BROCCOLI</h5>
                            <p class="card-text">Price:Rs.60</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="broccoli">
                            <input type="hidden" name="Price" value="60">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="gar.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">GARLIC</h5>
                            <p class="card-text">Price:Rs.150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="garlic">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="oni.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">ONION</h5>
                            <p class="card-text">Price:Rs.45</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="onion">
                            <input type="hidden" name="Price" value="45">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="paa.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">BITTERGUARD</h5>
                            <p class="card-text">Price:Rs.30</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="bitterguard">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="lad.webp" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">LADIESFINGER</h5>
                            <p class="card-text">Price:Rs.30</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="ladiesfinger">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="ManathakkaliKeerai.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">MANATHAKKALIKEERAI</h5>
                            <p class="card-text">Price:Rs.30</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="ManathakkaliKeerai">
                            <input type="hidden" name="Price" value="30">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="siru-keerai.webp" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">SIRU KEERAI</h5>
                            <p class="card-text">Price:Rs.35</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="sirukeerai">
                            <input type="hidden" name="Price" value="35">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="venthaiya.webp" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">VENTHAIYA</h5>
                            <p class="card-text">Price:Rs.50</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="venthaiya">
                            <input type="hidden" name="Price" value="50">
                        </div>
                    </div>
                </form>     
            </div>
            <div class="col-lg-3">
                <form action="cart1.php" method="post">
                    <div class="card">
                        <img src="araikeerai.jpg" class="card-img-top">
                        <div class="card-gody text-center">
                            <h5 class="card-title">ARAIKEERAI</h5>
                            <p class="card-text">Price:Rs.45</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-info">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="araikeerai">
                            <input type="hidden" name="Price" value="45">
                        </div>
                    </div>
                </form>     
            </div>
         </div> 
    </div> 


</body>
</html>