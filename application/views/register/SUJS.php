<!DOCTYPE HTML>
<html>
<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-flyout-list.css"/>
<title>Home | e-TESDA: Work</title>
 
 <style type="text/css">
      body {
        padding-top: 80px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  
 <!-- Add jQuery library -->
	<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>


	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="css/jquery.fancybox.js?v=2.1.4">
    
    </script>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.4" media="screen" />

 
 <!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="js/jquery.fancybox-buttons.js?v=1.0.5"></script>
 
 <!--Date Picker-->
 <link href="css/datepicker.css" rel="stylesheet">
 
 
 <script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
	
	   <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>

	<link href="css/tablecloth.css" rel="stylesheet" type="text/css" media="screen" />	
	<script type="text/javascript" src="js/jquery.tablecloth.js"></script>
        
  <script type="text/javascript">// <![CDATA[
    $(document).ready(function(){       
        $('#region').change(function(){ //any select change on the dropdown with id country trigger this code         
            $("#cities > option").remove(); //first of all clear select items
            var regionid = $('#region').val();  // here we are taking country id of the selected one.
            $.ajax({
                type: "POST",
          // url: "<a href="http://localhost/pro/index.php/drop_contr/get_cities/"+country_id" onclick="javascript:_gaq.push(['_trackEvent','outbound-comment','http://localhost']);" rel="nofollow">http://localhost/pro/index.php/drop_contr/get_cities/"+country_id</a>, //here we are calling our user controller and get_cities method with the country_id
                url: "main/get_cities/"+regionid, //here we are calling our user controller and get_cities method with the country_id
                dataType: "json",
                
                success: function(cities) //we're calling the response json array 'cities'
                {
                    $.each(cities,function(cityid,city) //here we're doing a foeach loop round each city with id as the key and city as the value
                    {
                        var opt = $('<option />'); // here we're creating a new select option with for each city
                        opt.val(cityid);
                        opt.text(city);
                        $('#cities').append(opt); //here we will append these new select options to a dropdown with the id 'cities'
                    });
                }
                 
            });
             
        });
    });
    // ]]>
</script>
  
   </head>
   
   
   <body>
   
  
       
		<div id="inlineSIGNIN" style="width:30%;display: none;">
			<div class="span4">
				<div class="container span3">
					<form class="form-signin">                   
      					<h2 class="form-signin-heading">Sign in</h2>
                      	<input type="text" class="input-block-level" placeholder="Email address">
                      	<input type="password" class="input-block-level" placeholder="Password">
                      	<label class="checkbox">
                        	<input type="checkbox" value="remember-me"> Remember me
                      	</label>
                      	<button class="btn btn-primary" type="submit">Sign in</button>
                      	<button class="btn">Clear</button>
                    </form>
	  
				<div class="alert">
					<span>No account? <a href="/accounts/login/">Sign up now</a>!</span>
				</div>  <!--end alert-->
    			</div>	<!--end container-->		
			</div> <!--end span4-->
		</div><!--end inlineSIGNIN-->
        
<!--start newmessage modal-->    
<div class="modal hide fade" id="newmessage">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>New Message</h3>
  	</div>

	<div class="modal-body">
    <form class="form-horizontal" style="margin-left:-75px;">
    <div class="control-group2"><!-- start div Keyword -->
    		<label class="control-label2"  for="recipient">To: &nbsp;</label>
      		<div class="controls">
        		<input type="text" id="recipient" name="recipient" placeholder="Recipient" >
      		</div>
    	</div><!-- end div keyword -->
    </form>
     <br>
    <form class="form-horizontal" style="margin-left:-75px;">
    <div class="control-group2"><!-- start div Keyword -->
      		<div class="controls">
        		<textarea id="message" name="message" class="span6" rows="6" placeholder="Type your message" ></textarea>
      		</div>
    	</div><!-- end div keyword -->
    </form>
    </div>
    
  	<div class="modal-footer">
  		<a href="#" class="btn btn-primary">Send</a>
    	<a href="#" class="btn" data-dismiss="modal">Close</a> 
  	</div>
</div>
<!--end newmessage modal-->
        
<!--Reply modal start-->
<div class="modal hide fade" id="reply">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Reply</h3>
  	</div>

	<div class="modal-body">
		<form style="margin-left:29px; margin-bottom:-12px;">
        	To: <a href="#">Shenne Layug</a> <br>
        	<textarea rows="6" class="span6" placeholder="Type your message"></textarea><br>
        </form>
	</div>
  
  	<div class="modal-footer">
  		<a href="#" class="btn btn-primary">Send</a>
    	<a href="#" class="btn" data-dismiss="modal">Close</a> 
  	</div>
</div>
<!-- Reply modal end-->
        
<!--are you sure modal start-->
<div class="modal hide fade" id="areyousure">
  	<div class="modal-header">
    	<a class="close" data-dismiss="modal">x</a>
    	<h3>Delete Message</h3>
  	</div>

	<div class="modal-body">
		<p class="delete">Are you sure you want to delete your message?</p>
	</div>
  
  	<div class="modal-footer">
  		<a data-toggle="modal" data-dismiss="modal" href="#msgdeleted" role="button" class="btn btn-danger">Delete</a>
    	<a href="#" class="btn" data-dismiss="modal">Cancel</a> 
  	</div>
</div>
<!-- are you sure modal end-->
    
    <div class="container">
    <div style="margin-left: 6%; margin-bottom:-75px;">
    <div class="row-fluid">    
	<div class="span11">
    	<div class="well">
        	<img src="<?php echo base_url(); ?>assets/img/SUnew.png" style="margin-left:-9px;">
             <input type="hidden" id="baseurl" value="<?php echo base_url()?>"/>
            <div class="row-fluid">
            	<div class="span12">
                	<div class="well">
                    	<div class="tabbable">
                        	<ul class="nav nav-tabs">
                                <li class="active">
                                	<a href="#PI" data-toggle="tab" class="rTabLink">
                                    	<img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_352_nameplate.png" width="20"> Personal Information
                                    </a>
                                </li>
                                
                                <li>
                                	<a href="#EB" data-toggle="tab" class="rTabLink">
                                		<img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_332_certificate.png" width="15"> Educational Background
                                   	</a>
                                </li>
                                
                                <li>
                                	<a href="#WE" data-toggle="tab" class="rTabLink">
                                    	<img src="<?php echo base_url(); ?>assets/img/icons/glyphicons_324_tie.png" width="10"> Work Experience
                                    </a>
                                </li>
                            </ul>
                            
                            <div class="tab-content">
                            	<div class="tab-pane active" id="PI">
                                	<div style="width:1060px;height:455px;overflow:auto;"><!--start scrollable table-->
                            	<p class="welcome" align="center">
                                    <font class="resNote">*Please take note that all information will be used as your resume whenever you apply for a job.</font>
                                </p>
                                <br>
                                
                                <!--START FORM-->
                                
                                <form method ="post" action ="<?php echo base_url()?>main/add_jsdetails/<?php echo $userid?>">
                                  <div class="form-horizontal2 regMarg regMarg2">
                                 
                                      <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label">First Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="FN" name="FN" placeholder="" >
                                                </div>
                                            </div> <!--end FN field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Middle Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="MN" name="MN" placeholder="" >
                                                </div>
                                            </div> <!--end MN field-->
                                        
                                            <div class="control-group">
                                                <label class="control-label">Last Name: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="LN" name="LN" placeholder="" >
                                                </div>
                                            </div> <!--end LN field-->
                                        
                                            <div class="control-group">
                                                <label class="control-label">Birthday: &nbsp;</label>
                                                <div class="controls">
                                                    <div class="row-fluid">
                                                    <input class="span5 help-inline" type="text" id="bday" name="bday" placeholder="YYYY/MM/DD" >

                                                    </div> 
                                                </div>
                                            </div> <!--end Bday field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Civil Status: &nbsp;</label>
                                                <div class="controls">
                                                   <?php 
echo form_dropdown('civstatus',array('Single' =>'Single', 'Married' =>'Married', 
'Widowed' => 'Widowed')) ?>
                                                </div>
                                            </div><!--end ES-->
                                                                                           <div class="control-group">
                                                <label class="control-label">Gender &nbsp;</label>
                                                <div class="controls">
                                                  <?php 
echo form_dropdown('gender',array('1' =>'Male', 
'0' => 'Female')) ?>
                                                </div>
                                            </div><!--end ES-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Employment Status: &nbsp;</label>
                                                <div class="controls">
                                                <?php 
                                                echo form_dropdown('empstatus',array('Employed' =>'Employed', 
                                                'Unemployed' => 'Unemployed')) ?>
                                                </div>
                                            </div><!--end ES-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Upload Picture: &nbsp;</label>
                                                <div class="controls">
                                                    <!--<form method="post" action="upload-page.php" enctype="multipart/form-data">-->
                                                        <input name="pic" id="pic" type="file" class="upPic" />
                                                    <!--</form>-->  
                                                </div>
                                            </div> <!--end Picture field--> 
                                            
                                            
                                          
                                        </div><!--end left-->
                                        
                                        
                                        <div class="span6 addMarg">
                           
                                            <div class="control-group">
                                                <label class="control-label">Contact No: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="CN" name="CN" placeholder="" >
                                                </div>
                                            </div> <!--end DIS field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Street No: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="SN" name="SN" placeholder="" >
                                                </div>
                                            </div> <!--end SN field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Brgy: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="brgy" name="brgy" placeholder="" >
                                                </div>
                                            </div> <!--end BGY field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">District: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="dis" name="dis" placeholder="" >
                                                </div>
                                            </div> <!--end DIS field-->
                                            
                                            <div class="control-group">
                                            <label class="control-label">Region: &nbsp;</label>
                                            <div class="controls">
                                             <?php $cities['#'] = 'Please Select'; ?>
                                            <?php $regions['#'] = 'Please Select'; ?>
                                            <?php 
                                            $params = 'id="region"'; 
                                            //echo form_dropdown('regionid', $regions, '#', 'id="region"');
                                            echo form_dropdown('regionid', $regions, '#',$params);

                                            ?>
                                            </div>
                                            </div> <!--end CoP field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">City/Province: &nbsp;</label>
                                                <div class="controls">
                                                                                                      <?php  
             $params = 'id="cities"'; 
            echo form_dropdown('cityid', $cities, '#', $params);
            ?>
                                                </div>
                                            </div> <!--end RGN field-->
                                            
                                            <div class="control-group">
                                                <label class="control-label">Zipcode: &nbsp;</label>
                                                <div class="controls">
                                                    <input type="text" id="zip" name="zip" placeholder="" >
                                                </div>
                                            </div> <!--end Zip field-->
                                           
                                        </div> <!--end span-->
                                    </div> <!--end row-->
                                </div>
                                </div><!--end scrollable-->
                            	</div><!--end PI-->
                                
                                <div class="tab-pane" id="EB">
                                		<div class="row-fluid">
                                            <form>
                                    <div class="span7">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="span3"></th>
                                                    <th class="span2"></th>
                                                    <th class="span2"></th>
                                                    <th class="span4"></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p class="lLabel2">
                                                            TESDA COURSE:
                                                        </p>
                                                    </td>
                                                    
                                                    <td class="rLabel2">
                                                        <div class="myStyle9">
                                                        <?php    
                                                       $drpcourse['#'] = 'Please Select';
                                                     //   $params = 'class= "course"'; 
                               
                                                       // echo form_dropdown('course', $drpcourse, $params);     
                                                        ?> 
                                                   <?php $att = ' id="course" class="course"'; 
                                                    echo form_dropdown
                                                   ('course',array($drpcourse),'',$att) ?>
                                                            
                                      
                                                        </div>
                                                    </td>
                                                    
                                                    <td class="lLabel2">
                                                        <p>
                                                            Time Period:
                                                        </p>
                                                    </td>
                                                    
                                                    <td class="rLabel2">
                                                        <div class="myStyle10">
                                                          <div class="row-fluid">
                                                           <?php echo form_input(array('name'=>'estart','class'=>'estart','id'=>'datepickerS')) ?>
                                                          to
                                                          <?php echo form_input(array('name'=>'eend','class'=>'eend','id'=>'datepickerE')) ?>
                                                          <!--<input class="span2 help-inline" class="eend" type="text" id="eend" name="eend" placeholder="YYYY" >-->
                                                          </div> 
                                                      </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        
                                         <img src="assets/img/cert.png" width="190px;" class="marg14">
                                        <div class="input-append3 myStyle8 marg16">
                                            <input class="myStyle4" id="txtCerts" type="text" placeholder="Search for certificates">
                                             <a href="SUpJS.html" class="btn">
                                                <img src="assets/img/icons/glyphicons_027_search.png"  width="15">
                                            </a>
                                        </div><!--end search field-->
                                        
                                        <div class="row-fluid marg17">
                                            
   <?php 
        $params = 'multiple="multiple" name= "cert[]" id="lstcert1"'; 
        echo form_multiselect('certs', $cert, '#', $params ); ?>
<input id="btnAddCert" type="button" class ="btn btn-mini btn-info" style="margin-top:-30px;margin-left:7px;"value="  Add  " />
        <input id="btnDelCert" type="button" class ="btn btn-mini btn-danger" style="margin-left:-55px;margin-bottom:-20px;"value="Remove" />
        <select id="lstcert2" name= "certselect[]"multiple="multiple">

        </select>

                                    
                                  
                                  </div> <!--end row-fluid-->
                                  

                                  
                                  <img src="assets/img/comp.png" width="190px;" class="marg14">
                                        <div class="input-append3 myStyle8 marg16">
                                            <input class="myStyle4" id="txtComps"  type="text" placeholder="Search for competency">
                                             <a href="SUpJS.html" class="btn">
                                                <img src="assets/img/icons/glyphicons_027_search.png"  width="15">
                                            </a>
                                        </div><!--end search field-->
                                        
                                        <div class="row-fluid marg17">
        <?php 
        $params = 'multiple="multiple" name= "comp[]" id="lstcomp1"'; 
        echo form_multiselect('competencies', $comp, '#', $params); ?>
<input id="btnAddComp" type="button" class ="btn btn-mini btn-info" style="margin-top:-30px;margin-left:7px;"value="  Add  " />
        <input id="btnDelComp" type="button" class ="btn btn-mini btn-danger" style="margin-left:-55px;margin-bottom:-20px;"value="Remove" />
        
        <select id="lstcomp2" name= "compselect[]" multiple="multiple">

        </select>
        
                                          <img src="assets/img/skills.png" width="190px;" class="marg14">
                                        <div class="input-append3 myStyle8 marg16">
                                            <input class="myStyle4" id="txtSkills" type="text" placeholder="Search for skills">
                                             <a href="SUpJS.html" class="btn">
                                                <img src="assets/img/icons/glyphicons_027_search.png"  width="15">
                                            </a>
                                        </div><!--end search field-->
                                        
                                        <div class="row-fluid marg17">
                           <?php 
       $params = 'multiple="multiple" name= "skills[]" id="lstskill1"'; 
       echo form_multiselect('skills[]', $skill, '#', $params ); ?>
                            



<input id="btnAddSkill" type="button" class ="btn btn-mini btn-info" style="margin-top:-30px;margin-left:7px;"value="  Add  " />
        <input id="btnDelSkill" type="button" class ="btn btn-mini btn-danger" style="margin-left:-55px;margin-bottom:-20px;"value="Remove" />
        
        <select id="lstskill2" name= "skillselect[]"  multiple="multiple">

        </select>
                                  </div> <!--end row-fluid-->
                                        
                                        <br>
                                        <div class="row-fluid">
                                        <div class="pull-right" style="margin-right:80px;">
                                        <a class="btn addEd"id="addtoItemETable" >
                                              <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                         </a>
                                         </div>
                                         </div>
                                  </div> <!--end row-fluid-->  
                             </div> <!--end span 6-->
                                    
                                    
                                <div class="span5" style="margin-left:-15px;">
                                <!--<div class="well" style="margin-left:10px;">-->
                                
                                
                      
                
                                  <div class="well"  style="margin-right:10px;"> 
                              <img src="assets/img/icons/glyphicons_144_folder_open.png" width="15px"><font class="boldEd">Others</font>
                              <div align="right" style="margin-top:-20px;">
                                  <br>
                                 
                              </div>
                                
                                <div class="form-horizontal2 fMarg">
                             <div class="control-group">
                                  <label class="control-label">Educational Level: &nbsp;</label>
                                  <div class="controls">
                                                 <?php $att = ' id="olevel" class="olevel"'; 
         echo form_dropdown('select_itemtype',array('None' =>'None', 
        'High School Graduate' => 'High School Graduate', 
         'Technical Diploma'=> 'Technical Diploma',
         'College Graduate'=>'College Graduate',
              'Masters Degree' =>'Masters Degree',
        'Doctorate Degree'=>'Doctorate Degree'),'',$att) ?>
                                
                                  </div>
                              </div> <!--end EL field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Institution: &nbsp;</label>
                                  <div class="controls">
                                      <?php echo form_input(array('name'=>'oschool','class'=>'oschool')) ?>
                                  </div>
                              </div> <!--end Inst field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Course: &nbsp;</label>
                                  <div class="controls">
                                       <?php echo form_input(array('name'=>'ocourse','class'=>'ocourse')) ?>
                                  </div>
                              </div> <!--end Crs field-->
                              
                              <div class="control-group">
                                  <label class="control-label">Time Period: &nbsp;</label>
                                  <div class="controls">
                                       <div class="myStyle10">
                                      <div class="row-fluid">
                                      <?php echo form_input(array('name'=>'ostart','class'=>'ostart','id'=>'datepickerOS')) ?>
                                      to
                                     <?php echo form_input(array('name'=>'oend','class'=>'oend','id'=>'datepickerOE')) ?>
                                      <a class="btn btn-mini addEd" id="addtoItemOTable"  style="margin-left:5px;margin-top:-8px">
                                          <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                      </a>
                                      </div> 
                                  </div>
                                      </div>
                                
                              

                                  
                              </div> <!--end TP field-->
                              
                              
                              </div>
                                
                                
                                
                                
                                
                                
                              <!--<hr class="hrEd">-->
                                <div class="well"  style="margin-right:10px;"> 
                              <img src="assets/img/icons/glyphicons_144_folder_open.png" width="15px"><font class="boldEd">Your Education</font>
                              <div align="right" style="margin-top:-20px;">
                                  <br>
                                 
                              </div>
                              
                                <div style="width:390px;height:196px;overflow:auto;"><!--start scrollable table-->
                             <table class="table2 table-condensed" id="item_Etable" style="text-align:center">
                                    <thead>
                                        <tr>
                                          
                                            <th class="span1">Educational Level</th>
                                            <th class="span1">Institution</th>
                                            <th class="span2">Course</th>
                                            <th class="span1">Start</th>
                                            <th class="span2">End</th>
                                              <th class="span1"></th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    
                                   
                                    <tbody class="WorkE">
                                        <tr>
                                            
                                         
                                        </tr>
                                      
                                        
                                    </tbody>
                                    
                                </table>
                                </div><!--end scrollable table-->
                                </div><!--end well-->
                                </div><!--end span6-->
                                </div> <!--end row-->
                                </div>
                                </div><!--end EB-->
                                
                                <div class="tab-pane" id="WE">
                                	<div style="width:1060px;height:425px;overflow:auto;"><!--start scrollable table-->
                                <div class="row-fluid">
                                	<div class="span6">
                                            
                                    	<div class="form-horizontal2" style="margin-left:80px;margin-top:135px;">
                                   <?php echo form_open_multipart() ?>
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Company Name: &nbsp;</label>
                                            <div class="controls">
                                                
                                            <?php 
                                               //$params = 'id="region"'; 
                                            echo form_input(array('name'=>'companyname','class'=>'companyname')) ?>
                                                <!--<input  class="input-medium" type="text" id="CN" name="CN" placeholder="" >-->
                                            </div>
                                        </div> <!--end Company Name field-->
                                        
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Position: &nbsp;</label>
                                            <div class="controls">
                                                  <?php echo form_input(array('name'=>'position','class'=>'position')) ?>
                                                <!--<input  class="input-medium" type="text" id="Pos" name="Pos" placeholder="" >-->
                                            </div>
                                        </div> <!--end Company Name field-->
                                        <div class="control-group">
                                            <label class="control-label lLabel2">Start Year: &nbsp;</label>
                                            <div class="controls">
                                                  <?php echo form_input(array('name'=>'start','class'=>'start','id'=>'datepicker')) ?>
                                                <!--<input  class="input-medium" type="text" id="Pos" name="Pos" placeholder="" >-->
                                            </div>
                                        </div> <!--end Company Name field-->
                                        <div class="control-group">
                                            <label class="control-label lLabel2">End Year: &nbsp;</label>
                                            <div class="controls">
                                                  <?php echo form_input(array('name'=>'end','class'=>'end','id'=>'datepicker2')) ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                       <a  class="btn btn-mini" id="addtoItemWTable" style="margin-left:-8px;margin-top:-8px">

                                                        <img src="assets/img/icons/glyphicons_190_circle_plus.png" width="12"> Add
                                                    </a> 
                                                <!--<input  class="input-medium" type="text" id="Pos" name="Pos" placeholder="" >-->
                                            </div>
                             
                                        </div> <!--end Company Name field-->
                                        
                                        </div>
                                            
                                            
                                            
                                    </div>
                                    
                                    <div class="span6">
                                                                    	 <div class="well"  style="margin-right:20px;">  <!--start work experience compilation-->
                                            <em><strong>Your Work</strong></em>
                                                <div align="right" style="margin-top:-20px;">
                                            <br>
                                                </div>
                                             <div style="width:490px;height:345px;overflow:auto;"><!--start scrollable table-->
                                                 <table id="item_table" class="table2 table-condensed" style="text-align:center">
                                                <thead>
                                                    <tr>
                                                        <!--<th class="span1"></th>-->
                                                        <th class="span1">Company Name</th>
                                                        <th class="span1">Position</th>
                                                        <th class="span1">Start</th>
                                                        <th class="span1">End</th>
                                                        <th class="span1"></th>
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="WorkE">
                                                    <tr>
                                            
                                                       
                                                    </tr>
                                                    
                                                 
                                                   
                                                </tbody>
                                            </table>
                                            </div>
                                          </div><!--end well-->
                                         </div><!--end span-->
                                       </div><!--end row-fluid-->
                                  </div><!--end scrollable-->
                            	</div><!--end WE-->
                            </div><!--end tab-content-->
                        </div><!--end tabbable-->
                        
                    </div><!--end well-->
            	</div> <!--end span-->
                
                <div class="row-fluid">
                	<div class="pull-right">
                                  <?php
      echo "<input class='btn btn-primary'";
      echo form_submit('submit', 'Done'); 
      echo "&nbsp";
     
      echo form_close();
      ?>
                    	<!--<button type="submit" class="btn btn-primary">Done</button>-->
                        </form>
                    </div>
                </div><!--end row-fluid-->
            </div><!--end row-fluid-->
       	 
    	</div><!--end well-->
   	</div> <!--end span12-->
    </div> <!--end row-->
    </div> <!--end div-->
    </div> <!--end container-->
         
<script type="text/javascript">
// cert
$(function(){
$("#btnAddCert").click(function(){
$("#lstcert1 > option:selected").each(function(){
$(this).remove().appendTo("#lstcert2");
});
});

$("#btnDelCert").click(function(){
$("#lstcert2 > option:selected").each(function(){
$(this).remove().appendTo("#lstcert1");
});
});
});
</script>

<script type="text/javascript">
//comp
$(function(){
$("#btnAddComp").click(function(){
$("#lstcomp1 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp2");
});
});

$("#btnDelComp").click(function(){
$("#lstcomp2 > option:selected").each(function(){
$(this).remove().appendTo("#lstcomp1");
});
});
});
</script>

<script type="text/javascript">
//skills
$(function(){
$("#btnAddSkill").click(function(){
$("#lstskill1 > option:selected").each(function(){
$(this).remove().appendTo("#lstskill2");
});
});

$("#btnDelSkill").click(function(){
$("#lstskill2 > option:selected").each(function(){
$(this).remove().appendTo("#lstskill1");
});
});
});
</script>

<script type="text/javascript">

$(function(){ //EDUCATIONAL
 
 $('#addtoItemETable').click(function(){
  var ctr = 0 ;
 

if(sessionStorage.counterInt == null){
    ctr = 0;
    
}else{
    ctr = sessionStorage.counterInt;
} 
  


var course= $('.course').val();
var estart= $('.estart').val();
var eend= $('.eend').val();


var baseurl= $('#baseurl').val();

edu = new Array();
edu[0] = ctr;
edu[1] = "Tesda Techinical Diploma"; // question
edu[2] = "TESDA"; // question
edu[3] = course; // question
edu[4] = estart; // question
edu[5] = eend; // question

 $.ajax({
                
                type: "POST",
                data: {edu:edu},
                url: baseurl+"main/add_edu",
                success: function(data){
                         alert(data);
                }
        });


var estart= $('.estart').val();
var eend= $('.eend').val();
var course= $('.course').val();



var newRowContent = $("<tr><td>" + "TESDA Technical Diploma" + "</td>\
<td>" + "TESDA" + "</td>\
<td>" + course + "</td>\
<td>" + estart + "</td> \
<td>" + eend + "</td>   \
<td><input type='button' class='btn btn-mini btn-danger' value='Delete'></td> \
</tr>");
$("#item_Etable tbody").append(newRowContent); 
$("#item_Etable").trigger("update");



$('.estart').val('');
$('.eend').val('');
$('.course').val('');

$('input[type="button"]').click(function(){
   $(this).closest('tr').remove()
})
 ctr++;
  sessionStorage.counterInt = ctr;
});
});

</script>

<script type="text/javascript">

$(function(){ //EDUCATIONAL
 
 $('#addtoItemOTable').click(function()
 {  var ctr = 0 ;
 

if(sessionStorage.counterInt == null){
    ctr = 0;
    
}else{
    ctr = sessionStorage.counterInt;
} 
  

var olevel= $('.olevel').val();
var oschool= $('.oschool').val();
var ocourse= $('.ocourse').val();
var ostart= $('.ostart').val();
var oend= $('.oend').val();


var baseurl= $('#baseurl').val();

oedu = new Array();
oedu[0] = ctr;
oedu[1] = olevel; // question
oedu[2] = oschool; // question
oedu[3] = ocourse; // question
oedu[4] = ostart; // question
oedu[5] = oend; // question

 $.ajax({
                
                type: "POST",
                data: {oedu:oedu},
                url: baseurl+"main/add_oedu",
                success: function(data){
                         alert(data);
                }
        });


var newRowContent = $("<tr><td>" + olevel + "</td>\
<td>" + oschool + "</td>\
<td>" + ocourse + "</td>\
<td>" + ostart + "</td> \
<td>" + oend + "</td>   \
<td><input type='button' class='btn btn-mini btn-danger' value='Delete'></td> </td> \
</tr>");
$("#item_Etable tbody").append(newRowContent); 
$("#item_Etable").trigger("update");

$('.oschool').val('');
$('.ocourse').val('');
$('.ostart').val('');
$('.oend').val('');

$('input[type="button"]').click(function(){
   $(this).closest('tr').remove()
})
 ctr++;
  sessionStorage.counterInt = ctr;
});
});

</script>



<script type="text/javascript">

$(function(){ //WORK
 
 $('#addtoItemWTable').click(function(){
     
  var ctr = 0 ;

if(sessionStorage.counterInt == null){
    ctr = 0;
    
}else{
    ctr = sessionStorage.counterInt;
} 
var companyname= $('.companyname').val();
var position= $('.position').val();
var start= $('.start').val();
var end= $('.end').val();

var baseurl= $('#baseurl').val();

work = new Array();
work[0] = ctr;
work[1] = companyname; // question
work[2] = position; // question
work[3] = start; // question
work[4] = end; // question

 $.ajax({
                
                type: "POST",
                data: {work:work},
                url: baseurl+"main/add_worke",
                success: function(data){
                         alert(data);
                }
        });

var newRowContent = $("<tr><td>" + companyname + "</td>\
<td>" + position + "</td>\
<td>" + start + "</td>  \
<td>" + end + "</td>   \
<td><input type='button' class='btn btn-mini btn-danger' value='Delete'></td>\
</tr>");
$("#item_table tbody").append(newRowContent); 
$("#item_table").trigger("update");
$('.companyname').val('');
$('.position').val('');
$('.start').val('');
$('.end').val('');

$('input[type="button"]').click(function(){
   $(this).closest('tr').remove()
})

  ctr++;
  sessionStorage.counterInt = ctr;
});
});

</script>












<script type="text/javascript">
    
    $('input[type="button"]').click(function(e){
   $(this).closest('tr').remove()
})
    </script>
    
<script type="text/javascript"> // WORK START   
    $("#datepicker").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>
 
 <script type="text/javascript">   //WORK END 
    $("#datepicker2").datepicker( { 
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>

     <script type="text/javascript"> // ED START   
    $("#datepickerS").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>
 
 <script type="text/javascript">   //ED END 
    $("#datepickerE").datepicker( { 
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>   
      <script type="text/javascript"> // ED START   
    $("#datepickerOS").datepicker( {
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>
 
 <script type="text/javascript">   //ED END 
    $("#datepickerOE").datepicker( { 
    format: " yyyy",
    viewMode: "years", 
    minViewMode: "years"
});
 </script>   
        

 <!-- FOOTER -->           
        
         <hr>


   </body>
   
</html>