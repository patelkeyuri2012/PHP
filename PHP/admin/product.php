<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from product where product_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from product order by product_id";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Product</h4>
                           <h4 class="box-link"><a href="manageproduct.php"> Add Product </a></h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Sub-category ID</th>
                                       <th>Product Name</th>
                                       <th>Product Price</th>
                                       <th>Product Image1</th>
                                       <th>Product Image2</th>
                                       <th>Product Image3</th>
                                       <th>Product Image4</th>
                                       <th>Product Quantity</th>
                                       <th>Product Description</th>
                                       <th width="150px"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
							               $i=1;
							               while($row=mysqli_fetch_assoc($res)){?>
							               <tr>
                                       <td class="serial" hidden="hidden"><?php echo $i?></td>
                                       <td><?php echo $row['product_id']?></td>
                                       <td><?php echo $row['subcategory_id']?></td>
                                       <td><?php echo $row['product_name']?></td>
                                       <td><?php echo $row['product_price']?></td>                                       
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['product_image']?>" width="70px" height="50px"/></td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['product_image2']?>" width="70px" height="50px"/></td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['product_image3']?>" width="70px" height="50px"/></td>
                                       <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['product_image4']?>" width="70px" height="50px"/></td>
                                       <td><?php echo $row['product_quantity']?></td>
                                       <td><?php echo $row['product_description']?></td>  
                                       <td>
								               <?php
													echo "<span class='badge badge-edit'><a href='manageproduct.php?id=".$row['product_id']."'>Edit</a></span>";
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['product_id']."'>Delete</a></span>";
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