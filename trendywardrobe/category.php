<?php
session_start();
error_reporting(0);
include('includes/config.php');
$cid=intval($_GET['cid']);
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:'.$_SERVER['HTTP_REFERER']);
				}else{
			$message="Product ID is invalid";
		}
	}
}
// COde for Wishlist
if(isset($_GET['pid']) && $_GET['action']=="wishlist" ){
	if(strlen($_SESSION['login'])==0)
    {   
header('location:login.php');
}
else
{
mysqli_query($con,"insert into wishlist(userId,productId) values('".$_SESSION['id']."','".$_GET['pid']."')");
echo "<script>alert('Product aaded in wishlist');</script>";
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

	    <title>Apna Kiranas | Products</title>

	    <!-- Bootstrap Core CSS -->
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
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="layouts/orgain/22.png">

<style>
    .category-carousel .item .caption {
        left:5px;
    }
</style>

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
</div><!-- /.breadcrumb -->
<style>
    .alert-success{
         font-size: 18px;
        padding: 8px;
        font-weight: 600;
        top: 0pc;
        width: 100%;
       position: fixed;
       z-index: 11111111111111111;
    }
</style>
<div class="" id="successMsg"></div>
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row outer-bottom-sm'>
		    
		<!--	<div class='col-md-3 sidebar'>
	           
<div class="side-menu animate-dropdown outer-bottom-xs">       
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i>Sub Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item">
              <?php //$sql=mysqli_query($con,"select id,subcategory  from subcategory where categoryid='$cid'");

//while($row=mysqli_fetch_array($sql))
//{
    ?>
                <a href="sub-category.php?scid=<?php //echo $row['id'];?>" class="dropdown-toggle"><i class="icon fa fa-desktop fa-fw"></i>
                <?php //echo $row['subcategory'];?></a>
                <?php //}?>
                        
</li>
</ul>
    </nav>
</div>
</div>
        
<div class="sidebar-module-container">
	            	<h3 class="section-title">shop by</h3>
	            	<div class="sidebar-filter">
		            
<div class="sidebar-widget wow fadeInUp outer-bottom-xs ">
	
	
</div>



    

	            	</div>
	            </div>
            </div>-->
            
			<div class='col-md-9' style="width:100%;">
					<!-- ========================================== SECTION – HERO ========================================= -->

	<div id="category" class="category-carousel hidden-xs">
		<div class="item">
		    	
			<div class="image">
				<img style="height:300px;" src="assets/images/sliders/atta.jpg" alt="" class="img-responsive">
			</div>
			
			<div class="container-fluid">
				<div class="caption vertical-top text-left">
					<div class="big-text">
						<br />
					</div>

					       <?php //$sql=mysqli_query($con,"select categoryName  from category where id='$cid'");
//while($row=mysqli_fetch_array($sql))
//{
    ?>

					<div class="excerpt hidden-sm hidden-md">
						<?php //echo htmlentities($row['categoryName']);?>
					</div>
			<?php //} ?>
			
				</div><!-- /.caption -->
			</div><!-- /.container-fluid -->
		</div>
</div>

				<div class="search-result-container" style="margin-top:50px;">
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active " id="grid-container">
							<div class="category-product  inner-top-vs">
								<div class="row">									
			<?php
$ret=mysqli_query($con,"select * from products where category='$cid'");
$num=mysqli_num_rows($ret);
if($num>0)
{
while ($row=mysqli_fetch_array($ret)) 
{?>							
		<div class="col-sm-6 col-md-3 col-xs-6 wow fadeInUp">
			<div class="products">				
	<div class="product">		
		<div class="product-image">
			<div class="image">
				<a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><img  src="assets/images/blank.gif" data-echo="admin/productimages/<?php echo htmlentities($row['id']);?>/<?php echo htmlentities($row['productImage1']);?>" alt="" width="150" height="120"></a>
			</div><!-- /.image -->			                      		   
		</div><!-- /.product-image -->
			
		<br>
		<div class="product-info text-left">
			<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productName']);?></a></h3>
				<h3 class="name"><a href="product-details.php?pid=<?php echo htmlentities($row['id']);?>"><?php echo htmlentities($row['productquantity']);?></a></h3>
			<div class="rating rateit-small"></div>
			<div class="description"></div>

			<div class="product-price">	
				<span class="price">
					Rs. <?php echo htmlentities($row['productPrice']);?>			</span>
										     <!--<span class="price-before-discount">
										         <?php
                                                    //if(((int)$row['productPriceBeforeDiscount']) > 0) {
                                                       // echo htmlentities("Rs. "."$row[productPriceBeforeDiscount]");
                                                   // }
                                                ?>
										     </span>-->
									
			</div><!-- /.product-price -->
			
		</div><!-- /.product-info -->
					<div class="cart clearfix animate-effect">
				<div class="action">
					<ul class="list-unstyled">
					    
					    
						<li class="add-cart-button btn-group">
						
								<?php if($row['productAvailability']=='In Stock'){?>
							<!--<button class="btn btn-primary icon" data-toggle="dropdown" type="button">
									<a class="add-to-cart" href="category.php?pid=<?php echo htmlentities($row['id'])?>&&action=wishlist" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>												
							</button>-->
							<li class="btn btn-primary icon" style="background:#2F2F31;">
							<a class="add-to-cart" href="category.php?pid=<?php //echo htmlentities($row['id'])?>&&action=wishlist" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>&nbsp;&nbsp;
							<!--page=product&action=add&id="-->
							<a onclick="addToCart('<?php echo $row['id']?>')" >
							<button class="btn btn-primary" type="button" style="background:#7fad39;">Add to cart</button></a>
								<?php } else {?>
							<div class="action" style="color:red">Out of Stock</div>
					<?php } ?>
													
						</li>
	                   
		                <!--<li class="lnk wishlist">
							<a class="add-to-cart" href="category.php?pid=<?php //echo htmlentities($row['id'])?>&&action=wishlist" title="Wishlist">
								 <i class="icon fa fa-heart"></i>
							</a>
						</li>-->

						
					</ul>
				</div><!-- /.action -->
			</div><!-- /.cart -->
			</div>
			</div>
		</div>
	  <?php } } else {
	  exit();
	  ?>
		</div>
		
<?php } ?>	
		
	
		
		
	
		
	
		
	
		
										</div><!-- /.row -->
							</div><!-- /.category-product -->
						
						</div><!-- /.tab-pane -->
						
				

				</div><!-- /.search-result-container -->

			</div><!-- /.col -->
		</div></div>
		<?php //include('includes/brands-slider.php');?>

</div>
</div>
<?php include('includes/footer.php');?>


    <!-- Js Plugins -->
    <script src="layouts/orgain/js/jquery-3.3.1.min.js"></script>
    <script src="layouts/orgain/js/bootstrap.min.js"></script>
    <script src="layouts/orgain/js/jquery-ui.min.js"></script>
    <script src="layouts/orgain/js/jquery.slicknav.js"></script>
    <script src="layouts/orgain/js/mixitup.min.js"></script>
    <script src="layouts/orgain/js/owl.carousel.min.js"></script>
    <script src="layouts/orgain/js/main.js"></script>

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
	<script>
	$(function () {
    $('button').on('click', function () {
        var id = $(this).val();
        $.ajax({
            url: 'category.php',
            data: {
                add: id
            },
            dataType : 'json'
        });
    });
});

	function addToCart(id)
		{
		     $.ajax({
                    
                    url : 'addtocartAJAX.php',
                    type : 'POST',
                    data : {
                    'id' : id
                    },
                    
                    success : function(json) {
                        console.log(json);
                       var response = JSON.parse(json);
                       if(response.status == 1)
                       {
                          // window.scrollTo({top: 0, behavior: 'smooth'});

                           $("#successMsg").html('<div class="alert alert-success text-center " id="msgg" >'+response.message+'</div>');
                           $('#msgg').delay(1500).slideUp();
                           $("#load_qty").load(location.href + " #load_qty");
                            $("#load_qty2").load(location.href + " #load_qty2");
                       }
                            
                    },
                    
            });
		}
</script>

	

</body>
</html>