<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from payment where payment_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from payment order by payment_id";
$res=mysqli_query($con,$sql);

?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Payments</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Cardholder Name</th>
                                       <th>Card Number</th>
                                       <th>CVV</th>
                                       <th>Expiry month</th>
                                       <th>Expiry year</th>
                                       <th>Add On</th>
                                       <th width="150px"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
							               $i=1;
							               while($row=mysqli_fetch_assoc($res)){?>
							               <tr>
                                       <td class="serial" hidden="hidden"><?php echo $i?></td>
                                       <td><?php echo $row['payment_id']?></td>
                                       <td><?php echo $row['cardholder_name']?></td>
                                       <td><?php echo $row['card_number']?></td>
                                       <td><?php echo $row['cvv']?></td> 
                                       <td><?php echo $row['expiry_month']?></td> 
                                       <td><?php echo $row['expiry_year']?></td> 
                                       <td><?php echo $row['payment_added_on']?></td>  
                                       <td>
								               <?php
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['payment_id']."'>Delete</a></span>";
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