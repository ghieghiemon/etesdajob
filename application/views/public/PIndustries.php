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
            
            <div class="nav" style="width:1160px;height:420px;margin-top:10px;margin-bottom:-5px;margin-left:50px;overflow:auto;">
                        
                         <?php 
                foreach ($industries as $a)
                {
                    ?>
                    <a href="<?php echo base_url('pub/search_industries/' . $a['sectorID']); ?>" class="btn btn-group PInd2">
                    <h5 class="media-heading">
                        <img src="<?php echo base_url()?>assets/bootstrap/img/<?php echo $a['sectorIcon']?>" class="PProfE"> 
                        <br>(<?php echo $a['totalopenings']?>)
                    </h5>
                    </a>
                <?php
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