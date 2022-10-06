<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="grocery,grocery meaning,grocery ,meaning in hindi,grocery store,grocery delivery in indore,grocery items,grocery shop,grocery store near me,grocery store indore,grocery app,grocery app in indore,grocery app design,grocery amazon,grocery app names,grocery amazon quiz,grocery app in gwalior,grocery app in bhopal,grocery banner,grocery business,grocery bag,grocery basket,grocery bill,grocery background,grocery billing software,grocery banner images,grocery category,grocery company,grocery cart,grocery containe,grocery card,grocery category list,grocery codecanyon,grocery clipart,grocery delivery,grocery delivery near me,grocery delivery ujjain,grocery delivery in bhopal,grocery delivery app,grocery delivery in jabalpur,grocery distributors,grocery ecommerce,grocery ecommerce website,grocery essentials,grocery e commerce websites in india,grocery ecommerce app,grocery ecommerce website template,grocery expenses,grocery https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcutsecommerce platform,grocery franchise,grocery factory,grocery flipkart,grocery foo,grocery for you,grocery franchise in india,grocery food items,grocery from amazon,grocery gst rat,grocery goods,grocery gst,grocery gst hsn code,grocery grofers,grocery guru,grocery gateway,grocery game,grocery home delivery,grocery hindi meaning,grocery home delivery indore,grocery home delivery in bhopal,grocery home delivery in jabalpur,grocery home delivery in gwalior,grocery hsn code,grocery home delivery near me,grocery items list,grocery items list in hind,grocery in hindi,grocery images,grocery items price list,groceries image png,grocery items images,grocery jabalpur,grocery jobs near me,grocery jio,grocery jobs,grocery jar,grocery junction,grocery jokes,grocery jute bags,grocery kit,grocery ka matlab,grocery ka hindi meaning,grocery kya hota hai,grocery ka saman,grocery ka hindi,grocery kart,grocery kit for donation,grocery list,grocery list in hindi,grocery logo,grocery list pdf,grocery list in hindi pdf,grocery list india  ,grocery list app">
		<meta name="author" content="">
	    <meta name="keywords" content="grocery,grocery meaning,grocery ,meaning in hindi,grocery store,grocery delivery in indore,grocery items,grocery shop,grocery store near me,grocery store indore,grocery app,grocery app in indore,grocery app design,grocery amazon,grocery app names,grocery amazon quiz,grocery app in gwalior,grocery app in bhopal,grocery banner,grocery business,grocery bag,grocery basket,grocery bill,grocery background,grocery billing software,grocery banner images,grocery category,grocery company,grocery cart,grocery containe,grocery card,grocery category list,grocery codecanyon,grocery clipart,grocery delivery,grocery delivery near me,grocery delivery ujjain,grocery delivery in bhopal,grocery delivery app,grocery delivery in jabalpur,grocery distributors,grocery ecommerce,grocery ecommerce website,grocery essentials,grocery e commerce websites in india,grocery ecommerce app,grocery ecommerce website template,grocery expenses,grocery https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcutsecommerce platform,grocery franchise,grocery factory,grocery flipkart,grocery foo,grocery for you,grocery franchise in india,grocery food items,grocery from amazon,grocery gst rat,grocery goods,grocery gst,grocery gst hsn code,grocery grofers,grocery guru,grocery gateway,grocery game,grocery home delivery,grocery hindi meaning,grocery home delivery indore,grocery home delivery in bhopal,grocery home delivery in jabalpur,grocery home delivery in gwalior,grocery hsn code,grocery home delivery near me,grocery items list,grocery items list in hind,grocery in hindi,grocery images,grocery items price list,groceries image png,grocery items images,grocery jabalpur,grocery jobs near me,grocery jio,grocery jobs,grocery jar,grocery junction,grocery jokes,grocery jute bags,grocery kit,grocery ka matlab,grocery ka hindi meaning,grocery kya hota hai,grocery ka saman,grocery ka hindi,grocery kart,grocery kit for donation,grocery list,grocery list in hindi,grocery logo,grocery list pdf,grocery list in hindi pdf,grocery list india  ,grocery list app">
	    <meta name="robots" content="all">
	    <title>Apna Kiranas | Track Orders</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">
		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Track your orders</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="track-order-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
	<h2>Track your Order</h2>
	<span class="title-tag inner-top-vs">Please enter your Order ID in the box below and press Enter. This was given to you on your receipt and in the confirmation email you should have received. </span>
	<form class="register-form outer-top-xs" role="form" method="post" action="order-details.php">
		<div class="form-group">
		    <label class="info-title" for="exampleOrderId1">Order ID</label>
		    <input type="text" class="form-control unicase-form-control text-input" name="orderid" id="exampleOrderId1" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Registered Email</label>
		    <input type="email" class="form-control unicase-form-control text-input" name="email" id="exampleBillingEmail1" >
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Track</button>
	</form>	
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div 

<?php echo include('includes/brands-slider.php');?>
</div>
</div>
<?php include('includes/footer.php');?>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	
	<script src="assets/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>