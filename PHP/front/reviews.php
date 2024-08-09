<?php

$sql="select * from feedback order by feedback_id";
$res=mysqli_query($con,$sql);

?>

<!-- Start Review Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                
                    <div class="row">
                        <?php 
						$i=1;
						while($row=mysqli_fetch_assoc($res)){
                        ?>
							               
                       <div class="col-md-4 col-lg-4 col-sm-3 col-xs-12">
                            <div class="address__details">
                                <table>
                                    <tr>
                                    <td rowspan="2">
                                            <div class="circle">
                                                <i class="fa fa-user" style="font-size:50px"></i>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ht__product__dtl"><br>
                                                <h2>&nbsp;&nbsp;&nbsp;<?php echo $row['feedback_name']?></h2>
                                            </div> 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>    
                                            <div class="ht__product__dtl">
                                                <ul  class="pro__prize">
                                                    <!--<li class="old__prize">$82.5</li>-->
                                                    <li>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['feedback_subject']?></li><br><br>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                
                                </table>
                                <div class="ht__product__dtl">                          
                                    <p class="pro__info"><?php echo $row['feedback_message']?></p><br>
                                </div>
                            </div>
                        </div>
                         
                        
                        <?php } ?>
                    </div>
                </div>
                
            </div>
            <!-- End Review Details Top -->
<style>
    .address__details {
      background: #f5f5f5 none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
      padding: 32.5px 42px 32.5px 42px;
  }
  .address__detail {
      background: #ffffff none repeat scroll 0 0;
      flex-basis: calc(100% - 110px);
	  padding-left: 125px;
	  padding-right: 125px;
	  padding-top: 42px;
	  padding-bottom: 100px;
  }

  .circle {
  	  height: 75px;
  	  width: 75px;
  	  background-color: #ddd;
  	  border-radius: 750%;
      padding-left: 20px;
	  padding-right: 40px;
	  padding-top: 12px;
	  padding-bottom: 40px;
  }
  .field_error {
	color : red;
  }
  
</style>