<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from `order` where order_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from `order` order by order_id";
$res=mysqli_query($con,$sql);

?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Order </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Customer ID</th>
                                       <th>Address</th>
                                       <th>Pincode</th>
                                       <th>E-mail</th>
                                       <th>Contact No</th>
                                       <th>Payment Type</th>
                                       <th>Payment Status</th>
                                       <th>Order Status</th>
                                       <th>Total Price</th>
                                       <th>Add On</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
							               $i=1;
							               while($row=mysqli_fetch_assoc($res)){?>
							               <tr>
                                       <td class="serial" hidden="hidden"><?php echo $i?></td>
                                       <td class="product-add-to-cart"><a href="orderdetail.php?id=<?php echo $row['order_id']?>"> <?php echo $row['order_id']?></a></td>
                                       
                                       <td><?php echo $row['customer_id']?></td>
                                       <td><?php echo $row['customer_address']?></td>
                                       <td><?php echo $row['customer_pincode']?></td>
                                       <td><?php echo $row['customer_email']?></td>                                       
                                       <td><?php echo $row['customer_contactno']?></td>                                       
                                       <td><?php echo $row['payment_type']?></td>
                                       <td><?php echo $row['payment_status']?></td>  
                                       <td><?php echo $row['order_status']?></td>  
                                       <td><?php echo $row['total_price']?></td>  
                                       <td><?php echo $row['added_on']?></td>  
                                       <td>
								               <?php
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['order_id']."'>Delete</a></span>";
                                       ?>
							                  </td>                                                                          
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
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