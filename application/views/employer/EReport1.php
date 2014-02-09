

 <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'No. of Applicants per Vacancy'
            },
            subtitle: {
                text: '<?php echo $name[0]['companyName'] ?>'
            },
            xAxis: {
                categories: [
                    'Jan',
                    'Feb',
                    'Mar',
                    'Apr',
                    'May',
                    'Jun',
                    'Jul',
                    'Aug',
                    'Sep',
                    'Oct',
                    'Nov',
                    'Dec'
                ]
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Number of Applicants'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} applicants</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [
                    <?php foreach($reportData as $key=>$r):
                   
                    ?>
                    { name: '<?php echo $key?>',
                      data: [
                      <?php $count = count($r);
                      foreach($r as $index=>$data):?>
                     <?php   
                        if($index == $count){
                            echo $data;
                        }else{ 
                            echo $data.',';
                            }
                         ?>
                         <?php                     endforeach; ?>
                        
                         ]},
                                  
                      <?php endforeach; ?>
                
                ]
        });
    });
    
		</script>
           
                
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

