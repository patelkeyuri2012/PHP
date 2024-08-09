<?php 
require('top.php');
$subcat_id=mysqli_real_escape_string($con, $_GET['id']);
$get_subcat=get_subcat($con, $subcat_id);                                
?>

<div class="body__overlay"></div>
        
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Grid -->
        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <?php
                    if(count($get_subcat)>0){
                    ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="#"></a>
                                            <ul class="dropdown">
                                                <li><a>Sort by Highest Price</a></li>
                                                <li><a>Sort by Lowest Price</a></li>
                                                <li><a>Sort by Newest</a></li>
                                                <li><a>Sort by Oldest</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            
                                
                                <!-- Start List And Grid View -->
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">
                                        <!-- Start Single Product -->
                                        <?php 
                                        foreach($get_subcat as $list){
                                        ?>

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
                                        <?php
                                        }
                                        ?>
                                        <!-- End Single Product -->
                                    </div>
                                    <div role="tabpanel" id="list-view" class="single-grid-view tab-pane fade clearfix">
                                        <div class="col-xs-12">
                                            <div class="ht__list__wrap">
                                                <!-- Start List Product -->
                                                <?php               
                                                $get_subcat=get_subcat($con, $subcat_id);                         
                                                foreach($get_subcat as $list){
                                                ?>
                                                <div class="ht__list__product">
                                                    <div class="ht__list__thumb">
                                                    <a href="product.php?id=<?php echo $list['product_id']?>">
                                                        <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$list['product_image']?>" alt="product images" height="350px" width="250px"/>
                                                    </a>
                                                    </div>
                                                    <div class="htc__list__details"><br>
                                                    <h2><a href="product-details.html"><?php echo $list['product_name']?></a></h2><br>
                                                        <ul  class="pro__prize">
                                                            <!-- <li class="old__prize"><del>₹ 1599 </del></li> -->
                                                            <li>₹ <?php echo $list['product_price']?></li>
                                                        </ul>

                                                        <div class="sin__desc">
                                                        <p><span>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                                        <input type="number" id="qty" min="1" max="10"/>
                                                        </p>
                                                        </div><br>

                                                        <li><?php echo $list['product_description']?></li><br>
                                                        <div class="fr__list__btn">
                                                        <a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $list['product_id']?>','add')">Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                }
                                                ?>
                                                <!-- End List Product -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    <?php
                    } else {
                        echo "DATA NOT FOUND";
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
        
       
        

<?php require('footer.php')?>