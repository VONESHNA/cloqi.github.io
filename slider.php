             <?php 
            $dir='./assets/slider/';
        $banners=['banner_shop_now','banner_free_ship','banner_now_avail'];$ext='.png';$banner1=$dir.$banners[0].$ext; $banner2=$dir.$banners[1].$ext;$banner3=$dir.$banners[2].$ext;?>       	


                <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="" src="<?php echo $banner1;?>" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        
                                        <span class="btn"><a href="./product?product=<?php echo $productId;?>"> Shop Now</a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>


                                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="" src="<?php echo $banner2;?>" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        
                                        <span class="btn"><a href="./product?product=<?php echo $productId;?>"> Shop Now</a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>



                                <div class="slide">
                    <div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="" src="<?php echo $banner3;?>" alt="Shop Our New Collection" title="Shop Our New Collection" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        
                                        <span class="btn"><a href="./product?product=<?php echo $productId;?>"> Shop Now</a></span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>