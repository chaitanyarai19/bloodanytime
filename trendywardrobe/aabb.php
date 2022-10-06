<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="grocery,grocery meaning,grocery ,meaning in hindi,grocery store,grocery delivery in indore,grocery items,grocery shop,grocery store near me,grocery store indore,grocery app,grocery app in indore,grocery app design,grocery amazon,grocery app names,grocery amazon quiz,grocery app in gwalior,grocery app in bhopal,grocery banner,grocery business,grocery bag,grocery basket,grocery bill,grocery background,grocery billing software,grocery banner images,grocery category,grocery company,grocery cart,grocery containe,grocery card,grocery category list,grocery codecanyon,grocery clipart,grocery delivery,grocery delivery near me,grocery delivery ujjain,grocery delivery in bhopal,grocery delivery app,grocery delivery in jabalpur,grocery distributors,grocery ecommerce,grocery ecommerce website,grocery essentials,grocery e commerce websites in india,grocery ecommerce app,grocery ecommerce website template,grocery expenses,grocery https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcutsecommerce platform,grocery franchise,grocery factory,grocery flipkart,grocery foo,grocery for you,grocery franchise in india,grocery food items,grocery from amazon,grocery gst rat,grocery goods,grocery gst,grocery gst hsn code,grocery grofers,grocery guru,grocery gateway,grocery game,grocery home delivery,grocery hindi meaning,grocery home delivery indore,grocery home delivery in bhopal,grocery home delivery in jabalpur,grocery home delivery in gwalior,grocery hsn code,grocery home delivery near me,grocery items list,grocery items list in hind,grocery in hindi,grocery images,grocery items price list,groceries image png,grocery items images,grocery jabalpur,grocery jobs near me,grocery jio,grocery jobs,grocery jar,grocery junction,grocery jokes,grocery jute bags,grocery kit,grocery ka matlab,grocery ka hindi meaning,grocery kya hota hai,grocery ka saman,grocery ka hindi,grocery kart,grocery kit for donation,grocery list,grocery list in hindi,grocery logo,grocery list pdf,grocery list in hindi pdf,grocery list india  ,grocery list app">
		<meta name="author" content="">
	    <meta name="keywords" content="grocery,grocery meaning,grocery ,meaning in hindi,grocery store,grocery delivery in indore,grocery items,grocery shop,grocery store near me,grocery store indore,grocery app,grocery app in indore,grocery app design,grocery amazon,grocery app names,grocery amazon quiz,grocery app in gwalior,grocery app in bhopal,grocery banner,grocery business,grocery bag,grocery basket,grocery bill,grocery background,grocery billing software,grocery banner images,grocery category,grocery company,grocery cart,grocery containe,grocery card,grocery category list,grocery codecanyon,grocery clipart,grocery delivery,grocery delivery near me,grocery delivery ujjain,grocery delivery in bhopal,grocery delivery app,grocery delivery in jabalpur,grocery distributors,grocery ecommerce,grocery ecommerce website,grocery essentials,grocery e commerce websites in india,grocery ecommerce app,grocery ecommerce website template,grocery expenses,grocery https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcutsecommerce platform,grocery franchise,grocery factory,grocery flipkart,grocery foo,grocery for you,grocery franchise in india,grocery food items,grocery from amazon,grocery gst rat,grocery goods,grocery gst,grocery gst hsn code,grocery grofers,grocery guru,grocery gateway,grocery game,grocery home delivery,grocery hindi meaning,grocery home delivery indore,grocery home delivery in bhopal,grocery home delivery in jabalpur,grocery home delivery in gwalior,grocery hsn code,grocery home delivery near me,grocery items list,grocery items list in hind,grocery in hindi,grocery images,grocery items price list,groceries image png,grocery items images,grocery jabalpur,grocery jobs near me,grocery jio,grocery jobs,grocery jar,grocery junction,grocery jokes,grocery jute bags,grocery kit,grocery ka matlab,grocery ka hindi meaning,grocery kya hota hai,grocery ka saman,grocery ka hindi,grocery kart,grocery kit for donation,grocery list,grocery list in hindi,grocery logo,grocery list pdf,grocery list in hindi pdf,grocery list india  ,grocery list app">
	    <meta name="robots" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apna Kiranas | online grocery store</title>
    

  
    <link rel="stylesheet" href="layouts/orgain/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="layouts/orgain/css/style.css" type="text/css">
     <link rel="shortcut icon" href="layouts/orgain/22.png">
     <style>
.block {
  display: block;
  width: 160px;
  border: none;
  background-color: #4CAF50;
  color: white;
  padding: 12px 16px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
}

</style>
</head>

<body>

<!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="index.php"><img src="layouts/orgain/logo.jpg" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>0</span></a></li>
                <li><a href="my-cart.php"><i class="fa fa-shopping-bag"></i> <div id="load_qty"><span><?php echo $_SESSION['qnty'];?></span></div></a></li>
                     </ul>
                                            <?php
if(!empty($_SESSION['cart'])){
	?>
                            
                            <?php }?>
                        
                        
                        		 <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>
                        
               <?php } }?>         
                        <div class="header__cart__price">item: <span>Rs <?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__auth">
                                	<?php if(strlen($_SESSION['login'])==0)
  {   ?>
<a href="login.php"><i class="fa fa-user"></i>Login &nbsp;&nbsp;|</a>

<?php }
else{ ?>
	<a href="logout.php"><i class="fa fa-user"></i>Logout | </a> 
		<?php } ?>
            </div>
            <div class="header__top__right__auth">
                 <!--<a href="track-orders.php"><i class="fa fa-truck"></i> Track Order</a>-->
                <a href="my-account.php"><i class="fa fa-user"></i>My Account </a>
            </div><br>
           <div class="header__top__right__auth">
                 
                <a href="order-history.php"><i class="fa fa-shopping-bag"></i>My Orders </a>
            </div>

            
        </div>
        <nav class="humberger__menu__nav mobile-menu">
                <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="category.php?cid=7">Farming Vehicles</a>
                <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=13" style="color:#fff;margin-left:5px;">Tractors</a></li>
                        <li><a href="sub-category.php?scid=14" style="color:#fff;margin-left:5px;">Combine or Harvester</a></li>
                        <li><a href="sub-category.php?scid=15" style="color:#fff;margin-left:5px;">ATV or UTV</a></li>
                        
                    </ul>
                </li>
                <li><a href="category.php?cid=8">Tractor Attachments</a>
                    <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=30" style="color:#fff;margin-left:5px;">Plows</a></li>
                        <li><a href="sub-category.php?scid=31" style="color:#fff;margin-left:5px;">Harrows</a></li>
                        <li><a href="sub-category.php?scid=32" style="color:#fff;margin-left:5px;">Fertilizer Spreaders</a></li>
                        <li><a href="sub-category.php?scid=33" style="color:#fff;margin-left:5px;">Seeders</a></li>
                        <li><a href="sub-category.php?scid=34" style="color:#fff;margin-left:5px;">Balers</a></li>
                        <li><a href="sub-category.php?scid=35" style="color:#fff;margin-left:5px;">Wagons or Trailers</a></li>
                    </ul>
                </li>
                <li><a href="category.php?cid=9">Bakers & Chocolates</a>
                 <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=27" style="color:#fff;margin-left:5px;">Biscuits & Cookies</a></li>
                        <li><a href="sub-category.php?scid=28" style="color:#fff;margin-left:5px;">Chocolates & Candies</a></li>
                        <li><a href="sub-category.php?scid=29" style="color:#fff;margin-left:5px;">Breads</a></li>
                        <li><a href="sub-category.php?scid=46" style="color:#fff;margin-left:5px;">Butter & Cream</a></li>
                        <li><a href="sub-category.php?scid=48" style="color:#fff;margin-left:5px;">Indian Sweets</a></li>
                    </ul>
                </li>
                <li><a href="category.php?cid=10">Household</a>
                <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=23" style="color:#fff;margin-left:5px;">Detergents & Bars</a></li>
                        <li><a href="sub-category.php?scid=24" style="color:#fff;margin-left:5px;">Tiolet & FloorCleaners</a></li>
                        <li><a href="sub-category.php?scid=25" style="color:#fff;margin-left:5px;">Air Freshners</a></li>
                        <li><a href="sub-category.php?scid=26" style="color:#fff;margin-left:5px;">Dish Washers</a></li>
                        <li><a href="sub-category.php?scid=45" style="color:#fff;margin-left:5px;">Pooja Items</a></li>
                        
                    </ul>
                </li>
                <li><a href="category.php?cid=11">Personal Care</a>
                        <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=18" style="color:#fff;margin-left:5px;">Oral Care</a></li>
                        <li><a href="sub-category.php?scid=19" style="color:#fff;margin-left:5px;">Skin Care</a></li>
                        <li><a href="sub-category.php?scid=20" style="color:#fff;margin-left:5px;">Hair Care</a></li>
                        <li><a href="sub-category.php?scid=43" style="color:#fff;margin-left:5px;">Baby Care</a></li>
                        <li><a href="sub-category.php?scid=21" style="color:#fff;margin-left:5px;">Deos & Perfums</a></li>
                        <li><a href="sub-category.php?scid=22" style="color:#fff;margin-left:5px;">Personal Hygiene</a></li>
                        <li><a href="sub-category.php?scid=37" style="color:#fff;margin-left:5px;">Health Care</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        
        <div id="mobile-menu-wrap"></div>
        <!--<form method="#" action="#">
        <button class="block" type="submit">Upload List</button>
        </form>-->
        <br>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        

        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> apnakiranas@gmail.com.com</li>
                <?php if(strlen($_SESSION['login']))
    {   ?>
                                <li>Welcome - <b><?php echo htmlentities($_SESSION['fname']);?></b></li>
                                  <?php } ?> 
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    
                    <?php 
//session_start();

?>



                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> apnakiranas@gmail.com</li>
                                <?php if(strlen($_SESSION['login']))
    {   ?>
                                <li>Welcome - <b><?php echo htmlentities($_SESSION['fname']);?></b></li>
                                  <?php } ?> 
                            </ul>
                           
                        </div>
                         
                    </div>
                 
                    
                    <div class="col-lg-6">
                        
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__auth">
                                
                                                
                	<?php if(strlen($_SESSION['login'])==0)
  {   ?>
 
<a href="login.php"><i class="fa fa-user"></i>Login/Register |</a>

<?php }
else{ ?>
	<a href="logout.php"><i class="fa fa-user"></i>Logout |</a>
				<?php } ?>
				
				
                                
                            </div>
                           <!-- <div class="header__top__right__auth">
                                <a href="track-orders.php"><i class="fa fa-truck"></i>Track Order |</a>
                            </div>-->
                            <div class="header__top__right__auth">
                                <a href="my-account.php"><i class="fa fa-user"></i>My Account |</a>
                             </div>
                             <div class="header__top__right__auth">
                                <a href="order-history.php"><i class="fa fa-shopping-bag"></i>My Orders</a>
                             </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-3" >
                    <div class="header__logo">
                        <a href="index.php"><img src="layouts/orgain/logo.jpg" alt="" style="width:70%;"></a>
                    </div>
                </div>
                <section class="hero hero-normal">
                    
                    
        <div class="container">
            <div class="row">
             <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="my-wishlist.php"><i class="fa fa-heart"></i> <span>0</span></a></li>
                            <li><a href="my-cart.php"><i class="fa fa-shopping-bag"></i><div id="load_qty2"> <span  ><?php echo $_SESSION['qnty'];?></span></div></a></li>
                            </ul>
                            <?php
if(!empty($_SESSION['cart'])){
	?>
                            
                            <?php }?>
                        
                        
                        		 <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['productPrice']+$row['shippingCharge'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>
                        
               <?php } }?>         
                        <div class="header__cart__price">item: <span>Rs <?php echo $_SESSION['tp']="$totalprice". ".00"; ?></span></div>
                    </div>
                </div>
                
                
                <div class="col-lg-9" style="width:100%;">
                    
                    <div class="hero__search">
                       
                        <div class="hero__search__form">
                            
                            <form name="search" method="post" action="search-result.php">
                                   <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text"  name="product" placeholder="What do yo u need?">
                                <button type="submit" name="search" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                            <div class="hero__search__phone" style="#">
                           <div class="hero__search__phone__icon">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="hero__search__phone__text">
                      
                        <a class="block" href="https://wa.me/+91-6261557440?text= Hello Apnakiranas!!">Send list in whatsapp</a>
                      
                                <!--<h5>+91-6261557440</h5>
                                <span> 24/7 support</span>-->
                            </div>
                        </div>
                       
                        <div class="hero__search__phone">
                            
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-clipboard"></i>
                            </div>
                            <div class="hero__search__phone__text">
                        <form method="#" action="#">
                        <button class="block" type="submit">Upload List</button>
                        </form>
                                <!--<h5>+91-6261557440</h5>
                                <span> 24/7 support</span>-->
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
                
                
                
                
                <div class="col-lg-6" style="width:103%;background:#EBECF0;">
                    <nav class="header__menu">
                  <ul>
                <li class="active"><a href="index.php">Home</a></li>
               <li><a href="category.php?cid=7">Farming Vehicles</a>
                <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=69" style="color:#fff;margin-left:5px;">Tractors</a></li>
                        <li><a href="sub-category.php?scid=14" style="color:#fff;margin-left:5px;">Combine or Harvester</a></li>
                        <li><a href="sub-category.php?scid=15" style="color:#fff;margin-left:5px;">ATV or UTV</a></li>
                        
                    </ul>
                </li>
                <li><a href="category.php?cid=8">Tractor Attachments</a>
                    <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=30" style="color:#fff;margin-left:5px;">Plows</a></li>
                        <li><a href="sub-category.php?scid=31" style="color:#fff;margin-left:5px;">Harrows</a></li>
                        <li><a href="sub-category.php?scid=32" style="color:#fff;margin-left:5px;">Fertilizer Spreaders</a></li>
                        <li><a href="sub-category.php?scid=33" style="color:#fff;margin-left:5px;">Seeders</a></li>
                        <li><a href="sub-category.php?scid=34" style="color:#fff;margin-left:5px;">Balers</a></li>
                        <li><a href="sub-category.php?scid=35" style="color:#fff;margin-left:5px;">Wagons or Trailers</a></li>
                    </ul>
                </li>
                <li><a href="category.php?cid=9">Bakers & Chocolates</a>
                 <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=28" style="color:#fff;margin-left:5px;">Biscuits & Cookies</a></li>
                        <li><a href="sub-category.php?scid=29" style="color:#fff;margin-left:5px;">Chocolates</a></li>
                        <li><a href="sub-category.php?scid=27" style="color:#fff;margin-left:5px;">Breads</a></li>
                        <li><a href="sub-category.php?scid=46" style="color:#fff;margin-left:5px;">Butter & Cream</a></li>
                        <li><a href="sub-category.php?scid=48" style="color:#fff;margin-left:5px;">Indian Sweets</a></li>
                        
                    </ul>
                </li>
                <li><a href="category.php?cid=10">Household</a>
                <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=23" style="color:#fff;margin-left:5px;">Detergents & Bars</a></li>
                        <li><a href="sub-category.php?scid=24" style="color:#fff;margin-left:5px;">Tiolet & FloorCleaners</a></li>
                        <li><a href="sub-category.php?scid=25" style="color:#fff;margin-left:5px;">Air Freshners</a></li>
                        <li><a href="sub-category.php?scid=26" style="color:#fff;margin-left:5px;">Dish Washers</a></li>
                        <li><a href="sub-category.php?scid=45" style="color:#fff;margin-left:5px;">Pooja Items</a></li>
                        
                    </ul>
                </li>
                <li><a href="category.php?cid=11">Personal Care</a>
                        <ul class="header__menu__dropdown" style="background:#252525;;">
                        <li><a href="sub-category.php?scid=18" style="color:#fff;margin-left:5px;">Oral Care</a></li>
                        <li><a href="sub-category.php?scid=19" style="color:#fff;margin-left:5px;">Skin Care</a></li>
                        <li><a href="sub-category.php?scid=20" style="color:#fff;margin-left:5px;">Hair Care</a></li>
                        <li><a href="sub-category.php?scid=43" style="color:#fff;margin-left:5px;">Baby Care</a></li>
                        <li><a href="sub-category.php?scid=21" style="color:#fff;margin-left:5px;">Deos & Perfums</a></li>
                        <li><a href="sub-category.php?scid=22" style="color:#fff;margin-left:5px;">Personal Hygiene</a></li>
                        <li><a href="sub-category.php?scid=37" style="color:#fff;margin-left:5px;">Health Care</a></li>
                    </ul>
                </li>
            </ul>        
        
                    </nav>
                </div>
              
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
     <br>
     
    <!-- Hero Section Begin -->
    
    <!-- Hero Section End -->


    



</body>

</html>
</html>