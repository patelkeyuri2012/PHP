<?php 
require('top.php');

$product_id=mysqli_real_escape_string($con, '');
$get_porduct=get_porduct($con, '', '', $product_id);  
?>

        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail">Remove</th>
                                            <th class="product-name">Image</th>
                                            <th class="product-price">Product Name</th>
                                            <th class="product-quantity">Price</th>
                                            <th class="product-subtotal">Add To Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
										if(isset($_SESSION['wishlist'])){
											foreach($_SESSION['wishlist'] as $key=>$val){
											$productArr=get_porduct($con, '', '', $key);
											$name=$productArr[0]['product_name'];
											$price=$productArr[0]['product_price'];
											$image=$productArr[0]['product_image'];
											$qty=$val['qty'];

										?>
                                        
                                        <tr>
                                            <td class="product-remove"><a href="javascript:void(0)" onclick="manage_wishlist('<?php echo $key?>','remove')"><i class="">×</i></a></td>
                                            <td class="product-thumbnail"  height="200px" width="250px"><a href="product.php"><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="product images" height="100px" width="100px"/></a></td>
                                            <td class="product-name"><a href="#"><h4><a href="product.php"><?php echo $name?></a></h4></a>
                                            <td class="product-price"><span class="amount">₹<?php echo $price?></span>
                                                <div class="sin__desc" hidden="hidden">
                                                    <center><p><span>Quantity : &nbsp;</span><input type="number" id="qty" min="1" max="10"/></p></center>
                                                </div>
                                            </td>
                                            <td class="product-add"><a class="fr__btn" href="javascript:void(0)" onclick="manage_cart('<?php echo $productArr[0]['product_id']?>','add')">Add to cart</a></td>
                                            
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </form> 
                    </div>
                </div>
            </div>
        </div>
										
<?php require('footer.php')?>        