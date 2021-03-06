<?php
  include_once 'ProduitC.php';
  if (isset($_POST["id"])){
  $p = new ProduitC();
  $liste = $p->afficherProduitParId($_POST["id"]);
  $c = $p->afficherCategorie();
 
?>
<?php
/*
* Author: Rohit Kumar
* Website: iamrohit.in
* Date: 09-03-2016
* App Name: Star rating system
* Description: Star rating demo using Jquery, PHP and Mysql
*/
include_once('ratingg.php')
?>
<!doctype html>
<html class="no-js" lang="">
  
<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:32:44 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIGO-Health Supplement Landing Page HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- =========================
        Loding All Stylesheet
    ============================== -->
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/range.css">

    <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- =========================
        Header Loding JS Script
    ============================== -->
    <script src="js/modernizr.js"></script>

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
<link href="css2/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js"></script>
    
    <script src="js2/star-rating.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/rech.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


   
  </head>
  <body id="vigo_body">
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

   

    <!-- ==============================
        Header top
    =================================== -->
   

    <!-- ==============================
        Main Navbar
    =================================== -->
     <!-- =========================
        Loding Main Theme Style
    ============================== -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css" type="text/css">

    <link id="theme" rel="stylesheet" href="assets/css/theme-color/theme-default.css" type="text/css">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700%7CRoboto:300,400,500,700,900" rel="stylesheet">

<script src="js/modernizr.js"></script>

</head>

<body id="home-version-1" class="home-version-1" data-style="default">


    <div id="site">



        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header id="header" class="header_area hdr_area_two">
            <!-- Start top toolbar -->
            <section class="top_toolbar top_toolbar_new">
                <div class="vigo_container_one">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="toolbar_left">
                                <p><span>Get 30% Discounts!</span> Offer ends in</p>
                                <div id="count_down"></div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="toolbar_right">
                                <ul>
                                    <li class="search">
                                        <i class="fas fa-search"></i>
                                        <div class="search_detail_two">
                                            <form action="#">
                                                <input type="text" placeholder="Search Your key">
                                                <button>Go</button>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <div class="cart_detail">
                                            <div class="single_cart">
                                                <div class="cart_left">
                                                    <img src="media/images/banner-two/cart-one.png" alt="">
                                                </div>
                                                <div class="cart_right">
                                                    <h3>Vaxin Regular Big Name</h3>
                                                    <p>$66 <sup>USD</sup></p>
                                                </div>
                                            </div>
                                            <div class="single_cart">
                                                <div class="cart_left">
                                                    <img src="media/images/banner-two/cart-two.png" alt="">
                                                </div>
                                                <div class="cart_right">
                                                    <h3>Vaxin Woman</h3>
                                                    <p>$76 <sup>USD</sup></p>
                                                </div>
                                            </div>
                                            <div class="cart_more">
                                                <a href="#">View Cart <i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="phone">
                                        <a href="#">
                            <i class="fas fa-phone"></i>
                            Appeler +216 24 733 220
                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End top toolbar -->

            <!-- Start Main Menu -->
            <section class="header_nav">
                <div class="vigo_container_one">
                    <div class="row">
                        <div class="col-auto mr-auto">
                            <div class="header_logo">
                                <a href="index.html">
                    <img src="assets/img/hm-two-logo.png" alt="">
                    
                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <nav class="main_menu">
                                <ul id="example-one">
                                    <li>
                                        <a href="index2.html">Acceuil</a>
                                        
                                    </li>
                                    <li>
                                        <a href="supplement2.html">Suppléments</a>
                                    </li>
                                    <li>
                                        <a href="productlist3.html">Produits</a>
                                        <ul class="sub-menu">
                                            <li><a href="productlist3.html">Liste des produits</a></li>
                                            <li><a href="blog2.html">A propos des produits</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="ingredient2.html">Ingrédients</a>
                                    </li>
                                    <li>
                                        <a href="blog-details2.html">Blog</a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="blog2.html">Promotions</a></li>
                                            <li><a href="blog-details2.html">Publicité</a></li>

                                        </ul>-->
                                    </li>
                                    <li>
                                        <a href="Livraison.html">Livraison</a>
                                    </li>
                                    <li>
                                        <a href="contact2.html">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact2.html">Contact</a></li>
                                            
                                        </ul>
                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto">
                            <div class="hdr_btn_wrapper">
                                <a href="#" class="btn_one">Acheter</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Main Menu -->

            <!-- Start Mobile Menu outer-->
            <section id="mobile-nav-wrap" class="clearfix">
                <div class="mobile_toolbar">
                    <div class="vigo_container_one">
                        <div class="top_toolbar_right">
                            <div class="phone_number">
                                <span class="flaticon-phone-call"></span> <a href="#">+216 24 733 220 </a>
                            </div>
                            <div class="header_login">
                                <div class="whc_toolbar_main_login">
                                    <a href="#" data-toggle="modal" data-target="#signUpModal">S'inscrire</a>|
                                    <a href="#" data-toggle="modal" data-target="#signInModal">Se connecter</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="vigo_container_one">
                    <div class="bottom_nav bottom_nav_two">
                        <div id="mobile-logo">
                            <a href="index.html">
                        <img src="assets/img/hm-two-logo.png" alt="">
                    </a>
                        </div>
                        <div class="toggle-inner">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Mobile Menu outer-->
        </header>

        <section class="mobile-menu-inner mobile-menu-inner-two">
            <div class="mobile_accor_togo">
                <div class="mobile_accor_logo">
                    <a href="index.html">
                <img src="assets/img/hm-two-logo.png" alt="">
            </a>
                </div>
                <div class="close-menu">
                    <span></span>
                </div>
            </div>
            <nav id="accordian">
                <ul class="accordion-menu">
                    <li class="current_page_item">
                        <a href="index.html" >Acceuil</a>
                
                    </li>
                    <li>
                        <a href="supplement2.html">Suppléments</a>
                    </li>
                    
                    <li>
                        <a href="productlist3.html" class="dropdownlink">Produits</a>
                        <ul class="submenuItems">
                            <li><i class="flaticon-right-arrow-angle"></i><a href="productlist3.html">Liste des produits</a></li>
                            <li><i class="flaticon-right-arrow-angle"></i><a href="blog2.html">A propos des produits</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="ingredient.html">Ingrédients</a>
                    </li>
                    <li>
                                        <a href="blog-details2.html">Blog</a>
                                        <!--<ul class="sub-menu">
                                            <li><a href="blog2.html">Promotions</a></li>
                                            <li><a href="blog-details2.html">Publicité</a></li>

                                        </ul>-->
                                    </li>
                    <li>
                                        <a href="contact2.html">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="contact2.html">Contact</a></li>
                                            
                                        </ul>
                    </li>
                </ul>
            </nav>
            <form action="#" id="moble-search">
                <input type="text" placeholder="Search....">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
            <ul class="footer-social-link">
                <li class="fb-bg"><a href="https://www.facebook.com/Fitness-shop-272609759866886/"><i class="fab fa-facebook-f"></i></a></li>
                
                
            </ul>
        </section>

        <!--=========================-->
        <!--=        Breadcrumb         =-->
        <!--=========================-->
        <section class="breadcrumb_area_two">
            <div class="breadcrumb_inner" data-bg-image="media/images/banner-two/bg-one.png">
                
                    
                        
                            
                                <h2></h2><font color="white" >.
                                <h2 style ="align="left" > A propos des produits</h2>
                            
                            <!-- /.page-header -->
                            <div class="breadcrumb_text">
                                <p><a href="index2.html">Accueil</a> | <span>A propos des produits</span></p>
                            
                        
                        <!-- /.col-12 -->
                    
                    <!-- /.row -->
                </div>
                <!-- /.vigo_container_two -->
            

        </section>

    <!-- ==============================
        Slider Section
    =================================== -->
   
    
    <!-- ==============================
        Call To Action Section
    =================================== -->
   

    <!-- ==============================
        Features Section
    =================================== -->
   

    <!-- ==============================
        Services Section
    =================================== -->
   

    <!-- ==============================
        About Section
    =================================== -->
   

    <!-- ==============================
        Product Features Section
    =================================== -->
  

    <!-- ==============================
        Recommended Section
    =================================== -->
   

    <!-- ==============================
        Newsletter Section
    =================================== -->
   

    <!-- ==============================
        Gallery Section
    =================================== -->
   <!-- <section class="gallery">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        <h5 class="page-sub-title mr-0">Our Best</h5>
                        <h3 class="page-main-title mr-0">Product Gallery</h3>

<h1>Recherche de Produit </h1>
 <form  action="test.php" method="GET" style="margin:auto;max-width:300px">
                                          <input type="text" placeholder="Search.." name="nom" >
                                           <button type="submit" value="rechercher" name="recherche"><i class="fa fa-search"></i></button>
                                                 </form>

                    </div>
                </div>

                <div class="col-12 col-sm-10 col-md-11 col-lg-12 col-xl-12">
                   
                    <div  class="btn-group gallery-filter-btn-group">

                        <div class="gallery-menu-box">
                           <button type="button"  data-filter="all" class="ral btn border-0   btn-secondary cursor-pointer focus-none">
                            All</button>
                            <button type="button" data-filter=".category-a" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Protein</button>
                            <button type="button" data-filter=".category-b" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Life Style</button>
                            <button type="button" data-filter=".category-c" class="ral btn border-0 btn-secondary cursor-pointer focus-none" value="">Nutrition</button>
                            <button type="button" data-filter=".category-d" class="ral btn border-0 btn-secondary cursor-pointer focus-none">Vitamins</button>
                        </div>
                    
                    </div>

                    <div class="mixitup row">
                    <?php foreach($c  as $l){ 
                        ?>
                        <form method="GET" action="produit_categorie.php">
                          <div class="mix category-a col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" data-order="1">
                            <div class="filtr-item">

                                  
                                <div class="gallery-hover">
                                    <div class="gallery-img-box pos-r">
                                        <!--<a href="../../uploads/<?php echo $l['image'] ?>" class="image-link gallery-overlay" >-
                                            
                                           <!--<div class="search-icon">
                                               <h6>Description: <?php echo $l['description'] ?></h6>
                                           </div>
                                            <img class="img-fluid" src="../../uploads/<?php echo $l['image'] ?>" alt="sample image">-
                                        </a>
                                    </div>
                                    <div class="gallery-content-box text-center">
                                        <input type="hidden" name="id" value="<?php echo  $l['id_categorie']?>">
                                        <input type="submit" name="n" value="<?php echo $l['nom_categorie'] ?>">
                                        
                                        <!--<p class="gallery-category ral mr-0" >Price: <?php echo $l['prix'] ?></p>--
                                    </div>
                                </div>
                            </div>
                        </div>  

                        </form>
                        
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- ==============================
        Price Section
    =================================== -->
   

    <!-- ==============================
        Process Section
    =================================== -->
   
    <!-- ==============================
        Ingredients Section
    =================================== -->
   

    <!-- ==============================
        Testimonial Section
    =================================== -->
   

    <!-- ==============================
        Product Section
    =================================== -->
    <section class="vigo-product" id="vigo-product">
        <div class="container custom-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title text-center">
                        
                        
                    </div>
                </div>
                
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                   
                    <div class="product-box">
                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <?php foreach($liste as $l){ ?>
                                <li>
                                    <img src="uploads/<?php  echo $l['image'] ?>" class="cursor-pointer"  alt="product image">
                                    
                                </li>
                                
                               
                                <!-- items mirrored twice, total of 12 -->
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>
                 

                </div>

                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7 product-box-content">
                    <div class="d-flex flex-column-reverse flex-md-column">
                        <div class="product-box">
                            <div class="product-box-title">
                                <h5><?php echo $l["nom"]?></h5>                            
                            </div>
                            <div class="d-flex justify-content-center justify-content-md-start">
                            <div class="product_rating d-flex">
                               <input value="<?= getRatingByProductId(connect(), $l["id"]); ?>" type="number" class="rating" min=0 max=5 
    step=0.1 data-size="md" data-stars="5" productId=<?php echo $l["id"]?>>
    </td>
    </tr></table>

     <script type="text/javascript">
        $(function(){
               $('.rating').on('rating.change', function(event, value, caption) {

                productId = $(this).attr('productId');
                $.ajax({
                  url: "ratingg.php",
                  dataType: "json",
                  data: {vote:value, productId:productId, type:'save'},
                  success: function( data ) {
                     alert("rating saved");
                  },
              error: function(e) {
                // Handle error here
                console.log(e);
              },
              timeout: 30000  
            });
              });

           


        });
    </script>
                               
                            </div>
                            </div>
                            <div class="product-price green lato">
                                 <?php foreach($liste as $l){ ?>
                               <p> Price:<?php echo $l['prix'] ?> DT </p>
                                 <?php } ?>
                            </div>
                            <div class="product-content">
                                <p> Description du produit :<?php echo $l['description'] ?> DT </p>
                            </div>
                            <div class="product-quantity">
                                <form class="container">
                                    <div class="row d-flex justify-content-center justify-content-md-start">
                                        <div class="col-3 col-lg-1 pd-0 d-flex align-items-stretch">
                                            <input type="number" class="form-control border-transparent black focus-none" placeholder="1">
                                        </div>
                                        <div class="col-4">
                                            <a href="https://www.amazon.com/" target="_blank" class="btn ral btn-outline-primary vigo-btn hvr-shutter-out-horizontal bg-green border-transparent white focus-none">Ajouter au panier</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="product-view">
                            
                            <div id="carousel" class="flexslider">
                                <ul class="slides vigo-small-img">
                                    <?php foreach($liste as $l){ ?>
                                    <li>
                                       <img  src="uploads/<?php  echo $l['image'] ?>" class="cursor-pointer"  alt="product image">
                                    </li>
                                   
                                   
                                    <!-- <li>
                                        <img src="img/product-img-3.jpg" class="cursor-pointer" alt="product img">
                                    </li> -->
                                    <!-- items mirrored twice, total of 12 -->
                                    <?php } ?>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================
        Certification Section
    =================================== -->
   
    <!-- ==============================
        footer Section
    =================================== -->
    
<!--==========================-->
        <!--=        Content         =-->
        <!--==========================-->
        <footer class="footer_three_area">
            <div class="vigo_container_two">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="widget widget_three">
                            <div class="widget_logo">
                                <a>
                            <img src="assets/img/hm-two-logo.png" alt="#">

                        </a>
                            </div>
                            <div class="widget_three_desc">
                                <p>
                                    Copyright©
                                    <a href="#">FitnessShop</a><br> All Rights Reserved
                                </p>
                            </div>
                        </div>
                        <div class="widget widget_three">
                            <div class="widget_three_title">
                                <h3>COMPANY</h3>
                            </div>
                            <div class="widget_three_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    About us
                                </a>
                                    </li>
                                    <li>
                                        <a href="404-two.html">
                                    <i class="fas fa-caret-right"></i>
                                    Delivery Information
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Terms & Conditions
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_three">
                            <div class="widget_three_title">
                                <h3>LINKS</h3>
                            </div>
                            <div class="widget_three_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Link One
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Another link
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Lorem Ipsum
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_three">
                            <div class="widget_three_title">
                                <h3>PRIVACY</h3>
                            </div>
                            <div class="widget_three_list">
                                <ul>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Link One
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Another link
                                </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                    <i class="fas fa-caret-right"></i>
                                    Lorem Ipsum
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget_three">
                            <div class="widget_three_title">
                                <h3>FEED</h3>
                            </div>
                            <div class="widget_nwsfeed_list">
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-one.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-two.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-three.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-four.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-five.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-six.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-one.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-two.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-three.png" alt="">
                        </a>
                                <a href="#">
                            <img src="media/images/banner-two/nwsfeed-four.png" alt="">
                        </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- back to top -->
        <div class="backtotop backtop_two">
            <i class="fas fa-angle-double-up"></i>
        </div>
        <!-- back to top -->

        <!-- Sign in -->
        <div class="modal fade" id="signUpModal">
            <div class="modal-dialog">
                <div class="modal-body">
                    <div id="signup">
                        <div class="login-left">
                            <div class="login-title">
                                <h3>Sign in socially</h3>
                            </div>
                            <div class="login-social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="login-right">
                            <div class="login-title">
                                <h3>Sign Up through VIGO</h3>
                            </div>
                            <div class="login_main_form">
                                <form action="#">
                                    <input type="text" placeholder="Username">
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Password">
                                    <input type="text" placeholder="Confirm Password">
                                    <div class="select_wrapper">
                                        <select>
                                    <option value="Country">Country</option>
                                    <option value="England">England</option>
                                    <option value="America">America</option>
                                    <option value="India">India</option>
                                    <option value="Australia">Australia</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                                    </div>
                                    <label>
                                <input type="checkbox" name="vehicle" value="Bike">
                                 I'm over 18 and I agree<span> Terms & Conditions!</span>
                            </label>
                                    <input type="submit" value="sign in">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign in -->

        <!-- sign up -->
        <div class="modal fade" id="signInModal">
            <div class="modal-dialog">
                <div class="modal-body">
                    <div id="signup2">
                        <div class="login-left">
                            <div class="login-title">
                                <h3>Sign in socially</h3>
                            </div>
                            <div class="login-social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                    <span>Facebook</span>
                                </a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#">
                                    <i class="fab fa-twitter"></i>
                                    <span>Twitter</span>
                                </a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#">
                                    <i class="fab fa-pinterest-p"></i>
                                    <span>Pinterest</span>
                                </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="login-right">
                            <div class="login-title">
                                <h3>Sign in through Vigo</h3>
                            </div>
                            <div class="login_main_form">
                                <form action="#">
                                    <input type="text" placeholder="Email or Username">
                                    <input type="text" placeholder="Password">
                                    <label>
                                <input type="checkbox" name="vehicle" value="Bike">
                                Remember me
                                <span>Forgot your password</span>
                            </label>
                                    <input type="submit" value="sign in">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- =========================
        Main Loding JS Script
    ============================== -->
    
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplePlayer.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.flexslider.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>


  </body>

<!-- Mirrored from themeim.com/demo/vigo/demo/vigo-red/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Feb 2018 14:33:51 GMT -->
</html>
