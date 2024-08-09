<?php 
require('top.php');
if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
	?>
	<script>
		window.location.href='index.php';
	</script>
	<?php
}

$cart_total=0;

if(isset($_POST['submit'])){
	$address=get_safe_value($con,$_POST['address']);
	$pincode=get_safe_value($con,$_POST['pincode']);
    $email=get_safe_value($con,$_POST['email']);
    $contact_no=get_safe_value($con,$_POST['contact_no']);
	$payment_type=get_safe_value($con,$_POST['payment_type']);
	$customer_id=$_SESSION['CUSTOMER_ID'];

    $res=mysqli_query($con,"select * from `order` where customer_id='$customer_id'");


	foreach($_SESSION['cart'] as $key=>$val){
        $productArr=get_porduct($con, '', '', $key);
		$price=$productArr[0]['product_price'];
		$qty=$val['qty'];
		$cart_total=$cart_total+($price*$qty);
	}
	$total_price=$cart_total;
	$payment_status='pending';
	if($payment_type=='creditcard'){
		$payment_status='success';
	}
	$order_status='pending';
	$added_on=date('Y-m-d h:i:s');

	mysqli_query($con,"insert into `order` (customer_id,customer_address,customer_pincode,customer_email,customer_contactno,payment_type,payment_status,order_status,total_price,added_on) values ('$customer_id','$address','$pincode','$email','$contact_no','$payment_type','$payment_status','$order_status','$total_price','$added_on')");
	
	$order_id=mysqli_insert_id($con);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_porduct($con, '', '', $key);
		$price=$productArr[0]['product_price'];
		$qty=$val['qty'];
		mysqli_query($con,"insert into `order_detail` (order_id,product_id,product_qauntity,product_price,added_on) values ('$order_id','$key','$qty','$price','$added_on')");
	}
    unset($_SESSION['cart'])
	?>
	<script>
		window.location.href='thank_you.php';
	</script>
	<?php
	
	
}
?>


<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php
                                    if (!isset($_SESSION['CUSTOMER_LOGIN'])){
                                    ?>
                                    <div class="accordion__title">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-7">
                                                    <div class="checkout-method__login">
                                                        <h5 class="checkout-method__title">Log In</h5>
                                                        <div class="dark-btn">
                                                            <a href="login_for_cart.php">Log In</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class = "vertical"></div>
                                                <div class="col-md-5">
                                                    <div class="checkout-method__login">
                                                        <form action="#">
                                                            <h5 class="checkout-method__title">Register</h5>
                                                            <div class="dark-btn">
                                                                <a href="registration_for_cart.php">Register</a>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    
                                    <div class="accordion__title">
                                        Address Information
                                    </div>
                                        <div class="accordion__body">
                                        <form method="post">
                                            <div class="bilinfo">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="add-input">
                                                            <h6 class="checkout-method__title"><label for="user-address">Address</label></h6>
                                                            <input type="text" id="address" name="address" placeholder="Enter Your Address" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                            <h6 class="checkout-method__title"><label for="user-pincode">Pincode</label></h6>
                                                            <input type="text" id="pincode" name="pincode" placeholder="Enter Pincode" pattern="[0-9]{6}" title="Please enter valid pincode" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                            <h6 class="checkout-method__title"><label for="user-email" >Email</label></h6>
                                                            <input type="email" id="email" name="email" placeholder="Enter Your Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="single-input">
                                                            <h6 class="checkout-method__title"><label for="user-contact_no">Contact No.</label></h6>
                                                            <input type="text" id="contact_no" name="contact_no" placeholder="Enter Your Contact No." pattern="[789][0-9]{9}" title="Please enter valid contact no." required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                        </div>
                                        <div class="accordion__title">
                                            Payment Information
                                        </div>
                                        <div class="accordion__body">
                                            <div class="paymentinfo">
                                                                                
                                                <div class="single-method">
                                                <label class="radio"><h6 class="checkout-method__title"><a href="credit.php"><b>Credit Card</b></a></h6>
                                                <input type="radio" name="payment_type" value="creditcard" ><span class="checkmark"></span></label>
                                                </div>

                                                <div class="single-method">
                                                <label class="radio"><h6 class="checkout-method__title"><a href="debit.php"><b>Debit Card</b></a></h6>
                                                <input type="radio" name="payment_type" value="debitcard" ><span class="checkmark"></span></label>
                                                </div><br>
                                                
                                            </div>
                                        </div>
                                        <div class="contact-btn">
                                            <button type="submit" name="submit" class="fv-btn" value="place_order">PLACE ORDER</button><br>
                                        </div>                                         
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <div class="order-details__item">
                            <?php
										if(isset($_SESSION['cart'])){
											foreach($_SESSION['cart'] as $key=>$val){
											$productArr=get_porduct($con, '', '', $key);
											$name=$productArr[0]['product_name'];
											$price=$productArr[0]['product_price'];
											$image=$productArr[0]['product_image'];
											$qty=$val['qty'];
                                            $cart_total=$cart_total+($price*$qty);

										?>
                                <div class="single-item">
                                
                                    <div class="single-item__thumb">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$image?>" alt="product images" width="70px" height="50px"/>
                                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <div class="single-item__content">
                                        <a href="#"><h4><a href="#"><?php echo $name?></a></h4></a><br>
                                        <span class="price">Price : ₹<?php echo $price?></span>
                                        <span class="qty">Qty : <?php echo $qty?></span>
                                    </div>
                                    <div class="single-item__remove"><br><br><br>
                                        <a href="javascript:void(0)" onclick="checkout('<?php echo $key?>','remove')"><i class="fa fa-trash" style="font-size:24px"></i></a>
                                    </div>
                                </div><br><?php } } ?>  
                            </div>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>sub total</h5>
                                    <span class="price">₹<?php echo $cart_total?>.00</span>
                                </div>
                                <div class="order-details__count__single">
                                    <h5>tax</h5>
                                    <span class="price">₹<?php echo $cart_total/100?></span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>order total</h5>
                                <span class="price">₹<?php echo ($cart_total)+($cart_total/100)?></span>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- cart-main-area end -->

<style>

.dark-btn a{
      display: inline-block;
      height: 45px;
      line-height: 45px;
      text-align: center;
      text-transform: uppercase;
      background: #A87C3C;
      color: #ffffff;
      font-family: "Poppins";
      padding: 0 45px;
      font-weight: 600;
      letter-spacing: 1px;
      font-size: 16px;
      transition: all 0.3s ease-in-out 0s;
  }
  .dark-btn a:hover{
      background: #212121;
  }
  .vertical {
            border-left: 5px solid #A87C3C;
            height: 80px;
            position:absolute;
            left: 50%;
        }

        .bilinfo .add-input,
  .paymentinfo-credit-content .add-input,
  .shipinfo .add-input{
      margin-top: 20px;
  }
  .bilinfo .add-input.mt-0,
  .paymentinfo-credit-content .add-input.mt-0,
  .shipinfo .add-input.mt-0{
      margin-top: 0px;
  }
  .bilinfo .add-input input,
  .shipinfo .add-input input,
  .paymentinfo-credit-content .add-input input,
  .bilinfo .add-input select,
  .paymentinfo-credit-content .add-input select,
  .shipinfo .add-input select{
      height: 100px;
      line-height: 40px;
      padding: 0 15px;
      font-family: "poppins";
      transition: all 0.3s ease-in-out 0s;
      border: 1px solid #888;
  }
  .bilinfo .add-input input:focus,
  .shipinfo .add-input input:focus,
  .paymentinfo-credit-content .add-input input:focus,
  .bilinfo .add-input select:focus,
  .shipinfo .add-input select:focus,
  .paymentinfo-credit-content .add-input select:focus,
  .bilinfo .add-input select:active,
  .paymentinfo-credit-content .add-input select:active,
  .shipinfo .add-input select:active{
      outline: none;
      border: 1px solid #A87C3C;
  }

  .radio {
  display: block;
  position: relative;
  padding-left: 50px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.radio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

.radio:hover input ~ .checkmark {
  background-color: #ccc;
}

.radio input:checked ~ .checkmark {
  background-color: #A87C3C;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.radio input:checked ~ .checkmark:after {
  display: block;
}

.radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}


</style>
        
<?php require('footer.php')?>        
