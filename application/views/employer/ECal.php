<br>
<br>
<script type="text/javascript">
					
	function openWindow(day,year,month,company){
		
		// window.open($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company,'List of Events','width=400,height=600');
		$('#contentdiv').load($('#base').val() + 'employer/view_event/'+year+'/'+month+"/"+day+"/"+company);
		
	}
</script>
<br>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.8.3.min.js'); ?>"></script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
