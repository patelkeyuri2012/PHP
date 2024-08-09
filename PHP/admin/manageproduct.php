<?php
require('top.inc.php');
$id='';
$sid='';
$name='';
$price='';
$quantity='';
$description='';
$image='';
$image2='';
$image3='';
$image4='';

$msg='';
$image_required='required';

if(isset($_GET['id']) && $_GET['id']!=''){
   $image_required='';
   $id=get_safe_value($con, $_GET['id']);
   $sql="select * from product where product_id='$id'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);

   if($check>0){
      $row=mysqli_fetch_assoc($res);  
      $id=$row['product_id'];
      $sid=$row['subcategory_id'];
      $name=$row['product_name'];
      $price=$row['product_price'];
      $quantity=$row['product_quantity'];
      $description=$row['product_description'];
      
   }else{
      header('location:product.php');
      die();   
   }
}

if(isset($_POST['submit'])){
   
   $id=get_safe_value($con,$_POST['id']);
   $sid=get_safe_value($con,$_POST['subcategory_id']);
   $name=get_safe_value($con,$_POST['name']);
   $price=get_safe_value($con,$_POST['price']);
   $quantity=get_safe_value($con,$_POST['quantity']);
   $description=get_safe_value($con,$_POST['description']);
   

   $sql="select * from product where product_name='$name'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);
   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['product_id']){

         }else{
            $msg="Product already exist";
         }

      }else{
         $msg="Product already exist";
      }
   }

   
		if($_FILES['image']['type']!='' && ($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg' && $_FILES['image']['type']!='image/webp')){
			$msg="Please select only image file";
      }

      if($msg==''){
         if(isset($_GET['id']) && $_GET['id']!=''){
            if($_FILES['image']['name']!=''){
               $image=$_FILES['image']['name'];
               move_uploaded_file($_FILES['image']['tmp_name'],'../media/products/'.$image);
               $update_sql="update product set subcategory_id='$sid', product_name='$name', product_price='$price', product_quantity='$quantity', product_description='$description', product_image='$image' where product_id='$id'";  
            }
            else if($_FILES['image2']['name']!=''){
               $image2=$_FILES['image2']['name'];
               move_uploaded_file($_FILES['image2']['tmp_name'],'../media/products/'.$image2);
               $update_sql="update product set subcategory_id='$sid', product_name='$name', product_price='$price', product_quantity='$quantity', product_description='$description', product_image='$image', product_image2='$image2' where product_id='$id'";  
            }
            else if($_FILES['image3']['name']!=''){
               $image3=$_FILES['image3']['name'];
               move_uploaded_file($_FILES['image3']['tmp_name'],'../media/products/'.$image3);
               $update_sql="update product set subcategory_id='$sid', product_name='$name', product_price='$price', product_quantity='$quantity', product_description='$description', product_image='$image', product_image2='$image2', product_image3='$image3' where product_id='$id'";  
            }
            else if($_FILES['image4']['name']!=''){
               $image4=$_FILES['image4']['name'];
               move_uploaded_file($_FILES['image4']['tmp_name'],'../media/products/'.$image4);
               $update_sql="update product set subcategory_id='$sid', product_name='$name', product_price='$price', product_quantity='$quantity', product_description='$description', product_image='$image', product_image2='$image2', product_image3='$image3', product_image4='$image4' where product_id='$id'";  
            }
            else{
               $update_sql="update product set subcategory_id='$sid', product_name='$name', product_price='$price', product_quantity='$quantity', product_description='$description' where product_id='$id'";
            }
            mysqli_query($con, $update_sql);
         }else{
            $image=$_FILES['image']['name'];
            $image2=$_FILES['image2']['name'];
            $image3=$_FILES['image3']['name'];
            $image4=$_FILES['image4']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'],'../media/products/'.$image);
            move_uploaded_file($_FILES['image2']['tmp_name'],'../media/products/'.$image2);
            move_uploaded_file($_FILES['image3']['tmp_name'],'../media/products/'.$image3);
            move_uploaded_file($_FILES['image4']['tmp_name'],'../media/products/'.$image4);
            mysqli_query($con, "insert into product (product_id, subcategory_id, product_name, product_price, product_quantity, product_description, product_image, product_image2, product_image3, product_image4) values ('$id', '$sid', '$name', '$price', '$quantity', '$description', '$image', '$image2', '$image3', '$image4')");
         }
         header('location:product.php');
         die();
      }

}

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong> &nbsp; <small>Form</small></div>
                        <form method="post" enctype="multipart/form-data">
                        <div class="card-body card-block">
                           <div class="form-group">
                              <label for="subcategory" class=" form-control-label">Sub-category</label>
									   <select class="form-control" name="subcategory_id">
										   <option>Select Sub-category</option>
										   <?php
										   $res=mysqli_query($con,"select subcategory_id,subcategory_name from subcategory order by subcategory_id asc");
									   	while($row=mysqli_fetch_assoc($res)){
										   	if($row['subcategory_id']==$sid){
											   	echo "<option selected value=".$row['subcategory_id'].">".$row['subcategory_name']."</option>";
											   }else{
											   	echo "<option value=".$row['subcategory_id'].">".$row['subcategory_name']."</option>";
											   }
									   	}
										   ?>
									   </select>
                           </div>



                        <div class="form-group"><label for="id" class=" form-control-label">Product Id</label><input type="text" name="id" placeholder="P01" class="form-control" required value="<?php echo $id ?>"></div>
                        <div class="form-group"><label for="name" class=" form-control-label">Product Name</label><input type="text" name="name" placeholder="Enter Product Name" class="form-control" required value="<?php echo $name ?>"></div>
                        <div class="form-group"><label for="price" class=" form-control-label">Product Price</label><input type="text" name="price" placeholder="Enter Product Price" class="form-control" required value="<?php echo $price ?>"></div>
                        <div class="form-group"><label for="quantity" class=" form-control-label">Product Quantity</label><input type="text" name="quantity" placeholder="Enter Product Quantity" class="form-control" required value="<?php echo $quantity ?>"></div>
                        <div class="form-group"><label for="image" class=" form-control-label">Product Image1</label><input type="file" name="image" class="form-control" <?php echo $image_required ?> ></div>
                        <div class="form-group"><label for="image2" class=" form-control-label">Product Image2</label><input type="file" name="image2" class="form-control"></div>
                        <div class="form-group"><label for="image3" class=" form-control-label">Product Image3</label><input type="file" name="image3" class="form-control"></div>
                        <div class="form-group"><label for="image4" class=" form-control-label">Product Image4</label><input type="file" name="image4" class="form-control"></div>
                        <div class="form-group"><label for="description" class=" form-control-label">Product Description</label><input type="text" name="description" placeholder="Enter Product Description" class="form-control" required value="<?php echo $description ?>"></div>
                           <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">Submit</button>  
                           <div class="field_error">
                            <?php echo $msg ?>
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