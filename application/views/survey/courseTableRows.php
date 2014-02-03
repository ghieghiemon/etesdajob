<?php foreach($entries as $e): ?>
<tr>
      <td>
         <?php echo $e['coursename'] ?>
      </td>

      <td>
          <?php if($e['count'] == -1){  
              echo 0;
          }else{
              echo $e['count'];
          }
          ?>  
      </td>

      <td>
          
          <?php if($e['count'] == -1):?>
          <a href="<?php echo site_url('adminsurvey/addSurvey').'/'.$e['courseid']?>" class="btn btn-primary btn-mini">Edit</a>
          <?php else: ?>
          <a href="<?php echo site_url('adminsurvey/courseSurvey').'/'.$e['courseid']?>" class="btn btn-primary btn-mini">Edit</a>
          <?php endif; ?> 
          
      </td>
                              
</tr>
<?php endforeach; ?>