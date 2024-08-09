<?php require('top.php')?>



        <!-- Start Slider Area -->
        <div class="slider__container slider--one bg__cat--3">
            <div class="slide__container slider__activation__wrap owl-carousel">
                <!-- Start Single Slide -->
                <div class="single__slide animation__style01 slider__fixed--height">
                    <div class="container">
                        <div class="row align-items__center">
                            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                                <div class="slide">
                                    <div class="slider__inner">
                                    <h2>Bhramani Electricals</h2>
                                        <h1>LAMPS & LIGHTS</h1>
                                        <div class="cr__btn">
                                            <a href="shop.php">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                                <div class="slide__thumb">
                                    <img src="images/slider/fornt-img/2.jpg" alt="slider images" height="360" width="8100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div><br><br><br>
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        <section class="htc__category__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">New Arrivals</h2>
                        </div>
                    </div>
                </div><br><br>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                           <?php
                           $get_porduct=get_porduct($con, 'latest', 8, '');  
                           foreach($get_porduct as $list){
                           ?>
                            <!-- Start Single Category -->
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                            <div class="category">
                                                <div class="ht__cat__thumb">
                                                    <a href="product.php?id=<?php echo $list['product_id']?>">
                                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['product_image']?>" alt="product images" height="300px" width="200px">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="javascript:void(0)" onclick="manage_wishlist('<?php echo $list['product_id']?>','add')"><i class="icon-heart icons"></i></a></li>
                                                        <li><a href="javascript:void(0)" onclick="manage_cart('<?php echo $list['product_id']?>','add')"><i class="icon-handbag icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="product-details.html"><?php echo $list['product_name']?></a></h4>
                                                    <ul class="fr__pro__prize">
                                                        <!-- <li class="old__prize"><del>₹ 1599 </del></li> -->
                                                        <li>₹ <?php echo $list['product_price']?></li>
                                                    </ul>
                                                </div>
                                                <div class="sin__desc" hidden="hidden">
                                                    <center><p><span>Quantity : &nbsp;</span><input type="number" id="qty" min="1" max="10"/></p></center>
                                                </div>
                                            </div>
                                        </div>
                            <!-- End Single Category -->
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Category Area -->
        <!-- Start Product Area -->
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Reviews</h2>
                        </div>
                    </div>
                </div><br><br><br><br>
                        <?php
                        require('reviews.php'); 
                        ?>
            </div>
        </section>
        <!-- End Product Area -->

<?php require('footer.php')?>