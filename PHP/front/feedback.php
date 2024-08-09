<?php 
require('top.php');
$id='';
$name='';
$email='';
$subject='';
$message='';
$added_on='';

?>
 
        <!-- Start Contact Area -->
       
            <div class="container">
                <div class="row">
                    <div class="contact-form-wrap mt--60">
                        <div class="col-xs-12">
                            <div class="contact-title">
                                <h2 class="title__line--6">SEND A FEEDBACK</h2>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <form id="contact-form" action="#" method="post">
                                <div class="single-contact-form">
                                    <div class="contact-box name">
                                        <input type="text" id="name" name="name" placeholder="Enter Your Name" required value="<?php echo $name ?>">
                                        <input type="email" id="email" name="email" placeholder="Enter Your E-Mail" required value="<?php echo $email ?>">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box subject">
                                        <input type="text" id="subject" name="subject" placeholder="Enter Subject" required value="<?php echo $subject ?>">
                                    </div>
                                </div>
                                <div class="single-contact-form">
                                    <div class="contact-box message">
                                        <textarea id="message" name="message" placeholder="Enter Your Message" required value="<?php echo $message ?>"></textarea>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button type="submit" name="submit" class="fv-btn">SEND FEEDBACK</button><br><br><br>
                                </div>                           
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        
</body>
</html>

<?php 

if(isset($_POST['submit'])){

    $name=get_safe_value($con,$_POST['name']);
    $email=get_safe_value($con,$_POST['email']);
    $subject=get_safe_value($con,$_POST['subject']);
    $message=get_safe_value($con,$_POST['message']);
    $added_on=date('Y-m-d h:i:s');  
    
    echo '<script>alert("Thank You For Send Feedback")</script>';

    $sql="select * from feedback where feedback_name='$name'";
    $res=mysqli_query($con,$sql);
    mysqli_query($con,"insert into feedback (feedback_name,feedback_email,feedback_subject,feedback_message,feedback_added_on) values('$name','$email','$subject','$message','$added_on')");

}

require('footer.php')

?>