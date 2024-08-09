<?php
require('top.inc.php');
$order_id=get_safe_value($con,$_GET['id']);
if(isset($_POST['update_order_status'])){
	$update_order_status=$_POST['update_order_status'];
	if($update_order_status=='Success'){
		mysqli_query($con,"update `order` set order_status='$update_order_status',payment_status='' where order_id='$order_id'");
        
	}else{
		mysqli_query($con,"update `order` set order_status='$update_order_status' where order_id='$order_id'");
	}
	
}
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Order Detail </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table">
								<thead>
									<tr>
										<th class="product-thumbnail">Product Name</th>
										<th class="product-thumbnail">Product Image</th>
										<th class="product-name">Qty</th>
										<th class="product-price">Price</th>
										<th class="product-price">Total Price</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$res=mysqli_query($con,"select distinct(order_detail.order_detail_id) ,order_detail.*,product.product_name,product.product_image,`order`.customer_address,`order`.customer_pincode, `order`.order_status from order_detail,product ,`order` where order_detail.order_id='$order_id' and  order_detail.product_id=product.product_id GROUP by order_detail.order_detail_id");
									$total_price=0;
									
									$userInfo=mysqli_fetch_assoc(mysqli_query($con,"select * from `order` where order_id='$order_id'"));
									
									$address=$userInfo['customer_address'];
									$pincode=$userInfo['customer_pincode'];
									
									while($row=mysqli_fetch_assoc($res)){
									
									$total_price=$total_price+($row['product_qauntity']*$row['product_price']);
									?>
									<tr>
										<td class="product-name"><?php echo $row['product_name']?></td>
										<td class="product-name"> <img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['product_image']?>" width="70px" height="50px"></td>
										<td class="product-name"><?php echo $row['product_qauntity']?></td>
										<td class="product-name"><?php echo $row['product_price']?></td>
										<td class="product-name"><?php echo $row['product_qauntity']*$row['product_price']?></td>
										
									</tr>
									<?php } ?>
									<tr>
										<td colspan="3"></td>
										<td class="product-name">Total Price</td>
										<td class="product-name"><?php echo $total_price?></td>
									</tr>
								</tbody>
							
						</table>
							<div class="card-body">
								<strong>Address&nbsp;:&nbsp;</strong>
								<?php echo $address?>, <?php echo $pincode?><br/><br/><br/>
								<strong>Order Status&nbsp;:&nbsp;</strong><br/><br/>
									<form method="post">
										<select class="form-control" name="update_order_status" required>
											<option value="">Select Status</option>
											<?php
											$res=mysqli_query($con,"select * from order_status");
											while($row=mysqli_fetch_assoc($res)){
												if($row['name']==$order_status_name){
													echo "<option selected value=".$row['name'].">".$row['name']."</option>";
												}else{
													echo "<option value=".$row['name'].">".$row['name']."</option>";
												}
											}
											?>
										</select><br>
										<input type="submit" class="btn btn-lg btn-info btn-block"/>
									</form>
								</div>
							</div>
						</div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>