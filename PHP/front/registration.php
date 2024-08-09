<?php 
require('top.php');

$name='';
$gender='';
$email='';
$password='';
$address='';
$pincode='';
$contactno='';
$added_on='';

?>
 
        <!-- Start Contact Area -->
    <div class="container">
        <div class="address__details">
            <div class="address__detail">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h1 class="title__line--6">Registration</h1>
                            </div>
                        </div>
                        <div class="accordion__body">
                            <div class="accordion__body__form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkout-method__login">
                                            <form id="contact-form" action="#" method="post">
                                                <div class="single-input">
                                                    <label for="user-name">Name</label>
                                                    <input type="text" id="name" name="name" placeholder="Enter Your Name" required value="<?php echo $name ?>">
                                                </div>
                                                <div class="single-input">
                                                    <label for="user-gender">Gender</label>
                                                    <label class="radio" >Male<input type="radio" name="gender" value="male" required value="<?php echo $gender ?>"><span class="checkmark"></span></label>
                                                    <label class="radio">Female<input type="radio" name="gender" value="female"><span class="checkmark"></span></label>
                                                </div>
                                                <div class="single-input">
                                                    <label for="user-email">Email</label>
                                                    <input type="email" id="email" name="email" placeholder="Enter Your Email" required value="<?php echo $email ?>">
                                                </div>
                                                <div class="single-input">
                                                    <label for="user-password">Password</label>
                                                    <input type="password" id="password" name="password" placeholder="Enter Your Password" required value="<?php echo $password ?>">
                                                </div>
                                                <div class="single-input"><div class="contact-box message">
                                                    <label for="user-address">Address</label>
                                                    <textarea id="address" name="address" placeholder="Enter Your Address" required value="<?php echo $address ?>"></textarea>
                                                </div></div>
                                                <div class="single-input">
                                                    <label for="user-email">Pincode</label>
                                                    <input type="text" id="pincode" name="pincode" placeholder="Enter Pincode" pattern="[0-9]{6}" title="Please enter valid pincode" required value="<?php echo $pincode ?>">
                                                </div>
                                                <div class="single-input">
                                                    <label for="user-email">Contact No.</label>
                                                    <input type="text" id="contactno" name="contactno" placeholder="Enter Your Contact No." pattern="[789][0-9]{9}" title="Please enter valid contact no." required value="<?php echo $contactno ?>">
                                                </div><br>
                                                <div class="dark-btn">
                                                <button type="submit" name="submit" class="sub-btn">Register</button>
                                                </div>
                                            </form><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div> <br><br>

<style>

.title{
    background: #A87C3C none repeat scroll 0 0;
    border: 10px solid #fff;
    color: #fff;   
    padding-top: 15px;
    padding-right: 30px;
    padding-bottom: 15px;
    padding-left: 30px;
    margin: 15px;
    font-size: 14px;
    font-family: sans-serif;
    font-weight: 600;
}

.dropdown{
    background: #f5f5f5 none repeat scroll 0 0;
    border: 0 none;
    color: #666666;
    font-size: 16px;
    height: 62px;
    padding: 0 47px;
}

.sub-btn {
      background: #A87C3C none repeat scroll 0 0;
      border: 1px solid #A87C3C;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      font-weight: 600;
      height: 60px;
      width: 200px;
      padding: 0 30px;
      text-align: center;
      text-transform: uppercase;
      transition: all 0.4s ease 0s;
  }
  .sub-btn:hover {
      background: transparent none repeat scroll 0 0;
      border: 1px solid #A87C3C;
      color: #A87C3C;
  }
  .sub-btn i {
      padding-right: 9px;
  }

.radio {
  display: block;
  position: relative;
  padding-left: 50px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 16px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.radio input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

.radio:hover input ~ .checkmark {
  background-color: #ccc;
}

.radio input:checked ~ .checkmark {
  background-color: #A87C3C;
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

.radio input:checked ~ .checkmark:after {
  display: block;
}

.radio .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.accordion__body .checkout-method__login .single-input input{
      height: 45px;
      line-height: 32px;
      padding-left: 15px;
      background: #f6f6f6;
      border: 1px solid #f6f6f6;
  }
  
  .dark-btn a{
      display: inline-block;
      height: 45px;
      line-height: 45px;
      text-align: center;
      text-transform: uppercase;
      background: #A87C3C;
      color: #ffffff;
      font-family: "Poppins";
      padding: 0 45px;
      font-weight: 600;
      letter-spacing: 1px;
      font-size: 16px;
      transition: all 0.3s ease-in-out 0s;
  }
  .dark-btn a:hover{
      background: #212121;
  }

  .address__details {
      background: #f5f5f5 none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
      padding: 32.5px 42px 32.5px 42px;
  }
  .address__detail {
      background: #ffffff none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
      padding: 32.5px 42px 32.5px 42px;
  }

</style>

<?php 

if(isset($_POST['submit'])){

    $name=get_safe_value($con,$_POST['name']);
    $gender=get_safe_value($con,$_POST['gender']);
    $email=get_safe_value($con,$_POST['email']);
    $password=get_safe_value($con,$_POST['password']);
	$address=get_safe_value($con,$_POST['address']);
	$pincode=get_safe_value($con,$_POST['pincode']);
	$contactno=get_safe_value($con,$_POST['contactno']);
    $added_on=date('Y-m-d h:i:s');  
    
    echo '<script>alert("Your Registration is gone Successful")</script>';

    $sql="select * from customer where customer_email='$email'";
    $res=mysqli_query($con,$sql);
    mysqli_query($con,"insert into customer (customer_name,customer_gender,customer_email,customer_password,customer_address,customer_pincode,customer_contactno,customer_added_on) values('$name','$gender','$email','$password','$address', '$pincode', '$contactno', '$added_on')");

}

require('footer.php')

?>