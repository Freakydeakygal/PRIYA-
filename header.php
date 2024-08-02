


<header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <!-- <a href="./index.php"><img src="img/logo1.png" alt="" height="60px" width="150px"></a> -->
                    <h2>B-Light</h2>
                </div>
                <!-- <div class="header-right">
                    <img src="img/icons/search.png" alt="" class="search-trigger">
                    <img src="img/icons/man.png" alt="">
                    <a href="#">
                        <img src="img/icons/bag.png" alt="">
                        <span>2</span>
                    </a>
                </div> -->
                <!-- <div class="user-access">
                    <a href="#">Register</a>
                    <a href="#" class="">login</a>
                </div> -->
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a class="active" href="index.php">Home</a></li>
                        <!-- <li><a href="./categories.html">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="product-page.html">Product Page</a></li>
                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="check-out.html">Check out</a></li>
                            </ul>
                        </li> -->
                        <!-- <li><a href="./product-page.html">About</a></li> -->
                        <!-- <li><a href="./check-out.html">Blog</a></li> -->
                        <li><a href="feedback.php">Feedback</a></li>
                        <?php if(!isset($_SESSION['c_id'])){?>

<li><a href="">Login</a>
<ul class="sub-menu">
    <li><a href="admin/login.php">Admin</a></li>
    <li><a href="login/login.php">Customer</a></li>
    <!-- <li><a href="check-out.html">Check out</a></li> -->
</ul>
</li>

                       <?php }else{?>
                        <li><a href="">Category</a>
<ul class="sub-menu">
    <?php $stmt=$admin->ret("SELECT * FROM `category` ");
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {?>
    <li><a href="product1.php?id=<?php echo $row['cat_id']?>"><?php echo $row['cat_name']?></a></li>
<?php }?>
    <!-- <li><a href="check-out.html">Check out</a></li> -->
</ul>
</li>
                        <li><a href="product.php">All Products</a></li>
                        <li><a href="viewcart.php">Cart</a></li>
                        <li><a href="orderstatus.php">Order Status</a></li>

                        <li><a href="logout.php">Logout</a></li>

                       <?php }?>
                       
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="img/icons/delivery.png" alt="">
                        <p>Free delivery on order above ₹1999</p>

                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="img/icons/sales.png" alt="">
                    <p>30% off on blushes. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>