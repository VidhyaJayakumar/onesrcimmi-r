<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>HTML Template | Blog Sidebar</title>
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
        	<h1>Blog Sidebar</h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.html">Home</a></li>
                <li>Blog Sidebar</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <iframe src ="https://onesourceimmigration.wordpress.com/blog" width="100%" height="500" frameborder="0">

                <p>Your browser does not support iFrames.</p>
                </iframe>

            </div>
        </div>
    </div>

    <!-- start sw-rss-feed code --> 
    <script type="text/javascript"> 
    
    rssfeed_url = new Array(); 
    rssfeed_url[0]="canadim.com/feed";  
    rssfeed_frame_width="400"; 
    rssfeed_frame_height="300"; 
    rssfeed_scroll="on"; 
    rssfeed_scroll_step="6"; 
    rssfeed_scroll_bar="off"; 
    rssfeed_target="_blank"; 
    rssfeed_font_size="12"; 
    rssfeed_font_face=""; 
    rssfeed_border="on"; 
    rssfeed_css_url="https://feed.surfing-waves.com/css/style3a.css"; 
    rssfeed_title="off"; 
    rssfeed_title_name=""; 
    rssfeed_title_bgcolor="#3366ff"; 
    rssfeed_title_color="#fff"; 
    rssfeed_title_bgimage=""; 
    rssfeed_footer="off"; 
    rssfeed_footer_name="rss feed"; 
    rssfeed_footer_bgcolor="#fff"; 
    rssfeed_footer_color="#333"; 
    rssfeed_footer_bgimage=""; 
    rssfeed_item_title_length="50"; 
    rssfeed_item_title_color="#666"; 
    rssfeed_item_bgcolor="#fff"; 
    rssfeed_item_bgimage=""; 
    rssfeed_item_border_bottom="on"; 
    rssfeed_item_source_icon="off"; 
    rssfeed_item_date="off"; 
    rssfeed_item_description="on"; 
    rssfeed_item_description_length="120"; 
    rssfeed_item_description_color="#666"; 
    rssfeed_item_description_link_color="#333"; 
    rssfeed_item_description_tag="off"; 
    rssfeed_no_items="0"; 
    rssfeed_cache = "a825009768938312871afa16740fa0d0"; 

    </script> 
    <script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
    <!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
    <div style="color:#ccc;font-size:10px; text-align:right; width:400px;">powered by <a href="https://surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;">Surfing Waves</a></div> 
    <!-- end sw-rss-feed code -->

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