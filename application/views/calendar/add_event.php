<?php 
	$h = '<select name="hour" id="hour">';
	$m = '<select name="minute" id="minute">';
	for($i = 0; $i< 60; $i++){
		if($i < 24){
			$h .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
		}
		$m .= '<option value="'.(($i > 9)? $i : "0$i").'">'.(($i > 9)? $i : "0$i").'</option>';
	}
	$h .= '</select>';
	$m .= '</select>';
?>
<div style="width:500px; height:135px; overflow:auto; color:#000000; margin-bottom:20px;" align="center">
	<h4>Adding event for <?php echo "$day $month $year"?></h4>
	<div class="spacer"></div>
	<table>
		<tr><td>Time <span class="require">*</span></td><td>:</td><td><?php echo "$h&nbsp;:&nbsp;$m";?>&nbsp;:&nbsp;<select name="second" disabled><option value="00">00</option></select></td></tr>
		<tr><td>Event <span class="require">*</span></td><td>:</td><td><input type="text" name="event" id="event" maxlength="50" size="50" /></td></tr>
		<tr><td colspan="2"></td><td><input type="button" name="Save" value="Save" class="save">&nbsp;&nbsp;
	        <input type="button" name="cancel" value="Cancel" class="cancel"></td></tr>
	</table>
<input type="hidden" id="base" value="<?php echo base_url(); ?>" />
<input type="hidden" value="<?php echo "year:$year,mon:$mon,day:$day";?>" id="bla1" />
<script>	
	$('.cancel').click(function(){
		var data = false;
		$.fn.colorbox.close(data);
	});
	
        $('.save').click(function(){
            if($('#event').val().length > 0){
                        alert('valid');
                       $.ajax({
				type: 'POST',
				dataType: 'json',
                                url: $('#base').val() + 'evencal/do_add',
                                data: {year:<?php echo $year;?>,mon:<?php echo $mon ?>,day:<?php echo $day; ?>, hour:$('#hour').val(), minute: $('#minute').val(), event:$('#event').val()},
                                success: function(data){
                                    if(data.status){
						//$.fn.colorbox.close(data);
						window.location = '<?php echo base_url("evencal/detail/$year/$mon/$day")?>';
					}else{
						$('.spacer').html(data.message);
					}
                                }
                            });
                        
		
	}else{
			$('.spacer').html('Please complete the field')
			$('#event').attr('class','error_require');
		}
        });
        
	
        
	</script>
</div>