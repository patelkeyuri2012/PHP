<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from customer where customer_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from customer order by customer_id";
$res=mysqli_query($con,$sql);

?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Customer</h4>
                           
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Customer Name</th>
                                       <th>Gender</th>
                                       <th>E-mail</th>
                                       <th>Password</th>
                                       <th>Address</th>
                                       <th>Pincode</th>
                                       <th>Contact No</th>
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
                                       <td><?php echo $row['customer_id']?></td>
                                       <td><?php echo $row['customer_name']?></td>
                                       <td><?php echo $row['customer_gender']?></td>
                                       <td><?php echo $row['customer_email']?></td>
                                       <td><?php echo $row['customer_password']?></td> 
                                       <td><?php echo $row['customer_address']?></td> 
                                       <td><?php echo $row['customer_pincode']?></td>
                                       <td><?php echo $row['customer_contactno']?></td>
                                       <td><?php echo $row['customer_added_on']?></td>  
                                       <td>
								               <?php
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['customer_id']."'>Delete</a></span>";
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