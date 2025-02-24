<div id="header-cart" class="block block-cart" style="background-color: black;">
                          <ul class="mini-products-list">

                       <?php 
                       if(isset($_SESSION['customer']))
{
  $customer=$_SESSION['userid'];
$data=['con'=>$con, 'customer'=>$customer];


  $cartnf=Dbops::getCartBycustomer($data);
  $cartnf['n']>0?$cart=$cartnf['f']:$cart=[];


}
                       foreach($cart as $K=>$v){
  $productName=$v['productname'];
  $size=$v['size'];
  $sellingprice=$v['sellingprice'];
  $quantity=$v['quantity'];
  $subtotal=0;
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
                              <li class="item">
                                  <a class="product-image" href="./product?product">
                                      <img src="<?php echo $img;?>" alt="3/4 Sleeve Kimono Dress" title="" />
                                  </a>
                                  <div class="product-details">
                                      <!-- <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a> -->
                                      <a href="./cartlist" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                      <a class="pName" href="./cartlist">Sleeve Kimono Dress</a>
                                      <div class="variant-cart text-white"><?php echo ucwords($size);?></div>
                                      <div class="wrapQtyBtn">
                                          <div class="qtyField">
                                              <span class="label text-white">Qty:</span>
                                              <!-- <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true" onclick="decrement()"></i></a> -->
                                              <!-- <input type="text" id="quantity" name="quantity" value="1" class="product-form__input qty text-white" onchange="updatecart()"> -->

                                              <p class="product-form__input qty text-white" >1</p>
                                              <!-- <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true" onclick="increment()"></i></a> -->
                                          </div>

                                                    <script type="text/javascript">function increment(){
                                                        let Quantity=document.getElementById('quantity').value;
                                                        //alert(Quantity);
                                                       //ajax call to update cart 
                                             
                                                    }

                                                    function decrement(){
                                                        let Quantity=document.getElementById('quantity').value;
                                                       //alert(Quantity);
                                                       //ajax call to update cart
                                                    }


                                                </script>
                                      </div>
                                      <div class="priceRow">
                                          <div class="product-price">
                                              <span class="money">&#8377;<?php echo $sellingprice;?> </span>
                                          </div>
                                       </div>
                                  </div>
                              </li>
                            <?php } ?>
                              <!-- <li class="item">
                                  <a class="product-image" href="#">
                                      <img src="./Women/smiling-woman-tshirt-mockup-with-pink-wall-0045.png" alt="Elastic Waist Dress - Black / Small" title="" />
                                  </a>
                                  <div class="product-details">
                                      <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                      <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
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
                              </li> -->
                          </ul>
                          <div class="total">
                              <div class="total-in">
                                  <span class="label text-white">Cart Subtotal:</span><span class="product-price"><span class="money text-white">&#8377;<?php if(isset($subtotal)){echo $subtotal;}?></span></span>
                              </div>
                               <div class="buttonSet text-center">
                                  <a href="./cartlist" class="btn btn-secondary btn--small">View Cart</a>
                                  <a href="./checkout" class="btn btn-secondary btn--small">Checkout</a>
                              </div>
                          </div>
                      </div>