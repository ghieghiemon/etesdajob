

 <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script>
$(function () {
        $('#container').highcharts({
            chart: {
                type: 'column'
            },
            title: {
                text: 'Active and Inactive Applicants'
            },
            subtitle: {
                text: 'TESDA'
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
                    text: 'Number of Users'
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
            series: [{ name: 'Active Users',
                      data: [ <?php
                      $ctr = count($indexedReportData);
                      foreach ($indexedReportData as $a)
                      {
                          echo $a;
                          if($ctr > 1)
                              echo ", ";
                          $ctr--;
                      }
                      ?>
                        ]}
                ]
        });
    });
    
		</script>
           
                
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<br><br><br>
<br><br><br>