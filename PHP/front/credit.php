<?php 
require('top.php');
$id='';
$name='';
$ccn='';
$cvv='';
$ecpirymm='';
$expiryyy='';
$added_on='';

?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        
                        <form class="credit-card" method="post">
                            <div class="form-header">
                                <h4 class="title">Credit card detail</h4>
                            </div>
                            
                            <div class="form-body">
                                <!-- Card Number -->
                                <div class="form-group"><label for="cardholder_name" class=" form-control-label">Cardholder Name</label><input type="text" name="cardholder_name" placeholder="Enter Your Name" class="form-control" required value="<?php echo $name ?>"></div>
                                <div class="form-group"><label for="card_number" class=" form-control-label">Card Number</label><input type="tel" name="card_number" inputmode="numeric" pattern="[0-9\s]{13,19}" autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" class="form-control" required value="<?php echo $ccn ?>"></div>
                                <div class="form-group"><label for="cvv" class=" form-control-label">CVV</label><input type="tel" name="cvv" inputmode="numeric" pattern="^[0-9]{3, 4}$" autocomplete="cvv-number" maxlength="19" placeholder="xxx" class="form-control" required value="<?php echo $cvv ?>"></div>
                                <div class="form-group">
                                    <label for="date" class=" form-control-label">Expiry Date</label>
                                    <table>
                                        <tr>
                                            <td>
                                            <select name='expiry_month' id='expiry_month' class="form-control" required value="<?php echo $ecpirymm ?>">
                                                <option value=''>Month</option>
                                                <option value='01'>January</option>
                                                <option value='02'>February</option>
                                                <option value='03'>March</option>
                                                <option value='04'>April</option>
                                                <option value='05'>May</option>
                                                <option value='06'>June</option>
                                                <option value='07'>July</option>
                                                <option value='08'>August</option>
                                                <option value='09'>September</option>
                                                <option value='10'>October</option>
                                                <option value='11'>November</option>
                                                <option value='12'>December</option>
                                            </select> 
                                            </td>
                                            <td>
                                            <select name='expiry_year' id='expiry_year' class="form-control" required value="<?php echo $expiryyy ?>">
                                                <option value=''>Year</option>
                                                <option value='22'>2022</option>
                                                <option value='23'>2023</option>
                                                <option value='24'>2024</option>
                                                <option value='25'>2025</option>
                                                <option value='26'>2026</option>
                                                <option value='27'>2027</option>
                                                <option value='28'>2028</option>
                                                <option value='29'>2029</option>
                                                <option value='30'>2030</option>
                                                <option value='31'>2031</option>
                                                <option value='32'>2032</option>
                                                <option value='33'>2033</option>
                                            </select> 
                                            </td>
                                        </tr>
                                    </table>
                                </div><br>
                                <img src="images/others/shape/payment.jpeg" alt="payment images" width="300px" height="40px"><br><br><br>
                                <button type="submit" name="submit" class="btn btn-lg btn-info btn-block">Proceed</button>  
                            </div>
                            </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<br><br><br><br>

<style>
/* Global */
* {
    box-sizing: border-box;
}
 
body,
html {
    height: 100%;
    min-height: 100%;
}
 
body {
    font-family: 'Roboto',
    sans-serif;
    margin: 0;
    background-color: #fff;
}

/* Credit Card */
.credit-card {
    width: 360px;
    height: 585px;
    margin: 60px auto 0;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #f8f8f8;
    box-shadow: 1px 2px 3px 0 rgba(0,0,0,.10);
}

.form-header {
    height: 60px;
    padding: 20px 30px 0;
    border-bottom: 1px solid #e1e8ee;
}
 
.form-body {
    height: 340px;
    padding: 30px 30px 20px;
}

/* Title */
.title {
    font-size: 18px;
    margin: 0;
    color: #5e6977;
}

/* Common */
.card-number,
.cvv-input input,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.month select,
.year select {
    font-size: 14px;
    font-weight: 100;
    line-height: 14px;
}
 
.card-number,
.cvv-details,
.cvv-input input,
.month select,
.year select {
    opacity: .7;
    color: #86939e;
}

/* Card Number */
.card-number {
    width: 100%;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
}

/* Date Field */
.month select,
.year select {
    width: 145px;
    margin-bottom: 20px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: url('caret.png') no-repeat;
    background-position: 85% 50%;
    -moz-appearance: none;
    -webkit-appearance: none;
}

.month select {
    float: left;
}
 
.year select {
    float: right;
}

/* Card Verification Field */
.cvv-input input {
    float: left;
    width: 145px;
    padding-left: 20px;
    border: 2px solid #e1e8ee;
    border-radius: 6px;
    background: #fff;
}
 
.cvv-details {
    font-size: 12px;
    font-weight: 300;
    line-height: 16px;
    float: right;
    margin-bottom: 20px;
}
 
.cvv-details p {
    margin-top: 6px;
}

/* Buttons Section */
.paypal-btn,
.proceed-btn {
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    border-color: transparent;
    border-radius: 6px;
}
 
.proceed-btn {
    margin-bottom: 10px;
    background: #7dc855;
}
 
.paypal-btn a,
.proceed-btn a {
    text-decoration: none;
}
 
.proceed-btn a {
    color: #fff;
}
 
.paypal-btn a {
    color: rgba(242, 242, 242, .7);
}
 
.paypal-btn {
    padding-right: 95px;
    background: url('paypal-logo.svg') no-repeat 65% 56% #009cde;
}
</style>

<?php 

if(isset($_POST['submit'])){

    $name=get_safe_value($con,$_POST['cardholder_name']);
    $ccn=get_safe_value($con,$_POST['card_number']);
    $cvv=get_safe_value($con,$_POST['cvv']);
    $expirymm=get_safe_value($con,$_POST['expiry_month']);
    $expiryyy=get_safe_value($con,$_POST['expiry_year']);
    $added_on=date('Y-m-d h:i:s');  
    
    echo '<script>alert("Your payment was successful!")</script>';

    $sql="select * from payment where cardholder_name='$name'";
    $res=mysqli_query($con,$sql);
    mysqli_query($con,"insert into payment (cardholder_name,card_number,cvv,expiry_month,expiry_year,payment_added_on) values('$name','$ccn','$cvv','$expirymm','$expiryyy','$added_on')");
    
}

require('footer.php');

?>