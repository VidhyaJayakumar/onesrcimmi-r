<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Template | All Services</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!--Favicon-->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>
         
        <!-- Main Header / Header Style One-->
        <?php
        include "include-header.php";
    ?>
        
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/20.jpg)">
    	<div class="auto-container">
        	<h1>All Services</h1>
             </div>
    </section>
    <!--End Page Title-->
    
    <!--Cases Page Section-->
    <section class="project-section cases-page-section">
    	<div class="auto-container">
        	
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">                     
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">Immigrate</li>
                        <li class="filter" data-role="button" data-filter=".transport">Work In Canada</li>
                        <li class="filter" data-role="button" data-filter=".consumer">Visitor Visa</li>
                        <li class="filter" data-role="button" data-filter=".energy">Study Permit</li>
                        <li class="filter" data-role="button" data-filter=".business">Family Sponsorship</li>
                        <li class="filter" data-role="button" data-filter=".insurance">Citizenship</li>
                    </ul>
                </div>
				
                <div class="filter-list row clearfix">
                
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all energy col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/14.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="immigrate.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="immigrate.php">IMMIGRATE</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all energy consumer business col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/15.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="family-all-sponsorship.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="family-all-sponsorship.php">FAMILY SPONSORSHIP</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all consumer col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/16.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="work-in-canada.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="work-in-canada.php">WORK IN CANADA</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all energy insurance consumer col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/17.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="visit-canada.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="visit-canada.php">VISIT</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all business insurance col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/18.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="business-immigration.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="business-immigration.php">BUSINESS IMMIGRATION</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all consumer transport col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/19.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="study-canada.html" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="study-canada.html">STUDY</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all energy transport col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/20.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="citizenship.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="citizenship.php">CITIZENSHIP</a></h3>
                        </div>
                    </div>
                    
                    <!-- Gallery Item Two -->
                    <div class="gallery-item-two mix all insurance transport col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<div class="inner-box">
                            <figure class="image-box">
                                <img src="images/gallery/21.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="visa-renewal.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="visa-renewal.php">VISA RENEWAL</a></h3>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>
    <!--End Project Section-->
    
    <!--Main Footer-->
    <?php
        include "include-footer.php";
    ?>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/mixitup.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>
</html>