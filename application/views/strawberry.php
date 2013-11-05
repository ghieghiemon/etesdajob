<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
<input type="hidden" id="base" value="<?php echo base_url(); ?>" />
<script type="text/javascript">
    
    $(document).ready(function(){
        
        (function poll(){
            setTimeout(function(){
                 $.ajax({ url: $('#base').val() + "banana/retrieve", success: function(data){
                         
                         if(data.length > 0){
                             // alert(data.length);
                             for(var i = 0; i < data.length; i++){
                                 
                                
                                $('#nbody').append('<tr><td>' + data[i] + '</td></tr>');
                                 
                             }
                         }
                        
                 }, dataType: "json"});
                
                poll(); }, 2000);
            })();
            
            $('#add').on('click', function(){
                var msg = $('#notif').val();
                $.ajax({
                    url: $('#base').val() + 'banana/insert/',
                    type: "POST",
                    data: { id : msg }
                });
                $('#notif').val(null);
            });

    });

</script>
<div id="nothing"></div>
<textarea id="notif"></textarea><br>
<button id="add">Add Notif</button>

<table id="notifs">
    
    <thead>
    <th>Notifications</th>
    </thead>
    
    <tbody id="nbody">
        
    </tbody>
    
</table>


<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
