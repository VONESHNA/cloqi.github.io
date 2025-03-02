<?php
require_once 'header.php';
require_once 'topbar.php';
$pds=Dbops::getProduct(Con::connect());
$pds['n']>0?$products=$pds['f']:$products=[];



 $productId= Dbops::getint($_GET['product']);
  $data=['con'=>$con, 'edit'=>$productId];
  $productShowbyId=Dbops::getProductById($data);
  $productShowbyId['n']>0?$productShow=$productShowbyId['f']:$productShow=[];
      $productName = $productShow['name'];
      $actualPrice = $productShow['actualprice'];
      $productDescription = $productShow['description'];
      $sellingPrice = $productShow['sellingprice'];
      $image1 = customerproduct.$productShow['image_1'];
      $image2 = customerproduct.$productShow['image_2'];
      $image3 = customerproduct.$productShow['image_3'];
      $image4 = customerproduct.$productShow['image_4'];
      $image5 = customerproduct.$productShow['image_5'];
      $image6 = customerproduct.$productShow['image_6'];
      $catid  = $productShow['category'];
      $xs     = $productShow['xs'];
      $s      = $productShow['s'];
      $m      = $productShow['m'];
      $l      = $productShow['l'];
      $xl     = $productShow['xl'];
      $xxl    = $productShow['xxl'];
      $xxxl   = $productShow['xxxl'];
  $data   =   ['con'=>$con, 'catid'=>$catid];

      $getRelatedProducts=Dbops::getProductListByCategoryId($data);
      $getRelatedProducts['n']>0?$relatedProducts=$getRelatedProducts['f']:$relatedProducts=[];
// echo '$getRelatedProducts=======================>';
// print_r($relatedProducts);
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
                            <ul id="siteNav" class="site-nav medium center hidearrow" style="background-color: black;">
                                <li class="lvl1 parent megamenu" style="color: aliceblue;"><a href="./index" style="color: aliceblue;">Home <i class="anm anm-angle-down-l"></i></a>
                                </li>
                               
                            <li class="lvl1 parent megamenu"><a href="./product_category" style="color: aliceblue;">Product <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            
                            
                            <li class="lvl1"><a href="./product?product=<?php echo $productId;?>" style="color: aliceblue;"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
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
                            
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart" style="background-color: black;">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="./product?product=<?php echo $productId;?>">
                                            <img src="./Women/smiling-woman-tshirt-mockup-with-pink-wall-0045.png" alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="./product?product=<?php echo $productId;?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="./product?product=<?php echo $productId;?>" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                             </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="./product?product=<?php echo $productId;?>">
                                            <img src="./Women/smiling-woman-tshirt-mockup-with-pink-wall-0045.png" alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="./product?product=<?php echo $productId;?>" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                            <a href="./product?product=<?php echo $productId;?>" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                                    </div>
                                     <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
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
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
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
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
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
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
              </ul>
            </li>
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Age Varification </a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Footer Blocks</a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">2 New Megamenu style</a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Show Total Savings </a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">New Custom Icons</a></li>
                <li><a href="./product?product=<?php echo $productId;?>" class="site-nav last">Auto Currency</a></li>
              </ul>
            </li>
          </ul>
        </li>
        	<li class="lvl1 parent megamenu"><a href="./product?product=<?php echo $productId;?>">Shop <i class="anm anm-plus-l"></i></a>
          <ul>
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
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
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
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
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
              <ul>
                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant Image</a></li>
                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color Swatch</a></li>
                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image Swatch</a></li>
                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a></li>
                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded Square</a></li>
                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a></li>
              </ul>
            </li>
            <li><a href="./product?product=<?php echo $productId;?>" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
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
        	<li class="lvl1"><a href="./product?product=<?php echo $productId;?>"><b>Buy Now!</b></a>
        </li>
      </ul>
	</div>
        <!--End Mobile Menu-->
        
        <!--Body Content-->
        <div id="page-content" style="background-color: black;">
            <!--MainContent-->
            <div id="MainContent" class="main-content" role="main">
                <!--Breadcrumb-->
                <div class="bredcrumbWrap" style="background-color: black;">
                    <div class="container breadcrumbs">
                        <a href="./index" title="Back to the home page" style="color: aliceblue;">Home</a><span aria-hidden="true">›</span><span style="color: aliceblue;">Product </span>
                    </div>
                </div>
                <!--End Breadcrumb-->
                
                <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
                    <!--product-single-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img">
                                    <div class="product-thumb">
                                        <div id="gallery" class="product-dec-slider-2 product-tab-left">
                                            
                                            
                                            <a data-image="<?php echo $image1;?>" data-zoom-image="<?php echo $image1;?>" class="slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="<?php echo $image1;?>" alt="" />
                                            </a>
                                            <a data-image="<?php echo $image2;?>" data-zoom-image="<?php echo $image2;?>" class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="<?php echo $image2;?>" alt="" />
                                            </a>
                                            <a data-image="<?php echo $image3;?>" data-zoom-image="<?php echo $image3;?>" class="slick-slide slick-cloned" data-slick-index="0" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="<?php echo $image3;?>" alt="" />
                                            </a>
                                            <a data-image="<?php echo $image4;?>" data-zoom-image="<?php echo $image4;?>" class="slick-slide slick-cloned" data-slick-index="1" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="<?php echo $image4;?>" alt="" />
                                            </a>
                                            <a data-image="<?php echo $image5;?>" data-zoom-image="<?php echo $image5;?>" class="slick-slide slick-cloned" data-slick-index="2" aria-hidden="true" tabindex="-1">
                                                <img class="blur-up lazyload" src="<?php echo $image5;?>" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="zoompro-wrap product-zoom-right pl-20">
                                        <div class="zoompro-span">
                                            <img class="zoompro blur-up lazyload" data-zoom-image="<?php echo $image6;?>" alt="" src="<?php echo $image6;?>" />
                                        </div>
                                        <div class="product-labels"><span class="lbl on-sale">Sale</span><span class="lbl pr-label1">new</span></div>
                                        <div class="product-buttons">
                                            <a href="<?php echo $image6;?>" class="btn popup-video" title="View Video"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a>
                                            <!-- <a href="./product?product=<?php echo $productId;?>" class="btn prlightbox" title="Zoom"><i class="icon anm anm-expand-l-arrows" aria-hidden="true"></i></a> -->


                                            <!-- class="icon anm anm-play-r" aria-hidden="true" -->
                                        </div>
                                    </div>
                                    <div class="lightboximages">
                                        <a href="assets/images/product-detail-page/cape-dress-1.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-2.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-3.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-4.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-5.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-6.jpg" data-size="1462x2048"></a>
                                        <a href="assets/images/product-detail-page/cape-dress-7.jpg" data-size="731x1024"></a>
                                    </div>
        
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="product-single__meta">
                                        <h1 class="product-single__title" style="color: rgb(236, 236, 241);">
                                            <!-- Short Description -->

<?php echo $productDescription;?>
                                        </h1>
                                        <div class="product-nav clearfix">					
                                            <a href="./product?product=<?php echo $productId;?>" class="next" title="Next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="prInfoRow">
                                            <div class="product-stock"> <span class="instock " style="color: rgb(229, 229, 233);">In Stock</span> <span class="outstock hide" style="color: rgb(236, 236, 240);">Unavailable</span> </div>
                                            <div class="product-review"><a class="reviewLink" href="#tab2"><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star-o"></i><i class="font-13 fa fa-star-o"></i><span class="spr-badge-caption" style="color: blue;">6 reviews</span></a></div>
                                        </div>
                                        <p class="product-single__price product-single__price-product-template">
                                            <span class="visually-hidden" style="color: rgb(227, 227, 235);">Regular price</span>
                                            <s id="ComparePrice-product-template"><span class="money" >&#8377;<?php echo $actualPrice; ?></span></s>
                                            <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                <span id="ProductPrice-product-template"><span class="money">&#8377;<?php echo $sellingPrice;?></span></span>
                                            </span>
                                            <span class="discount-badge"> <span class="devider">|</span>&nbsp;
                                                <span style="color: rgb(239, 239, 245);">You Save</span>
                                                <span id="SaveAmount-product-template" class="product-single__save-amount">
                                                <span class="money">&#8377;<?php echo Helper::yousave($actualPrice,$sellingPrice);?></span>
                                                </span>
                                                <span class="off">(<span><?php echo Helper::precentage($actualPrice,$sellingPrice);?></span>%)</span>
                                            </span>  
                                        </p>
                                        <div class="orderMsg" data-user="23" data-time="24">
                                            <img src="assets/images/order-icon.jpg" alt="" /> <strong class="items">5</strong> sold in last <strong class="time">26</strong> hours</div>
                                        </div>

                                    <div id="quantity_message">Hurry! Only  <span class="items">4</span>  left in stock.</div>
                                    <form method="post" action="./cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" >
                                        
                                        <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                            <div class="product-form__item">
                                              <label class="header" style="color: rgb(244, 244, 250);">Size: <span class="slVariant" style="color: rgb(236, 236, 241);" id="size"><?php  
                                                  if(!empty($xs)){$xs==1?$size="XS":'';};
                                                  if(!empty($s)){$xs==2?$size="S":'';};
                                                  if(!empty($m)){$m==3?$size="M":'';};
                                                  if(!empty($l)){$l==4?$size="L":'';};
                                                  if(!empty($xl)){$xl==5?$size="XL":'';};
                                                  if(!empty($xxl)){$xxl==6?$size="XXL":'';};
                                                  if(!empty($xxxl)){$xxxl==7?$size="XXXL":'';};
                                                    echo $size;
                                                  ?>
                                                  <input type="hidden" id="size" value="<?php echo $size; ?>">
                                              </span></label>
                                                <?php if(!empty($s)){ ?> 
                                              <div data-value="XS" class="swatch-element xs available">
                                                <input class="swatchInput" id="swatch-1-xs" onclick="changesize(1)" type="radio" name="option-1" value="XS">

                                                <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                              </div><?php } ?>
                                               <script type="text/javascript">function changesize(i){

                                                    i==1?document.getElementById('size').innerHTML=document.getElementById('swatch-1-xs').value:'';
                                                    i==2?document.getElementById('size').innerHTML=document.getElementById('swatch-1-s').value:'';
                                                    i==3?document.getElementById('size').innerHTML=document.getElementById('swatch-1-m').value:'';
                                                    i==4?document.getElementById('size').innerHTML=document.getElementById('swatch-1-l').value:'';
                                                    i==5?document.getElementById('size').innerHTML=document.getElementById('swatch-1-xl').value:'';
                                                    i==6?document.getElementById('size').innerHTML=document.getElementById('swatch-1-xxl').value:'';
                                                    i==7?document.getElementById('size').innerHTML=document.getElementById('swatch-1-xxxl').value:'';
                                                    
                                                }</script>
                                             <?php if(!empty($s)){ ?> <div data-value="S" class="swatch-element s available">
                                                <input class="swatchInput" id="swatch-1-s" onclick="changesize(2)" type="radio" name="option-1" value="S">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                              </div><?php } ?>
                                              <?php if(!empty($m)){ ?>
                                              <div data-value="M" class="swatch-element m available">
                                                <input class="swatchInput" id="swatch-1-m" onclick="changesize(3)" type="radio" name="option-1" value="M">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                              </div><?php } ?>
                                              <?php if(!empty($l)){ ?>
                                              <div data-value="L" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-l"  onclick="changesize(4)" type="radio" name="option-1" value="L">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                              </div><?php } ?>
                                              <?php if(!empty($xl)){ ?>
                                              <div data-value="XL" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-xl"  onclick="changesize(5)" type="radio" name="option-1" value="XL">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xl" title="XL">XL</label>
                                              </div><?php } ?>
                                              <?php if(!empty($xxl)){ ?>
                                                 <div data-value="XXL" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-xxl"  onclick="changesize(6)" type="radio" name="option-1" value="XXL">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xxl" title="XXL">XXL</label>
                                              </div><?php } ?>
                                              <?php if(!empty($xxxl)){ ?>
                                              <div data-value="XXXL" class="swatch-element l available">
                                                <input class="swatchInput" id="swatch-1-xxxl"  onclick="changesize(7)" type="radio" name="option-1" value="XXXL">
                                                <label class="swatchLbl medium rectangle" for="swatch-1-xxxl" title="XXXL">XXXL</label>
                                              </div><?php } ?>

                                            </div>
                                        </div>
                                        <p class="infolinks"><a href="#sizechart" class="sizelink btn" style="color: rgb(231, 231, 236);"> Size Guide</a> <a href="#productInquiry" class="emaillink btn" style="color: rgb(237, 237, 245);"> Ask About this Product</a></p>
                                        <!-- Product Action -->
                                        <div class="product-action clearfix">
                                            <div class="product-form__item--quantity">
                                                <div class="wrapQtyBtn">
                                                    <div class="qtyField">
                                                        <a class="qtyBtn minus" onclick="decrement()"  href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="quantity" name="quantity" value="1" class="product-form__input qty"  >
                                                        <a class="qtyBtn plus" onclick="increment()" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                    <script type="text/javascript">function increment(){
                                                        let Quantity=document.getElementById('quantity').value;
                                                       
                                             
                                                    }

                                                    function decrement(){
                                                        let Quantity=document.getElementById('quantity').value;
                                                       
                                                       
                                                    }
                                                </script>
                                                </div>
                                            </div>                                
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
                                                    <span onclick="addtocart()">Add to cart</span>
                                                </button>
                                                <script type="text/javascript">
                                                    function addtocart(){
                                                        let product='<?php echo $productId;?>';
                                                        let size=document.getElementById('size').innerHTML;
                                                        let quantity=document.getElementById('quantity').value;
                                                        let add="product="+product+"&size="+size+"&quantity="+quantity;
                                                        window.location=`./order/add?${add}`;
                                                        //window.location="./cart/add?product="+product+"&size=s&quantity=1";//make ajax now it is not working
                                                    }
                                                </script>
                                            </div>
                                            <div class="shopify-payment-button" data-shopify="payment-button">
                                                <button type="button" class="shopify-payment-button__button shopify-payment-button__button--unbranded"><a href="#" onclick="addtocartlist()"> Buy it now </a></button>
                                                <script type="text/javascript">
                                                    function addtocartlist(){
                                                        let product='<?php echo $productId;?>';
                                                        let size=document.getElementById('size').innerHTML;
                                                        let quantity=document.getElementById('quantity').value;
                                                           let add="product="+product+"&size="+size+"&quantity="+quantity;
                                                        window.location=`./order/cartlist?${add}`;//make ajax now it is not working
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                        <!-- End Product Action -->
                                    </form>
                                    <div class="display-table shareRow">
                                            <div class="display-table-cell medium-up--one-third">
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" onclick="addtowishlist()" href="#" onclick="addtowhish()" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span style="color: rgb(235, 235, 243);">Add to Wishlist</span></a>
                                                    <script type="text/javascript">

                                                    //     function addtowish(){

                                                    //           let product='<?php echo $productId;?>';
                                                    //     let size=document.getElementById('size').innerHTML;
                                                    //     let quantity=document.getElementById('quantity').value;
                                                    //        let add="product="+product+"&size="+size+"&quantity="+quantity;
                                                    //     window.location=`./order/cartlist?${add}`;//make ajax now it is not working
                                                    // ;}

                                                </script>


                                                    <script type="text/javascript">
                                                    function addtowishlist(){
                                                        let product='<?php echo $productId;?>';
                                                        let size=document.getElementById('size').innerHTML;
                                                        let quantity=document.getElementById('quantity').value;
                                                        let add="product="+product+"&size="+size+"&quantity="+quantity;
                                                        window.location=`./order/addtowishlist?${add}`;//make ajax now it is not working
                                                    }
                                                </script>



                                                </div>
                                            </div>
                                            <div class="display-table-cell text-right">
                                                <div class="social-sharing">
                                                    <a target="_blank" href="./product?product=<?php echo $productId;?>" class="btn btn--small btn--secondary btn--share share-facebook" title="Share on Facebook">
                                                        <i class="fa fa-facebook-square" aria-hidden="true"></i> <span class="share-title" aria-hidden="true" style="color: rgb(241, 241, 243);">Share</span>
                                                    </a>
                                                    <a target="_blank" href="./product?product=<?php echo $productId;?>" class="btn btn--small btn--secondary btn--share share-twitter" title="Tweet on Twitter">
                                                        <i class="fa fa-twitter" aria-hidden="true"></i> <span class="share-title" aria-hidden="true" style="color: rgb(234, 234, 243);">Tweet</span>
                                                    </a>
                                                    <a href="./product?product=<?php echo $productId;?>" title="Share on google+" class="btn btn--small btn--secondary btn--share" >
                                                        <i class="fa fa-google-plus" aria-hidden="true"></i> <span class="share-title" aria-hidden="true" style="color: rgb(238, 238, 245);">Google+</span>
                                                    </a>
                                                    <a target="_blank" href="./product?product=<?php echo $productId;?>" class="btn btn--small btn--secondary btn--share share-pinterest" title="Pin on Pinterest">
                                                        <i class="fa fa-pinterest" aria-hidden="true"></i> <span class="share-title" aria-hidden="true" style="color: rgb(239, 239, 243);">Pin it</span>
                                                    </a>
                                                    <a href="./product?product=<?php echo $productId;?>" class="btn btn--small btn--secondary btn--share share-pinterest" title="Share by Email" target="_blank">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i> <span class="share-title" aria-hidden="true" style="color: rgb(231, 231, 240);">Email</span>
                                                    </a>
                                                 </div>
                                            </div>
                                        </div>
                                        
                                    <p id="freeShipMsg" class="freeShipMsg" data-price="199" style="color: rgb(234, 234, 241);"><i class="fa fa-truck" aria-hidden="true" style="color: rgb(232, 232, 243);"></i style="color: blue;"> GETTING CLOSER! ONLY <b class="freeShip" style="color: blue;"><span class="money" data-currency-usd="$199.00" data-currency="USD">$199.00</span></b> AWAY FROM <b>FREE SHIPPING!</b></p>
                                    <p class="shippingMsg" style="color: rgb(240, 240, 250);"><i class="fa fa-clock-o" aria-hidden="true"></i> ESTIMATED DELIVERY BETWEEN <b id="fromDate">Wed. May 1</b> and <b id="toDate">Tue. May 7</b>.</p>
                                    <div class="userViewMsg" data-user="20" data-time="11000" style="color: rgb(238, 238, 243);"><i class="fa fa-users" aria-hidden="true"></i> <strong class="uersView">14</strong> PEOPLE ARE LOOKING FOR THIS PRODUCT</div>
                                </div>
                        </div>
                    </div>
                    <!--End-product-single-->
                    <!--Product Fearure-->
                    <div class="prFeatures">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature" style="color: rgb(245, 245, 250);">
                                <img src="assets/images/credit-card.png" alt="Safe Payment" title="Safe Payment" />
                                <div class="details" style="color: rgb(243, 243, 247);"><h3 style="color: rgb(237, 237, 245);">Safe Payment</h3>Pay with the world's most payment methods.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature" style="color: rgb(236, 236, 245);">
                                <img src="assets/images/shield.png" alt="Confidence" title="Confidence" />
                                <div class="details" style="color: rgb(242, 242, 243);"><h3 style="color: rgb(239, 239, 240);">Confidence</h3>Protection covers your purchase and personal data.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature" style="color: rgb(235, 235, 245);">
                                <img src="assets/images/worldwide.png" alt="Worldwide Delivery" title="Worldwide Delivery" />
                                <div class="details" style="color: rgb(236, 236, 241);"><h3 style="color: rgb(239, 239, 243);">Worldwide Delivery</h3>FREE &amp; fast shipping to over 200+ countries &amp; regions.</div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-3 col-lg-3 feature" style="color: rgb(239, 239, 245);">
                                <img src="assets/images/phone-call.png" alt="Hotline" title="Hotline" />
                                <div class="details" style="color: rgb(237, 237, 243);"><h3 style="color: rgb(226, 226, 238);">Hotline</h3>Talk to help line for your question on 4141 456 789, 4125 666 888</div>
                            </div>
                        </div>
                    </div>
                    <!--End Product Fearure-->
                    
                    
                    <!--Related Product Slider-->
                    <div class="related-product grid-products" style="color: rgb(234, 234, 241);">
                        <header class="section-header">
                            <h2 class="section-header__title text-center h2" style="color: rgb(243, 243, 248);"><span>Related Products</span></h2>
                            <p class="sub-heading" style="color: rgb(234, 234, 240);">
                            <!-- You can stop autoplay, increase/decrease aniamtion speed and number of grid to show and products from store admin. -->

                        </p>
                        </header>
                        <div class="productPageSlider">

                            <?php foreach($relatedProducts AS $k=>$v){
                                $productId=$v['id'];
                                $productName=$v['name'];
                              !empty($v['image_1'])?$primary = customerproduct.$v['image_1']:'';
                              !empty($v['image_2'])?$primary = customerproduct.$v['image_2']:'';
                              !empty($v['image_3'])?$primary = customerproduct.$v['image_3']:'';
                              !empty($v['image_4'])?$hover = customerproduct.$v['image_4']:'';
                              !empty($v['image_5'])?$hover = customerproduct.$v['image_5']:'';
                              !empty($v['image_6'])?$hover = customerproduct.$v['image_6']:'';
                                $actualprice = $v['actualprice'];
                                $sellingprice = $v['sellingprice'];     
                                ?>
                            <div class="col-12 item">
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="./product?product=<?php echo $productId;?>">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" data-src="" src="<?php echo $primary;?>" alt="image" title="product">
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload" data-src="" src="<?php echo $hover;?>" alt="image" title="product">
                                        <!-- End hover image -->
                                        <!-- product label -->
                                        <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                        <!-- End product label -->
                                    </a>
                                    <!-- end product image -->
        
                                    <!-- Start product button -->
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0"><a href="./product?product=<?php echo $productId;?>"> Options</a></button>
                                    </form>
                                    <div class="button-set">
                                        <a href="./product?product=<?php echo $productId;?>" title="Quick View" class="quick-view" tabindex="0">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details text-center">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="./product?product=<?php echo $productId;?>" style="color: rgb(206, 206, 214);"><?php echo $productName;?></a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price" style="color: rgb(222, 222, 228);">&#8377;<?php echo $actualprice;?></span>
                                        <span class="price" style="color: rgb(213, 213, 216);">&#8377;<?php echo $sellingprice;?></span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <div class="product-review">
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                        <i class="font-13 fa fa-star-o"></i>
                                    </div>
                                    <!-- Variant -->
                                    
                                    <!-- End Variant -->
                                </div>
                                <!-- End product details -->
                            </div><?php }?>
<!--  -->
                        </div>
                    <!--End Related Product Slider-->
                    
                    <!--Recently Product Slider-->
                    <div class="related-product grid-products" style="background-color: black;" >
                            <header class="section-header" style="background-color: black;">
                                <h2 class="section-header__title text-center h2" style="color: rgb(231, 231, 240);"><span>Recently Viewed Product</span></h2>
                                <p class="sub-heading" style="color: rgb(226, 226, 236);">You can manage this section from store admin as describe in above section</p>
                            </header>
                            <div class="productPageSlider">
                                <?php $rvpdsnf=Dbops::getProduct($con);
                                $rvpdsnf['n']>0?$rvpds=$rvpdsnf['f']:$rvpds=[];
                                foreach($rvpds AS $k=>$v){
                                       $productName=$v['name'];
                              !empty($v['image_1'])?$primary = customerproduct.$v['image_1']:'';
                              !empty($v['image_2'])?$primary = customerproduct.$v['image_2']:'';
                              !empty($v['image_3'])?$primary = customerproduct.$v['image_3']:'';
                              !empty($v['image_4'])?$hover = customerproduct.$v['image_4']:'';
                              !empty($v['image_5'])?$hover = customerproduct.$v['image_5']:'';
                              !empty($v['image_6'])?$hover = customerproduct.$v['image_6']:'';
                                $actualprice = $v['actualprice'];
                                $sellingprice = $v['sellingprice'];    
                                $productId = $v['id'];
                                    ?>
                                <div class="col-12 item">
                                    <!-- start product image -->
                                    <div class="product-image">
                                        <!-- start product image -->
                                        <a href="./product?product=<?php echo $productId;?>">
                                            <!-- image -->
                                            <img class="primary blur-up lazyload" data-src="" src="<?php echo $primary;?>" alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="hover blur-up lazyload" data-src="" src="<?php echo $hover;?>" alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span class="lbl on-sale">-16%</span> <span class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                    </div>
                                    <!-- end product image -->

                                    <!--start product details -->
                                    <div class="product-details text-center">
                                        <!-- product name -->
                                        <div class="product-name">
                                            <a href="./product?product=<?php echo $productId;?>" style="color: rgb(239, 239, 247);"><?php echo $productName;?></a>
                                        </div>
                                        <!-- End product name -->
                                    </div>
                                    <!-- End product details -->
                                </div>
                          <?php } ?>
                       
                            </div>
                        </div>
                    <!--End Recently Product Slider-->
                    </div>
                <!--#ProductSection-product-template-->
            </div>
            <!--MainContent-->
        </div>
    	<!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer">
        <div class="site-footer">
        	<div class="container">
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                    	<div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Quick Shop</h4>
                            <ul>
                            	<li><a href="./product?product=<?php echo $productId;?>">Women</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Men</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Kids</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Sportswear</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Informations</h4>
                            <ul>
                            	<li><a href="./product?product=<?php echo $productId;?>">About us</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Careers</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Privacy policy</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Terms &amp; condition</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                        	<h4 class="h4">Customer Services</h4>
                            <ul>
                            	<li><a href="./product?product=<?php echo $productId;?>">Request Personal Data</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">FAQ's</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Contact Us</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Orders and Returns</a></li>
                                <li><a href="./product?product=<?php echo $productId;?>">Support Center</a></li>
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
     <!-- Photoswipe Gallery -->
     <script src="assets/js/vendor/photoswipe.min.js"></script>
     <script src="assets/js/vendor/photoswipe-ui-default.min.js"></script>
     <script>
        $(function(){
            var $pswp = $('.pswp')[0],
                image = [],
                getItems = function() {
                    var items = [];
                    $('.lightboximages a').each(function() {
                        var $href   = $(this).attr('href'),
                            $size   = $(this).data('size').split('x'),
                            item = {
                                src : $href,
                                w: $size[0],
                                h: $size[1]
                            }
                            items.push(item);
                    });
                    return items;
                }
            var items = getItems();
        
            $.each(items, function(index, value) {
                image[index]     = new Image();
                image[index].src = value['src'];
            });
            $('.prlightbox').on('click', function (event) {
                event.preventDefault();
              
                var $index = $(".active-thumb").parent().attr('data-slick-index');
                $index++;
                $index = $index-1;
        
                var options = {
                    index: $index,
                    bgOpacity: 0.9,
                    showHideOpacity: true
                }
                var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
                lightBox.init();
            });
        });
        </script>
    </div>

	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        	<div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap"><div class="pswp__container"><div class="pswp__item"></div><div class="pswp__item"></div><div class="pswp__item"></div></div><div class="pswp__ui pswp__ui--hidden"><div class="pswp__top-bar"><div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button><button class="pswp__button pswp__button--share" title="Share"></button><button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button><div class="pswp__preloader"><div class="pswp__preloader__icn"><div class="pswp__preloader__cut"><div class="pswp__preloader__donut"></div></div></div></div></div><div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap"><div class="pswp__share-tooltip"></div></div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button><div class="pswp__caption"><div class="pswp__caption__center"></div></div></div></div></div>

</body>

<!-- belle/short-description.html   11 Nov 2019 12:43:10 GMT -->
</html>