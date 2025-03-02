<?php
require_once 'header.php';
require_once 'topbar.php';
if(isset($_SESSION['customer']))
{
  $customer=$_SESSION['userid'];
$data=['con'=>$con, 'customer'=>$customer];


  $cartnf=Dbops::getCartBycustomer($data);
  $cartnf['n']>0?$cart=$cartnf['f']:$cart=[];
  $items=$cartnf['n'];

}

$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];
$latestproduct=$products[0]['id'];
?>    <!--Header-->
    <div class="header-wrap animated d-flex">
    	<div class="container-fluid">        
            <div class="row align-items-center">
            	<!--Desktop Logo-->
                <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                    <a href="./index">
                    	<img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
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
                	<nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                        <ul id="siteNav" class="site-nav medium center hidearrow">
                            <li class="lvl1 parent megamenu"><a href="./index" style="color: rgb(241, 244, 247);">Home <i class="anm anm-angle-down-l"></i></a>
                            </li>
                            
                        <li class="lvl1 parent megamenu"><a href="./product_category" style="color: rgb(247, 250, 253);">Product <i class="anm anm-angle-down-l"></i></a>
                        </li>
                        
                        <li class="lvl1"><a href="./product?product=<?php echo $latestproduct;?>" style="color: rgb(248, 250, 252);"><b>Buy Now!</b> <i class="anm anm-angle-down-l"></i></a></li>
                      </ul>
                    </nav>
                    <!--End Desktop Menu-->
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                	<div class="logo">
                        <a href="./index">
                            <img src="./VID-20250112-WA0055_026.jpg" alt="Belle Multipurpose Html Template" title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                	<div class="site-cart">
                    	<a href="./cartlist" class="site-header__cart" title="Cart">
                        	<i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count"><?php  if(isset($items)){echo $items;} ?></span>
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
            <li><a href="about-us.html" class="site-nav">About Us <span class="lbl nm_label1">New</span></a></li>
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
    <div id="page-content" style="background-color: black;">
    	<!--Page Title-->
    	<div class="page section-header text-center" style="background-color: black;">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width" style="color: rgb(240, 243, 245);">Shopping Cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	
                	<form action="#" method="post" class="cart style2">
                		<table>
                            <thead class="cart__row cart__header" style="background-color: black;">
                                <tr style="background-color: black;">
                                    <th colspan="2" class="text-center" style="color: rgb(240, 243, 245); background-color: black;">Product</th>
                                    <th class="text-center" style="color: rgb(240, 243, 245); background-color: black;">Price</th>
                                    <th class="text-center" style="color: rgb(240, 243, 245); background-color: black;">Quantity</th>
                                    <th class="text-right" style="color: rgb(240, 243, 245); background-color: black;">Total</th>
                                    <th class="action" style="background-color: black;">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody>
                          <?php
                          $i=0;
                          $subtotal=0;
foreach($cart as $K=>$v){
  $cartid=$v['id'];
  $productName=$v['productname'];
  $size=$v['size'];
  $sellingprice=$v['sellingprice'];
  $quantity=$v['quantity'];
  !empty($v['img1'])?$img=customerproduct.$v['img1']:'';
  !empty($v['img2'])?$img=customerproduct.$v['img2']:'';
  !empty($v['img3'])?$img=customerproduct.$v['img3']:'';
  !empty($v['img4'])?$img=customerproduct.$v['img4']:'';
  !empty($v['img5'])?$img=customerproduct.$v['img5']:'';
  !empty($v['img6'])?$img=customerproduct.$v['img6']:'';
 $total=$quantity*$sellingprice;
 $subtotal+=$total;
 $shipping=0;
 $grandtotal=$shipping+$subtotal;
                          ?>
                                <tr class="cart__row border-bottom line1 cart-flex border-top">
                                    <td class="cart__image-wrapper cart-flex-item">
                                        <a href="#"><img class="cart__image" src="<?php echo $img;?>" alt="Elastic Waist Dress - Navy / Small"></a>
                                    </td>
                                    <td class="cart__meta small--text-left cart-flex-item">
                                        <div class="list-view-item__title">
                                            <a href="#" style="color: rgb(240, 243, 245);"><?php echo $productName;?> </a>
                                        </div>
                                        
                                        <div class="cart__meta-text" style="color: rgb(240, 243, 245);">
                                            <!--Color: Navy<br>-->Size: <?php echo ucwords($size);?><br>
                                        </div>
                                    </td>
                                    <td class="cart__price-wrapper cart-flex-item">
                                        <span class="money" style="color: rgb(240, 243, 245);">&#8377;<?php echo $sellingprice;?></span>
                                    </td>
                                    <td class="cart__update-wrapper cart-flex-item text-right">
                                        <div class="cart__qty text-center">
                                            <div class="qtyField">
                                                <!-- <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon icon-minus"></i></a> -->
                                                <!-- <input class="cart__qty-input qty text-white" type="text" name="updates[]" id="qty" value="1" pattern="[0-9]*"> -->
                                                                                              <p class="product-form__input qty text-white" ><?php echo $quantity;?></p>

                                                <!-- <a class="qtyBtn plus" href="javascript:void(0);"  onclick="qty(<?php echo $i;?>)"><i class="icon icon-plus"></i></a> -->
                                            </div>
                                        </div>
                                        <?php    ?>
                                        <script type="text/javascript">
                                          // function qty(temp){
                                          // let qty=document.getElementById('').value;
                                          // alert(temp);
                                          // }
                                          </script>
                                        <?php ?>
                                    </td>
                                    <td class="text-right small--hide cart-price">
                                        <div><span class="money" style="color: rgb(240, 243, 245);">&#8377;<?php echo $total;?></span></div>
                                    </td>
                                    <td class="text-center small--hide " onclick="removefromcart('<?php  echo $cartid;?>')"><a  class="btn btn--secondary text-danger cart__remove " title="Remove tem"><i class="icon icon anm anm-times-l "></i></a></td>
                                </tr>

    <script type="text/javascript">
      function removefromcart(temp){
          let remove="cartid="+temp;

           window.location=`./order/removefromcart?${remove}`;
      alert(temp);}
      //ajax call
    </script>

                                <?php }?>
  
   

                            </tbody>
                    		<tfoot>
                                <!-- <tr>
                                    <td colspan="3" class="text-left"><a href="http://annimexweb.com/" class="btn btn-secondary btn--small cart-continue">Continue shopping</a></td>
                                    <td colspan="3" class="text-right">
	                                    <button type="submit" name="clear" class="btn btn-secondary btn--small  small--hide">Clear Cart</button>
                                    	<button type="submit" name="update" class="btn btn-secondary btn--small cart-continue ml-2">Update Cart</button>
                                    </td>
                                </tr> -->
                            </tfoot>
                    </table> 
                    </form>                   
               	</div>
                
                
                <div class="container mt-4">
                    <div class="row">
                    	<!--<div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5 style="color: rgb(240, 243, 245);">Discount Codes</h5>
                            <form action="#" method="post">
                            	<div class="form-group">
                                    <label for="address_zip" style="color: rgb(240, 243, 245);">Enter your coupon code if you have one.</label>
                                    <input type="text" name="coupon">
                                </div>
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Apply Coupon"></div>
                                </div>
                            </form>
                        </div>-->
                       <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 mb-4">
                        	<h5 style="color: rgb(240, 243, 245);">Estimate Shipping and Tax</h5>
							<form action="#" method="post">
                                <div class="form-group">
                                    <label for="address_country" style="color: rgb(240, 243, 245);">Country</label>
                                    
                                </div>
    
                                <div class="form-group">
                                    <label style="color: rgb(240, 243, 245);">State</label>
                                </div>
                                <div class="form-group">
                                    <label for="address_zip" style="color: rgb(240, 243, 245);">Postal/Zip Code</label>
                                    <input type="text" id="address_zip" name="address[zip]">
                                </div>
    
                                <div class="actionRow">
                                    <div><input type="button" class="btn btn-secondary btn--small" value="Calculate shipping"></div>
                                </div>
                            </form>
                        </div>
                        -->
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                            <div class="solid-border">	
                              <div class="row border-bottom pb-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title" style="color: rgb(240, 243, 245);">Subtotal</span>
                                <span class="col-12 col-sm-6 text-right"><span class="money" style="color: rgb(240, 243, 245);">&#8377;<?php echo $subtotal;?></span></span>
                              </div>
                             <!--  <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title" style="color: rgb(240, 243, 245);">Tax</span>
                                <span class="col-12 col-sm-6 text-right" style="color: rgb(240, 243, 245);">$10.00</span>
                              </div> -->
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title" style="color: rgb(240, 243, 245);">Shipping</span>
                                <span class="col-12 col-sm-6 text-right" style="color: rgb(240, 243, 245);">Free shipping</span>
                              </div>
                              <div class="row border-bottom pb-2 pt-2">
                                <span class="col-12 col-sm-6 cart__subtotal-title" style="color: rgb(240, 243, 245);"><strong>Grand Total</strong></span>
                                <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right" style="color: rgb(240, 243, 245);"><span class="money">&#8377;<?php if(isset($grandtotal)){echo $grandtotal;}?></span></span>
                              </div>
                              <div class="cart__shipping" style="color: rgb(240, 243, 245);">Shipping &amp; taxes calculated at checkout</div>
                              <p class="cart_tearm" style="color: rgb(240, 243, 245);">
                                <label >
                                  <input type="checkbox" name="tearm" class="checkbox" value="tearm" required="" style="color: rgb(240, 243, 245);">
                                  I agree with the terms and conditions
								</label>
                              </p>
                              <!-- <input type="submit" name="checkout" id="cartCheckout" class="btn btn--small-wide checkout"  value="Proceed To Checkout"disabled="disabled"> -->
                              <p  class="btn btn--small-wide checkout" id="cartCheckout"  onclick="window.location='./checkout'" >Proceed To Checkout</p>
                              <div class="paymnet-img"><img src="assets/images/payment-img.jpg" alt="Payment"></div>
                              <p><a href="./checkout">Checkout with Multiple Addresses</a></p>
                            </div>
        
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </div>
    <!--End Body Content-->
    

    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
 <script type="text/javascript">
                                                    // function removefromcart(){ alert('cliked');
                                                    //     let product='<?php echo $productId;?>';
                                                    //     let size=document.getElementById('size').innerHTML;
                                                    //     let quantity=document.getElementById('quantity').value;
                                                    //     let cartid='<?php echo $cartid?>';
                                                    //     let remove="cartid="+cartid;

                                                    //    // window.location=`./order/removefromcart?${remove}`;
                                                    //     //window.location="./cart/add?product="+product+"&size=s&quantity=1";//make ajax now it is not working
                                                    // }
                                                </script>



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

<!-- belle/cart-variant1.html   11 Nov 2019 12:44:32 GMT -->
</html>