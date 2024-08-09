<?php
require('top.inc.php');
$id='';
$name='';
$description='';
$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
   $id=get_safe_value($con, $_GET['id']);
   $sql="select * from category where category_id='$id'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);

   if($check>0){
      $row=mysqli_fetch_assoc($res);  
      $id=$row['category_id'];
      $name=$row['category_name'];
      $description=$row['category_description'];
   }else{
      header('location:catagories.php');
      die();   
   }
}

if(isset($_POST['submit'])){
   
   $id=get_safe_value($con,$_POST['id']);
   $name=get_safe_value($con,$_POST['name']);
   $description=get_safe_value($con,$_POST['description']);

   $sql="select * from category where category_name='$name'";
   $res=mysqli_query($con,$sql);
   $check=mysqli_num_rows($res);
   if($check>0){
      if(isset($_GET['id']) && $_GET['id']!=''){
         $getData=mysqli_fetch_assoc($res);
         if($id==$getData['category_id']){

         }else{
            $msg="Category already exist";
         }

      }else{
         $msg="Category already exist";
      }
   }

   if($msg==''){
      if(isset($_GET['id']) && $_GET['id']!=''){
         mysqli_query($con, "update category set category_name='$name', category_description='$description' where category_id='$id'");
      }else{
         mysqli_query($con, "insert into category (category_id, category_name, category_description) values ('$id', '$name', '$description')");
      }
      header('location:catagories.php');
      die();
   }

}

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Category</strong> &nbsp; <small>Form</small></div>
                        <form method="post">
                        <div class="card-body card-block">
                        <div class="form-group"><label for="id" class=" form-control-label">Category Id</label><input type="text" name="id" placeholder="C01" class="form-control" required value="<?php echo $id ?>"></div>
                        <div class="form-group"><label for="name" class=" form-control-label">Category Name</label><input type="text" name="name" placeholder="Enter Category Name" class="form-control" required value="<?php echo $name ?>"></div>
                        <div class="form-group"><label for="description" class=" form-control-label">Category Description</label><input type="text" name="description" placeholder="Enter Category Description" class="form-control" required value="<?php echo $description ?>"></div>
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