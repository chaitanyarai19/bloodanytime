<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else{
// Code forProduct deletion from  wishlist	
$wid=intval($_GET['del']);
if(isset($_GET['del']))
{
$query=mysqli_query($con,"delete from wishlist where id='$wid'");
}


if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	$query=mysqli_query($con,"delete from wishlist where productId='$id'");
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);	
header('location:my-wishlist.php');
}
		else{
			$message="Product ID is invalid";
		}
	}
}

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

	    <title>Apna Kiranas | My wishlist</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">

		<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
		<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
		<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
		<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
		<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
		<!-- Demo Purpose Only. Should be removed in production : END -->

		
		<!-- Icons/Glyphs -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Fonts --> 
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
				<link rel="shortcut icon" href="layouts/orgain/22.png">

<!--new-->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="layouts/orgain/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/style.css" type="text/css">	
	</head>
    <body class="cnt-home">
<?php include("aabb.php"); ?>        
        
<header class="header-style-1">

	<!-- ============================================== TOP MENU ============================================== -->
<?php //include('includes/top-header.php');?>
<!-- ============================================== TOP MENU : END ============================================== -->
<?php //include('includes/main-header.php');?>
	<!-- ============================================== NAVBAR ============================================== -->
<?php //include('includes/menu-bar.php');?>
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Wishlish</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="my-wishlist-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12 my-wishlist">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th colspan="4">my wishlist</th>
				</tr>
			</thead>
			<tbody>
<?php
$ret=mysqli_query($con,"select products.productName as pname,products.productName as proid,products.productImage1 as pimage,products.productPrice as pprice,wishlist.productId as pid,wishlist.id as wid from wishlist join products on products.id=wishlist.productId where wishlist.userId='".$_SESSION['id']."'");
$num=mysqli_num_rows($ret);
	if($num>0)
	{
while ($row=mysqli_fetch_array($ret)) {

?>

				<tr>
					<td class="col-md-2"><img src="admin/productimages/<?php echo htmlentities($row['pid']);?>/<?php echo htmlentities($row['pimage']);?>" alt="<?php echo htmlentities($row['pname']);?>" width="80" height="80"></td>
					<td class="col-md-6">
						<div class="product-name"><a href="product-details.php?pid=<?php echo htmlentities($pd=$row['pid']);?>"><?php echo htmlentities($row['pname']);?></a></div>
<?php $rt=mysqli_query($con,"select * from productreviews where productId='$pd'");
$num=mysqli_num_rows($rt);
{
?>

						<div class="rating">
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star rate"></i>
							<i class="fa fa-star non-rate"></i>
							<span class="review">( <?php echo htmlentities($num);?> Reviews )</span>
						</div>
						<?php } ?>
						<div class="price">Rs. 
							<?php echo htmlentities($row['pprice']);?>.00
							<span>$900.00</span>
						</div>
					</td>
					<td class="col-md-2">
						<a href="my-wishlist.php?page=product&action=add&id=<?php echo $row['pid']; ?>" class="btn-upper btn btn-primary">Add to cart</a>
					</td>
					<td class="col-md-2 close-btn">
						<a href="my-wishlist.php?del=<?php echo htmlentities($row['wid']);?>" onClick="return confirm('Are you sure you want to delete?')" class=""><i class="fa fa-times"></i></a>
					</td>
				</tr>
				<?php } } else{ ?>
				<tr>
					<td style="font-size: 18px; font-weight:bold ">Your Wishlist is Empty</td>

				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
	<?php //include('includes/brands-slider.php');?>
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
	
	<script src="layouts/orgain/js/jquery-3.3.1.min.js"></script>
    <script src="layouts/orgain/js/bootstrap.min.js"></script>
    <script src="layouts/orgain/js/jquery-ui.min.js"></script>
    <script src="layouts/orgain/js/jquery.slicknav.js"></script>
    <script src="layouts/orgain/js/mixitup.min.js"></script>
    <script src="layouts/orgain/js/owl.carousel.min.js"></script>
    <script src="layouts/orgain/js/main.js"></script>
</body>
</html>
<?php } ?>