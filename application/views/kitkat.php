<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-2.0.2.min.js" type="text/javascript"></script>
<a href="<?php echo base_url("macandcheese"); ?>">Go back to topic list</a>
<br>
<input type="hidden" id="current_page" value="<?php echo $current_page ?>" />
<?php
$ctr = 1;
 echo "Current page: " . $current_page;
 echo '<br>Change your page';
 ?>
<form id="toblerone" method="get" action="<?php echo base_url('macandcheese/view_topic/'); ?>" >
<input type="hidden" name="id" id="id" value="<?php echo $id ?>" />
<select name="page" id="page">
    
    <?php 
    
        while($ctr <= $pages):
            
            echo '<option value="' . $ctr . '">' . $ctr . '</option>';
            $ctr++;
            
        endwhile;
    
    ?>
    
    
</select>
</form>

<?php
 echo '<br>';
 echo "<b>Posts</b>";
 echo '<hr>';
 foreach($display as $item):
     
     echo $item->discussion;
     echo '<br>';
     echo "posted by: " . $item->postedby . "   date posted: " . $item->datereplied;
     echo '<hr>';
     
 endforeach;
 
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script type="text/javascript">
    
    
    $(document).ready(function(){
       
       $('#page').val($('#current_page').val());
       
       $('#page').change(function(){
           
        $('#toblerone').submit();
           
       });
        
    });
    
</script>