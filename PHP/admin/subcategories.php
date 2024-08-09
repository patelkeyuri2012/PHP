<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
   if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from subcategory where subcategory_id='$id'";
		mysqli_query($con,$delete_sql);
	}
}

$sql="select * from subcategory order by subcategory_id";
$res=mysqli_query($con,$sql);
?>

<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Sub - Categories </h4>
                           <h4 class="box-link"><a href="managesubcategories.php"> Add Sub - Categories </a></h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial" hidden="hidden">#</th>
                                       <th>ID</th>
                                       <th>Category ID</th>
                                       <th>Sub-category Name</th>
                                       <th>Sub-category Description</th>
                                       <th width="150px"></th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
							               $i=1;
							               while($row=mysqli_fetch_assoc($res)){?>
							               <tr>
                                       <td class="serial" hidden="hidden"><?php echo $i?></td>
                                       <td><?php echo $row['subcategory_id']?></td>
                                       <td><?php echo $row['category_id']?></td>
                                       <td><?php echo $row['subcategory_name']?></td>
                                       <td><?php echo $row['subcategory_description']?></td>  
                                       <td>
								               <?php
													echo "<span class='badge badge-edit'><a href='managesubcategories.php?id=".$row['subcategory_id']."'>Edit</a></span>";
                                       echo "&nbsp;<span class='badge badge-delete'><a href='?type=delete&id=".$row['subcategory_id']."'>Delete</a></span>";
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