<?php 

include 'config.php';

$admin=new Admin();

// $cid=$_SESSION['c_id'];
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B-Light</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
        <!-- <div id="preloder">
            <div class="loader"></div>
        </div>
        -->
    <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->

    <?php include 'header.php' ?>
    
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <div class="single-slider-item set-bg" data-setbg="img/slider1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1>2022</h1>
                            <h2>Collection</h2>
                            <!-- <a href="#" class="primary-btn">See More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color:black">2022</h1>
                            <h2 style="color:black">Collection</h2>
                            <!-- <a href="#" class="primary-btn">See More</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item set-bg" data-setbg="img/slider3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 style="color:black">2022</h1>
                            <h2 style="color:black">Collection</h2>
                            <!-- <a href="#" class="primary-btn">See More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Slider End -->

    <!-- Features Section Begin -->
    <section class="features-section spad">
        <div class="features-ads">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-features-ads first">
                            <img src="img/icons/f-delivery.png" alt="">
                            <h4>Free shipping</h4>
                            <p> </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads second">
                            <img src="img/icons/coin.png" alt="">
                            <h4>100% Money back </h4>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-features-ads">
                            <img src="img/icons/chat.png" alt="">
                            <h4>Online support 24/7</h4>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features Box -->
        <div class="features-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-box-item first-box">
                                    <img src="img/fbox1.jpg" alt="">
                                    <div class="box-text">
                                        <div style="padding-top:-100px;padding-right:200px; ">
                                        <span class="trend-year">2022 New </span>
                                        <h2>Shades</h2>
                                    </div>
                                        <span class="trend-alert"></span>
                                    
                                        <!-- <a href="#" class="primary-btn">See More</a> -->

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="single-box-item second-box">
                                    <img src="img/fbox2.jpg" alt="">
                                    <div class="box-text">
                                        <div style="padding-top:150px;padding-right:200px;padding-left:180px; ">

                                        <span class="trend-year">2022 </span>
                                        <h2> Best of blushes</h2>
                                    </div>
                                        <span class="trend-alert"></span>
                                         <!-- <a href="#" class="primary-btn">See More</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-box-item large-box">
                            <img src="img/fbox3.jpg" alt="">
                            <div class="box-text">
                                <div style="margin-top:-50px;padding-left: 90px;">
                                <span class="trend-year">2022 </span>
                                <h2 style="font-size:50px">Highlighters</h2>
                           
                                <div class="trend-alert">collection</div>
                                 </div>
                                <!-- <a href="#" class="primary-btn">See More</a> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features Section End -->

    <!-- Latest Product Begin -->
    <section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <ul class="product-controls">
                            <li data-filter="*">All</li>
                            <li data-filter=".lipsticks">Lipsticks</li>
                            <li data-filter=".blushes">Blushes</li>
                            <li data-filter=".highlighters">Highlighters</li>
                            <li data-filter=".foundations">Foundations</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-xxl">
    <div class="row">
        <div class="col-md-12">
            <br><br>
            <h2>Cosmetics</b></h2>
            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
            <!-- Carousel indicators -->
            <!-- <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>  -->  
            <!-- Wrapper for carousel items -->
            <div class="carousel-inner">
                <div class="item carousel-item active">
                    <div class="row">
                        <?php 

                        $stmt=$admin->ret("SELECT * FROM `product`");
                        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){?>

                            <div class="col-sm-4" style="padding:30px">
              <div class="thumb-wrapper">
                <!-- <span class="wish-icon"><i class="fa fa-heart-o"></i></span> -->
                <div class="img-box">
                  <img style="height:350px;width:auto;" src="furnigo/upload/<?php echo $row['prod_image'] ?>" class="img-fluid" alt="">                 
                </div>
                <div class="thumb-content">
                  <h4><b><?php echo $row['prod_name'] ?></b></h4> 
                  <br>
                  <p class="item-price"><?php echo $row['prod_description'] ?></p>
                  <!-- <p class="item-price"><?php echo $d_arr[$row['s_id']] ?></p> -->

                  
                  <p class="item-price">₹  <b><?php echo $row['price'] ?></b></p>
                  <a href="controller/add_to_cart.php?prod_id=<?php echo $row['prod_id'] ?> & price=<?php echo $row['price'] ?> & c_id=<?php echo $cid ?> " class="btn btn-primary" style="color:black">Add to Cart</a>
                </div>            
              </div>
            </div>
        <?php }?>
                        
                              
                                                     
                        
                    </div>
                </div>  
               
                
            </div>
            <!-- Carousel controls -->
            <!-- <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a> -->
        </div>
        </div>
    </div>
                        </div>
            </div>
        </div>
    </section>
    <!-- Latest Product End -->

    <!-- Lookbok Section Begin -->
    <section class="lookbok-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 offset-lg-1">
                    <div class="lookbok-left">
                        <div class="section-title">
                            <h2>2022 <br />#collection</h2>
                        </div>
                        <p>B-Light is one stop shop for all your glamour and beauty needs. Largest e-commerce store for makeup and beauty products. BlushMe Aims at providing a hassle free and enjoyable shopping experience to shoppers across the country with the widest range of products on its portal. products are making a concious effort to bring the power of beauty to the shoppers with a array of latest and trendiest cosmetics available in the country. </p>
                        <a href="#" class="primary-btn look-btn">See More</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="lookbok-pic">
                        <img src="img/cover.jpg" alt="">
                        <div class="pic-text">BL </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Lookbok Section End -->

    <!-- Logo Section Begin -->
    <div class="logo-section spad">
        <div class="logo-items owl-carousel">
            <div class="logo-item">
                <img src="" alt="">
            </div>
            <div class="logo-item">
                <img src="" alt="">
            </div>
            <div class="logo-item">
                <img src="" alt="">
            </div>
            <div class="logo-item">
                <img src="" alt="">
            </div>
            <div class="logo-item">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <!-- Logo Section End -->

    <!-- Footer Section Begin -->
    <?php include 'footer.php' ?>
    
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>