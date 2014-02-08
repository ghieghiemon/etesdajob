
 <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Historic World Population by Region'
            },
            subtitle: {
                text: 'Source: Wikipedia.org'
            },
            xAxis: {
                categories: ['January', 'February', 'March', 'April', 'May','June','July','August','September','October','November','December'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [
                    <?php foreach($report1 as $a):
                    $ctr = sizeof($report1);
                    ?>
                    { name: '<?php echo $a['jobtitle']?>',
                      data: [
                      <?php 
                      $applicants = $this->model_reports->get_applicants($a['jobno']);
                      //$month = array(1,2,3,4,5,6,7,8,9,10,11,12);
                      $month = 1;
                      $ctr2 = 12;
                      while($month <=12)
                      {
                          foreach($applicants as $b)
                          {
                            if($b['month'] == $month)
                            {
                              echo $b['count'];
                            }
                            else
                            {
                                echo 0;
                            }
                            if($ctr2 > 1)
                            {
                              echo ", ";
                            }
                          }
                          $month++;
                           $ctr2--;
                      }?>
                      ]
                    }
                    <?php 
                    if($ctr > 1)
                    {
                        echo ", ";
                    }
                    $ctr--;
                    ?>
                    
                    <?php
                    endforeach; 
                    ?>
                
                ]
        });
    });
    
		</script>
           
<?php ?>
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

