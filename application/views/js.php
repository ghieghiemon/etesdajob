<script type="text/javascript">
					
	function openWindow(day,year,month){
		
		window.open($('#base').val() + 'welcome/view_event/'+year+'/'+month+"/"+day,'List of Events','width=400,height=600');

	}
</script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery-1.8.3.min.js'); ?>"></script>
<input type="hidden" value="<?php echo base_url(); ?>" id="base" />
