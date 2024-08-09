<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from `order_detail` where order_detail_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}
$sql="select * from `order_detail` order by order_detail_id";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Order Details</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Oredr ID</th>
                                       <th>Product ID</th>
                                       <th>Quantity</th>
                                       <th>Price</th>
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
                                       <td><?php echo $row['order_detail_id']?></td>
                                       <td><?php echo $row['order_id']?></td>
                                       <td><?php echo $row['product_id']?></td>
                                       <td><?php echo $row['product_qauntity']?></td>                                       
                                       <td><?php echo $row['product_price']?></td>                                       
                                       <td><?php echo $row['added_on']?></td> 
                                       <td>
								               <?php
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['order_detail_id']."'>Delete</a></span>";
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