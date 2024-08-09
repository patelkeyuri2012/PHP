<?php 
require('top.php');
$product_id=mysqli_real_escape_string($con, $_GET['id']);
$get_porduct=get_porduct($con, 'latest', '', $product_id);  
?>

        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                            <div class="htc__product__details__tab__content">
                                <!-- Start Product Big Images -->
                                <div class="product__big__images">
                                    <div class="portfolio-full-image tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                                            <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_porduct['0']['product_image']?>" alt="full-image">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Big Images -->
                                
                            </div>
                        </div><br><br>
                        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                            <div class="ht__product__dtl">
                                <h2><?php echo $get_porduct['0']['product_name']?></h2><br>
                                <ul  class="pro__prize">
                                    <!--<li class="old__prize">$82.5</li>-->
                                    <li>₹ <?php echo $get_porduct['0']['product_price']?></li><br><br>
                                </ul>
                                               
                                <div class="sin__desc">
                                <p><span>Quantity&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                                <input type="number" id="qty" min="1" max="10"/>
                                </p>
                                </div>
                                
                                <p class="pro__info"><?php echo $get_porduct['0']['product_description']?></p><br>
                            </div>
                            
                            <div class="fr__list__btn">
                            <a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $get_porduct['0']['product_id']?>','add')">Add to cart</a>
                            </div>
                        </div>
                        
                    </div><br><br><br>
                        <div class="row" align="center">
                            <div class="column">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_porduct['0']['product_image2']?>" alt="full-image" width="200px" height="250px">
                            </div>
                            <div class="column">
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_porduct['0']['product_image3']?>" alt="full-image" width="200px" height="250px">
                            </div>
                            <div class="column">                                
                                <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_porduct['0']['product_image4']?>" alt="full-image" width="200px" height="250px">
                            </div>
                        </div>
                </div>
            </div>
            <!-- End Product Details Top -->
                            
        </section>
        <!-- End Product Details Area -->
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
<?php require('footer.php')?>