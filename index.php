<?php
require_once 'header.php';
require_once 'topbar.php';
$cats=Dbops::getCategory($con);
$cats['n']>0?$categories=$cats['f']:$categories=[];
$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];
if(isset($_SESSION['customer']))
{
  $customer=$_SESSION['userid'];
$data=['con'=>$con, 'customer'=>$customer];


  $cartnf=Dbops::getCartBycustomer($data);
  $cartnf['n']>0?$cart=$cartnf['f']:$cart=[];
  $items=$cartnf['n'];

}

foreach ($categories as $k => $v) {
    $catids[]=$v['id'];
}
$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];
$latestproduct=$products[0]['id'];
for($i=0;$i<4;$i++)
{   $productId = $products[$i]['id'];
    $productName = $products[$i]['name'];
    $sellingPrice = $products[$i]['sellingprice'];
    !empty($products[$i]['image_1'])?$productImage = customerproduct.$products[$i]['image_1']:'';
    !empty($products[$i]['image_2'])?$productImage = customerproduct.$products[$i]['image_2']:'';
    !empty($products[$i]['image_3'])?$productImage = customerproduct.$products[$i]['image_3']:'';
    !empty($products[$i]['image_4'])?$productImage = customerproduct.$products[$i]['image_4']:'';
    !empty($products[$i]['image_5'])?$productImage = customerproduct.$products[$i]['image_5']:'';
    !empty($products[$i]['image_6'])?$productImage = customerproduct.$products[$i]['image_6']:'';

}
?>



    <!--Header-->
    <div class="header-wrap classicHeader animated d-flex" style="background-color: transparent;">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
<?php include_once 'header_logo.php';?>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item"   id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu" ><a href="./index">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            
                        <li class="lvl1 parent megamenu"><a href="./product?product=<?php echo $latestproduct;?>">Product <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        <li class="lvl1"><a href="./product?product=<?php echo $latestproduct;?>"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <!--Mobile Logo-->
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="./index">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <!--Mobile Logo-->
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="./cartlist" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php if(isset($items)){echo $items;} ?></span>
                        </a>
                        <!--Minicart Popup-->
                                                <?php include_once './minicartpopup.php';?>

                        <!--EndMinicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
 <div id="page-content" style="background-color: black;">
        <!--Home slider-->
        <div class="slideshow slideshow-wrapper pb-section sliderFull">
            <div class="home-slideshow">
    <?php include_once 'slider.php'; ?>

            </div>
            </div>
    


    <!--Body Content-->
    <div id="page-content" style="background-color: black;">
    	<!--Home slider-->

        <!--End Home slider-->
        <!--Collection Tab slider-->
        <div class="tab-slider-product section" style="background-color: black;">
        	<div class="container" style="background-color: black;">
            	<div class="row" style="background-color: black;">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12" style="background-color: black;">
                        <div class="section-header text-center" style="background-color: black;">
                            <h2 class="h2" style="color: rgb(248, 248, 252);">New Arrivals</h2>
                            <p style="color: rgb(249, 249, 252);">Browse the huge variety of our products</p>
                        </div>
                        <div class="tabs-listing" style="background-color: black;">
                            <div class="tab_container" style="background-color: black;">
                                <div id="tab1" class="tab_content grid-products" style="background-color: black;">
                                    <div class="productSlider" style="background-color: black;">



     <!-- first rows 4 products  -->

<?php     

for($i=0;$i<4;$i++)
{   $productId = $products[$i]['id'];
    $productName = $products[$i]['name'];
    $sellingPrice = $products[$i]['sellingprice'];
    !empty($products[$i]['image_1'])?$productImage = customerproduct.$products[$i]['image_1']:'';
    !empty($products[$i]['image_2'])?$productImage = customerproduct.$products[$i]['image_2']:'';
    !empty($products[$i]['image_3'])?$productImage = customerproduct.$products[$i]['image_3']:'';
    !empty($products[$i]['image_4'])?$productImage = customerproduct.$products[$i]['image_4']:'';
    !empty($products[$i]['image_5'])?$productImage = customerproduct.$products[$i]['image_5']:'';
    !empty($products[$i]['image_6'])?$productImage = customerproduct.$products[$i]['image_6']:'';


?>
                                        <div class="col-12 item" style="background-color: black;">
                                            <!-- start product image -->
                                            <div class="product-image" style="background-color: black;">
                                                <!-- start product image -->
                                                <a href="./product?product=<?php echo $productId;?>">
                                                    <!-- image -->
                                                    <img class="primary blur-up lazyload" data-src="" src="<?php echo $productImage;?>" alt="image" title="product">
                                                    <!-- End image -->
                                                    <!-- Hover image -->
                                                    <img class="hover blur-up lazyload" data-src="" src="<?php echo $productImage;?>" alt="image" title="product">
                                                    <!-- End hover image -->
                                                    <!-- product label -->
                                                    <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                                    <!-- End product label -->
                                                </a>
                                                <!-- end product image -->
                                                
                                                <!-- countdown start -->
                                        		<div class="saleTime desktop" data-countdown="2022/03/01"></div>
                                        		<!-- countdown end -->
        
                                                
                                            </div>
                                            <!-- end product image -->



                                            <!--start product details -->
                                            <div class="product-details text-center">
                                                <!-- product name -->
                                                <div class="product-name">
                                                    <a href="product?product=<?php echo $productId;?>" style="color: rgb(245, 245, 250);"><?php echo $productName;?></a>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price" style="color: rgb(238, 238, 245);">&#8377;&nbsp;<?php echo $sellingPrice;?></span>
                                                </div>
                                                <!-- End product price -->
                                                
                                                <div class="product-review">
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                    <i class="font-13 fa fa-star-o"></i>
                                                </div>
                                                
                                            </div>
                                            <!-- End product details -->
                                        </div>
<?php } ?>

                                        <!-- first rows 4 products  -->
                                     
                                    
                                            <!-- end product image -->
        
                                            
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            	</div>    
            </div>
        </div>
        <!--Collection Tab slider-->
        
        <!--Collection Box slider-->
        <div class="collection-box section" style="background-color: black;">
        	<div class="container-fluid" style="background-color: black;">
				<div class="collection-grid" style="background-color: rgb(3, 3, 3);">
                    <?php foreach($catids AS $k=>$v){
                     $data=['con'=>$con, 'catid'=>$v];
                     $catp=Dbops::getProductByCategoryId($data);$catp['n']>0?$catproduct=$catp['f']:$catproduct=[];
                         !empty($catproduct['image_1'])?$productImage = customerproduct.$catproduct['image_1']:'';
    !empty($catproduct['image_2'])?$productImage = customerproduct.$catproduct['image_2']:'';
    !empty($catproduct['image_3'])?$productImage = customerproduct.$catproduct['image_3']:'';
    !empty($catproduct['image_4'])?$productImage = customerproduct.$catproduct['image_4']:'';
    !empty($catproduct['image_5'])?$productImage = customerproduct.$catproduct['image_5']:'';
    !empty($catproduct['image_6'])?$productImage = customerproduct.$catproduct['image_6']:'';
    $categoryname=$catproduct['categoryname'];

    $categoryImage=customercategory.$catproduct['categoryimage'];
                     ?>
                        <div class="collection-grid-item">
                            <a href="product_category" class="collection-grid-item__link">
                                <img data-src="" src="<?php echo $categoryImage;//echo $productImage;?>" alt="Fashion" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border"><?php echo $categoryname;?></h3>
                                </div>
                            </a>
                        </div><?php } ?>
                        <!-- <div class="collection-grid-item" style="background-color: black;">
                            <a href="PRODUCTS CATEGORY.html" class="collection-grid-item__link">
                                <img class="blur-up lazyload" data-src="" src="./Men/a-person-wearing-white-tshirt-mockup-in-front-of-green-screen-00196.png" alt="Cosmetic"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">MENS</h3>
                                </div>
                            </a>
                        </div>
                        <div class="collection-grid-item blur-up lazyloaded" style="background-color: black;">
                            <a href="PRODUCTS CATEGORY.html" class="collection-grid-item__link">
                                <img data-src="" src="./Kids/3d-tshirt-mockup-on-rock-in-front-of-sea-background-0324 (1).png" alt="Bag" class="blur-up lazyload"/>
                                <div class="collection-grid-item__title-wrapper">
                                    <h3 class="collection-grid-item__title btn btn--secondary no-border">KIDS</h3>
                                </div>
                            </a>
                        </div> -->
                        
                        
                </div>
            </div>
        </div>
        <!--End Collection Box slider-->
        

        
        
        

        
        <!--Store Feature-->
        <div class="store-feature section" style="background-color: black;">
        	<div class="container" style="background-color: black;">
            	<div class="row" style="background-color: black;">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5 style="color: rgb(241, 241, 247);">Free Shipping &amp; Return</h5>
                            	<span class="sub-text" style="color: rgb(247, 247, 250);">Free shipping on all US orders</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5 style="color: rgb(241, 241, 247);">Money Guarantee</h5>
                                <span class="sub-text" style="color: rgb(238, 238, 243);">30 days money back guarantee</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5 style="color: rgb(239, 239, 245);">Online Support</h5>
                                <span class="sub-text" style="color: rgb(206, 206, 211);">We support online 24/7 on day</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5 style="color: rgb(245, 245, 252);">Secure Payments</h5>
                                <span class="sub-text" style="color: rgb(245, 245, 247);">All payment are Secured and trusted.</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer" style="background-color: black;">
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                        	<h4 class="h4">Contact Us</h4>
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p></li>
                                <li class="phone"><i class="icon anm anm-phone-s"></i><p>(440) 000 000 0000</p></li>
                                <li class="email"><i class="icon anm anm-envelope-l"></i><p>sales@yousite.com</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
<?php include_once 'footer.php';?>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    
    
    
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
	</script>
    <!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/./index   11 Nov 2019 12:20:55 GMT -->
</html>