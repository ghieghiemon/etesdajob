
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
                categories: ['January', 'February', 'March', 'April', 'May'],
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
                name: '<?php echo $a['jobtitle']?>',
                data: [
                      <?php 
                      $applicants = $this->model_reports->get_applicants($a['jobno']);
                      $hi = $a['jobno'];
                      foreach($applicants as $a):
                          $ctr2 = sizeof($applicants);
                          echo $a['count'];
                          if($ctr2 > 1)
                          {
                            echo ", ";
                          }
                          $ctr2--;
                      endforeach;?>
                      ]
                    }
                    <?php 
                    if($ctr > 1)
                    {
                        echo ", ";
                    }
                    $ctr--;
                    endforeach;
                    ?>
                ]
        });
    });
    
		</script>
           
<?php ?>
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

