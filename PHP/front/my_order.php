<?php 
require('top.php');
if(!isset($_SESSION['CUSTOMER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
?>
<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="myorder-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="myorder-content">
                            <form action="#">
                                <div class="myorder-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail">Order ID</th>
                                                <th class="product-name"><span class="nobr">Order Date</span></th>
                                                <th class="product-price"><span class="nobr"> Address </span></th>
                                                <th class="product-stock-stauts"><span class="nobr"> Payment Type </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Payment Status </span></th>
												<th class="product-stock-stauts"><span class="nobr"> Order Status </span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php
											$customer_id=$_SESSION['CUSTOMER_ID'];
											$res=mysqli_query($con,"select * from `order` where customer_id='$customer_id'");
											while($row=mysqli_fetch_assoc($res)){
											?>
                                            <tr>
												<td><a class="fr__btn" href="my_order_details.php?id=<?php echo $row['order_id']?>"> <?php echo $row['order_id']?></a></td>
                                                <td class="product-name"><?php echo $row['added_on']?></td>
                                                <td class="product-name">
												<?php echo $row['customer_address']?><br/>
												<?php echo $row['customer_pincode']?>
												</td>
												<td class="product-name"><?php echo $row['payment_type']?></td>
												<td class="product-name"><?php echo $row['payment_status']?></td>
												<td class="product-name"><?php echo $row['order_status']?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<style>
.myorder-table table {
      background: #fff none repeat scroll 0 0;
      border-color: #c1c1c1;
      border-radius: 0;
      border-style: solid;
      border-width: 1px 0 0 1px;
      width: 100%;
  }
  .myorder-table table th {
      font-weight: 600;
  } 
  .myorder-table table th {
      border-bottom: 1px solid #c1c1c1;
      border-right: 1px solid #c1c1c1;
      color: #000;
      font-family: Bookman Old Style;
      font-size: 16px;
      font-weight: 600;
      padding: 15px 10px;
      text-align: center;
  }
  .myorder-table table td{
      border-bottom: 1px solid #c1c1c1;
      border-right: 1px solid #c1c1c1;
      color: #000;
      font-family: Cambria;
      font-size: 16px;
      font-weight: 600;
      padding: 15px 10px;
      text-align: center;
  }
  .myorder-table table .product-remove {
      padding: 0 15px;
      width: 20px;
  }
  .myorder-table table .product-remove > a, 
  .table-content table .product-remove > a {
      font-size: 25px;
  }
  .myorder-table table .product-thumbnail {
      width: 150px;
  }
  .myorder-table table td.product-price .amount {
      font-weight: 700;
  }
  .myorder-table table .myorder-in-stock {
      color: #444;
  }
  .myorder-table table .product-add-to-cart > a {
      background: #252525 none repeat scroll 0 0;
      color: #fff;
      display: block;
      font-weight: 700;
      padding: 10px 56px;
      text-transform: uppercase;
      width: 260px;
  }
  .myorder-table table .product-add-to-cart > a:hover{
      background: #A87C3C;
      color: #fff;
  }
  .myorder-table table .product-add-to-cart {
      width: 240px;
  }
  .myorder-share {
      margin-bottom: 35px;
      margin-top: 20px;
  }
  .myorder-share ul li {
      display: inline-block;
      height: 21px;
      margin-left: 0;
      margin-right: 0;
  }
  .myorder-share ul li a{background-position: left top;
      border: medium none;
      display: inline-block;
      height: 21px;
      width: 21px;
  }
  .myorder-share ul li a:hover{
      background-position: left bottom;
  }
  .myorder-share .social-icon ul {
      display: flex;
      justify-content: center;
      margin-top: 10px;
  }
</style>
        						
<?php require('footer.php')?>        