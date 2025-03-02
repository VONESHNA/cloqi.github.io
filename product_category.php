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
?>

    <!--Header-->
    <div class="header-wrap animated d-flex" style="background-color: black;">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="./index">
                    	<img src="<?php echo $logoWhite;//echo $logoBlack;?>" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                    </a>
                </div>
                <!--End Desktop Logo-->
                <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                	<div class="d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        	<i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                	<!--Desktop Menu-->
                	<nav class="grid__item" id="AccessibleNav" style="background-color: black;"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="./index" style="color: rgb(240, 240, 247);">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            
                        <li class="lvl1 parent megamenu"><a href="./product_category" style="color: rgb(238, 238, 243);">Product <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        
                        
                        <li class="lvl1"><a href="./product?product=<?php echo $latestproduct;?>" style="color: rgb(232, 232, 235);"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="./index">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="./cartlist" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php if(isset($items)){echo $items;}?></span>
                        </a>
                        <!--Minicart Popup-->
                      <?php include_once './minicartpopup.php';?>

                        <!--End Minicart Popup-->
                    </div>
                    <div class="site-header__search">
                    	<button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <!--End Header-->
    <!--Mobile Menu-->
    <div class="mobile-nav-wrapper" role="navigation">
		<div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
        <ul id="MobileNav" class="mobile-nav">
        	<li class="lvl1 parent megamenu"><a href="./index">Home <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="./index" class="site-nav">Home 1 - Classic</a></li>
                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                <li><a href="#" class="site-nav">Age Varification </a></li>
                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                <li><a href="#" class="site-nav last">Auto Currency</a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>

                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="product-layout-1.html" class="site-nav">Product Page<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left Thumbs</a></li>
                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right Thumbs</a></li>
                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With Bottom Thumbs</a></li>
              </ul>
            </li>
            <li><a href="short-description.html" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity Message</a></li>
                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold Count </a></li>
                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox </a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping Message</a></li>
                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
          <ul>
          	<li><a href="cart-variant1.html" class="site-nav">Cart Page <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                    <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                 </ul>
            </li>
            <li><a href="compare-variant1.html" class="site-nav">Compare Product <i class="anm anm-plus-l"></i></a>
                <ul class="dropdown">
                    <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                    <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                 </ul>
            </li>
			<li><a href="checkout.html" class="site-nav">Checkout</a></li>
            <li><a href="about-us.html" class="site-nav">About Us<span class="lbl nm_label1">New</span></a></li>
            <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
            <li><a href="faqs.html" class="site-nav">FAQs</a></li>
            <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
              </ul>
            </li>
            <li><a href="404.html" class="site-nav">404</a></li>
            <li><a href="coming-soon.html" class="site-nav">Coming soon<span class="lbl nm_label1">New</span></a></li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
            <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
            <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
            <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
            <li><a href="blog-article.html" class="site-nav">Article</a></li>
          </ul>
        </li>
        	<li class="lvl1"><a href="#"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content" style="background-color: black;" >
    	<!--Collection Banner-->
    	<div class="collection-header">
			<div class="collection-hero">
        		<div class="collection-hero__image"><img data-src="assets/images/cat-women3.jpg" src="assets/images/cat-women3.jpg" alt="Women" title="Women" /></div>
        		<div class="collection-hero__title-wrapper"><h1 class="collection-hero__title page-width">PRODUCTS</h1></div>
      		</div>
		</div>
        <!--End Collection Banner-->
        
        <div class="container">
        	<div class="row">
            	<!--Sidebar-->
            	<div class="col-12 col-sm-12 col-md-3 col-lg-3 sidebar filterbar">
                	<div class="closeFilter d-block d-md-none d-lg-none"><i class="icon icon anm anm-times-l"></i></div>
                	<div class="sidebar_tags">
                    	<!--Categories-->
                    	<div class="sidebar_widget categories filter-widget">
                            <div class="widget-title" style="color: rgb(243, 243, 248);"><h2 style="color: rgb(240, 240, 240);">Categories</h2></div>
                            <div class="widget-content">
                                <ul class="sidebar_categories">
                                    <?php foreach($categories as $k=>$v){

      $category = $v['name'];
      $description = $v['description'];
      $edit=$v['id'];
      $delete=$v['id'];?>
                                    <li class="lvl-1"><a href="#;" class="site-nav " style="color: rgb(242, 242, 247);"><?php echo  $category;?></a></li>
                                    <?php }?>
                            </div>
                        </div>
                        <!--Categories-->
                        
                        <!--Size Swatches-->
                        <div class="sidebar_widget filterBox filter-widget size-swacthes">
                            <div class="widget-title" style="color: rgb(237, 237, 243);"><h2 style="color: rgb(235, 235, 241);">Size</h2></div>
                            <div class="filter-color swacth-list">
                            	<ul>
                                    <li><span class="swacth-btn checked" style="color: rgb(235, 235, 245);">X</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(236, 236, 243);">XL</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(241, 241, 247);">XLL</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(236, 236, 241);">M</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(242, 242, 245);">L</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(231, 231, 236);">S</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(237, 237, 241);">XXXL</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(236, 236, 243);">XXL</span></li>
                                    <li><span class="swacth-btn" style="color: rgb(231, 231, 238);">XS</span></span></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Size Swatches-->
                        
                        
                        <!--Popular Products-->
						<div class="sidebar_widget">
                        	<div class="widget-title" ><h2 style="color: rgb(234, 234, 238);">Popular Products</h2></div>
							<div class="widget-content">
                                <div class="list list-sidebar-products">
                                  <div class="grid">
                                    <!-- grid -->

                                    <?php     

                                    for($i=0;$i<4;$i++)
                                    {   
                                        $productId = $products[$i]['id'];
                                        $productName = $products[$i]['name'];
                                        $sellingPrice = $products[$i]['sellingprice'];
                                        !empty($products[$i]['image_1'])?$productImage = customerproduct.$products[$i]['image_1']:'';
                                        !empty($products[$i]['image_2'])?$productImage = customerproduct.$products[$i]['image_2']:'';
                                        !empty($products[$i]['image_3'])?$productImage = customerproduct.$products[$i]['image_3']:'';
                                        !empty($products[$i]['image_4'])?$productImage = customerproduct.$products[$i]['image_4']:'';
                                        !empty($products[$i]['image_5'])?$productImage = customerproduct.$products[$i]['image_5']:'';
                                        !empty($products[$i]['image_6'])?$productImage = customerproduct.$products[$i]['image_6']:'';


                                    ?>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image">
                                            <a class="grid-view-item__link" href="./product?product=<?php echo $productId;?>">
                                                <img class="grid-view-item__image" src="./Kids/Princess Peach.png" alt="" />
                                            </a>
                                        </div>
                                        <div class="details"> <a class="grid-view-item__title" href="./product?product=<?php echo $productId;?>" style="color: rgb(237, 237, 241);"><?php echo $productName;?></a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money" style="color: rgb(234, 234, 240);">&#8377;<?php echo $sellingPrice;?></span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <?php } ?>
                                    <!-- grid -->
                                 <!--    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="./product?product=<?php echo $latestproduct;?>"><img class="grid-view-item__image" src="./Women/woman-tshirt-mockup-closeup-with-plain-background-0021.png" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#" style="color: rgb(231, 231, 235);">Block Button Up</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money" style="color: rgb(231, 231, 240);">$378.00</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="./product?product=<?php echo $latestproduct;?>"><img class="grid-view-item__image" src="./Men/tshirt-mockup-of-an-indian-man-with-oversized-fit-scene1-0356.png" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#" style="color: rgb(243, 243, 248);">Balda Button Pant</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money" style="color: rgb(236, 236, 243);">$278.60</span></span></div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="grid__item">
                                      <div class="mini-list-item">
                                        <div class="mini-view_image"> <a class="grid-view-item__link" href="./product?product=<?php echo $latestproduct;?>"><img class="grid-view-item__image" src="./Men/tshirt-mockup-of-an-indian-man-with-oversized-fit-scene2-0354.png" alt="" /></a> </div>
                                        <div class="details"> <a class="grid-view-item__title" href="#" style="color: rgb(238, 238, 241);">Border Dress in Black/Silver</a>
                                          <div class="grid-view-item__meta"><span class="product-price__price"><span class="money" style="color: rgb(236, 236, 241);">$228.00</span></span></div>
                                        </div>
                                      </div>
                                    </div> -->
                                  </div>
                                </div>
                          	</div>
						</div>
                        <!--End Popular Products-->
                        <!--Banner-->
                        <div class="sidebar_widget static-banner">
                        	<img src="assets/images/side-banner-2.jpg" alt="" />
                        </div>
                        <!--Banner-->
                        
                    </div>
                </div>
                <!--End Sidebar-->
                <!--Main Content-->
                <div class="col-12 col-sm-12 col-md-9 col-lg-9 main-col">
                	<div class="category-description">
                    	<h3 style="color: rgb(247, 247, 250);">Category Description</h3>
                         <?php foreach($categories as $k=>$v){

      $category = $v['name'];
      $description = $v['description'];
      $edit=$v['id'];
      $delete=$v['id'];?>

                        <p style="color: rgb(247, 247, 251);">
                    <?php echo  $description;?>
                    </p>
                        <!-- <p style="color: rgb(234, 234, 241);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p> -->
                            <?php }?>
                    </div>
                    <hr>
                	<div class="productList">
                    	
                        <!--End Toolbar-->
                        <div class="list-view-items grid--view-items">
                        	<!--ListView Item-->
                            <?php 
                            foreach($products as $k=>$v){
                                $productId = $v['id'];
                              $categoryname = $v['categoryname'];
                              $productname = $v['name'];
                              $productDescription = $v['description'];
                              $actualPrice = $v['actualprice'];
                              $sellingPrice = $v['sellingprice'];
                              $image1 = adminproduct.$v['image_1'];
                              $image2 = adminproduct.$v['image_2'];
                              $image3 = adminproduct.$v['image_3'];
                              $image4 = adminproduct.$v['image_4'];
                              $image5 = adminproduct.$v['image_5'];
                              $image6 = adminproduct.$v['image_6'];

                              ?>
                            <div class="list-product list-view-item">
                                <div class="list-view-item__image-column">
                                    <div class="list-view-item__image-wrapper">
                                        <!-- Image -->
                                        <a href="./product?product=<?php echo $productId;?>"><img class="list-view-item__image blur-up lazyload" data-src="" src="./Kids/Spongebob.png" alt="image" title="product"></a>
                                        <!-- End Image -->
                                    </div>
                                </div>
                                <div class="list-view-item__title-column">
                                    <div class="h4 grid-view-item__title"><a href="./product?product=<?php echo $productId;?>" style="color: rgb(241, 241, 249);"><?php echo  $productname;?></a></div>
                                    <!-- Product Review -->
                                    <p class="product-review"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i></p>
                                    <!-- End Product Review -->
                                    <!-- Sort Description -->
                                    <p style="color: rgb(236, 236, 241);"><?php echo  $productDescription;?></p>
                                    <!-- End Sort Description -->
                                    <!-- Price -->
                                    <p class="product-price grid-view-item__meta">
                                        <span class="old-price" style="color: rgb(241, 241, 242);">&#8377;<?php echo $actualPrice;?></span>
                                        <span class="product-price__price product-price__sale"><span class="money" style="color: rgb(227, 227, 234);">&#8377;<?php echo $sellingPrice;?></span></span>
                                    </p>
                                    <!-- End Price -->
                                    
                                </div>
                            </div>
                                <?php } ?>
                            <!--End ListView Item-->
                            <!--ListView Item-->
                    
                            <!--End ListView Item-->
                            <!--ListView Item-->
                       
                            <!--End ListView Item-->
                            <!--ListView Item-->
              
                            <!--End ListView Item-->
                        
                            <!--ListView Item-->
                         

                            
                            
                            <!--End ListView Item-->
                            
                        </div>
                    </div>
                    <div class="infinitpaginOuter">
                        <div class="infinitpagin">	
                            <a href="#" class="btn loadMore" style="color: rgb(239, 239, 241);">Load More</a>
                        </div>
                    </div>
                </div>
                <!--End Main Content-->
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer" style="background-color: black;">
        <div class="newsletter-section" style="background-color: black;">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2" style="color: rgb(241, 245, 248);"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
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
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
</div>
</body>

<!-- belle/shop-listview.html   11 Nov 2019 12:41:09 GMT -->
</html>