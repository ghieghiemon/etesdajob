<!--modal myModal content-->       
    <div class="modal hide fade" id="signIn">
  		<div class="modal-header">
    		<a class="close" data-dismiss="modal">x</a>
    		<h3>Sign In</h3>
  		</div>
        
  		<div class="modal-body">
        <form method="post" action='' name="login_form">
            <p><input type="text" class="span3" name="eid" id="email" placeholder="Email" style="margin-left:155px;"></p>
            <p><input type="password" class="span3" name="passwd" placeholder="Password" style="margin-left:155px;"></p>
            <p><button type="submit" class="btn btn-primary" style="margin-left:162px;">Sign in</button>
              <a href="#">Forgot Password?</a>
            </p>
   	 	</form>
        </div>
        
        <div class="modal-footer">
    		Not a member?
    		<a href="#">Register</a>
 		</div>
	</div>
<!--end myModal content-->
               
<div class="container">
<div style="margin-left: 1%; margin-top: 1%;  margin-bottom:-7%">
	<div class="row-fluid">    
	<div class="span12">
    	<div class="well">
        	<h4 class="media-heading">
            	 <img src="<?php echo base_url()?>assets/bootstrap/img/icons/glyphicons_089_building.png" width="25"> Industries
            </h4>
       	 	
            <div align="right" class="legendIn" style="margin-bottom:5px;margin-top:-30px;">
                Legend:  (#) - no. of vacancies
            </div>
            
           <div style="width:1140px;height:390px;overflow-x:hidden;margin-top:15px;margin-bottom:15px;margin-left:70px;"><!--start scrollable table-->
                    <?php
                    $counter = 0;
                    $row_limit = 7; // Change this accdg to your preference
                    $new_row = true;

                    foreach($industries as $a)
                    {
                        ?>
                        <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd">
                        <h5 class="media-heading">
                            <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>"> 
                            <br>(<?php echo $a['totalvacancies']?>)
                        </h5>
                        </a>
                        <?php
                        $counter += 1;
                        if($counter % $row_limit == 0)
                        {
                            echo '</br>';
                            $new_row = true;
                        }
                    }
                    ?>
            </div><!--end scrollable-->
            
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    

</div><!--End div-->
</div><!--End Container fluid-->
 
            
             


      <hr>
      </body>