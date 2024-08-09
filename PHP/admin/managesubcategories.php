<?php
require('top.inc.php');
$id='';
$cid='';
$name='';
$description='';
$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
   $id=get_safe_value($con, $_GET['id']);
   $sql="select * from subcategory where subcategory_id='$id'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);

   if($check>0){
      $row=mysqli_fetch_assoc($res);  
      $id=$row['subcategory_id'];
      $cid=$row['category_id'];
      $name=$row['subcategory_name'];
      $description=$row['subcategory_description'];
   }else{
      header('location:subcatagories.php');
      die();   
   }
}

if(isset($_POST['submit'])){
   
   $id=get_safe_value($con,$_POST['id']);
   $cid=get_safe_value($con,$_POST['category_id']);
   $name=get_safe_value($con,$_POST['name']);
   $description=get_safe_value($con,$_POST['description']);

   $sql="select * from subcategory where subcategory_name='$name'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);
   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['subcategory_id']){

         }else{
            $msg="Sub - Category already exist";
         }

      }else{
         $msg="Sub - Category already exist";
      }
   }

   if($msg==''){
      if(isset($_GET['id']) && $_GET['id']!=''){
         mysqli_query($con, "update subcategory set category_id='$cid', subcategory_name='$name', subcategory_description='$description' where subcategory_id='$id'");
      }else{
         mysqli_query($con, "insert into subcategory (subcategory_id, category_id, subcategory_name, subcategory_description) values ('$id', '$cid', '$name', '$description')");
      }
      header('location:subcategories.php');
      die();
   }

}

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Sub - Category</strong> &nbsp; <small>Form</small></div>
                        <form method="post">
                        <div class="card-body card-block">
                           <div class="form-group">
                              <label for="category" class=" form-control-label">Category</label>
									   <select class="form-control" name="category_id">
										   <option>Select Category</option>
										   <?php
										   $res=mysqli_query($con,"select category_id,category_name from category order by category_id asc");
									   	while($row=mysqli_fetch_assoc($res)){
										   	if($row['category_id']==$cid){
											   	echo "<option selected value=".$row['category_id'].">".$row['category_name']."</option>";
											   }else{
											   	echo "<option value=".$row['category_id'].">".$row['category_name']."</option>";
											   }
									   	}
										   ?>
									   </select>
                           </div>



                        <div class="form-group"><label for="id" class=" form-control-label">Sub - Category Id</label><input type="text" name="id" placeholder="S01" class="form-control" required value="<?php echo $id ?>"></div>
                        <div class="form-group"><label for="name" class=" form-control-label">Sub -Category Name</label><input type="text" name="name" placeholder="Enter Sub - Category Name" class="form-control" required value="<?php echo $name ?>"></div>
                        <div class="form-group"><label for="description" class=" form-control-label">Sub -Category Description</label><input type="text" name="description" placeholder="Enter Sub - Category Description" class="form-control" required value="<?php echo $description ?>"></div>
                           <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">Submit</button>  
                           <div class="field_error">
                            <?php echo $msg?>
                           </div>                         
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
require('footer.inc.php');
?>