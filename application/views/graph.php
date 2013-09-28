<!DOCTYPE html>
<html>
    <head>
        <title>AwesomeChartJS demo</title>
        <style>
        
            body{
                background: #fff;
                color: #333;
            }
            
            a, a:visited, a:link, a:active{
                color: #333;
            }
            
            a:hover{
                color: #00f;
            }
        
            .charts_container{
                overflow: auto;
                width: 900px;
                height: 420px;
                margin: 10px auto;
            }
            
            .chart_container_centered{
                text-align: center;
                width: 900px;
                height: 420px;
                margin: 10px auto;
            }
            
            .chart_container{
                width: 400px;
                height: 400px;
                margin: 0px 25px;
                float: left;
            }
            
            .footer{
                font-size: small;
                text-align: right;
            }
        </style>
        <script type="application/javascript" src="<?php echo base_url()?>assets/bootstrap/js/awesomechart.js"> </script>
    </head>
    <body>
        <div class="chart_container_centered">

            <canvas id="chartCanvas13" width="600" height="400">
                Your web-browser does not support the HTML 5 canvas element.
            </canvas>

        </div>
        
        <div class="charts_container">
            <div class="chart_container">
            
                <canvas id="chartCanvas1" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>
                
            </div>
            
            <div class="chart_container">
            
                <canvas id="chartCanvas2" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>
                
            </div>
        </div>

        <div class="charts_container">
            <div class="chart_container">

                <canvas id="chartCanvas11" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>

            <div class="chart_container">

                <canvas id="chartCanvas12" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
        </div>

        <div class="charts_container">
            <div class="chart_container">

                <canvas id="chartCanvas3" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>

            <div class="chart_container">

                <canvas id="chartCanvas4" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
        </div>
        
        <div class="charts_container">
            <div class="chart_container">

                <canvas id="chartCanvas5" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>

            <div class="chart_container">

                <canvas id="chartCanvas6" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
        </div>
        
        <div class="charts_container">
            <div class="chart_container">

                <canvas id="chartCanvas7" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
            
            <div class="chart_container">

                <canvas id="chartCanvas8" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
        </div>
        
        <div class="charts_container">
            <div class="chart_container">

                <canvas id="chartCanvas9" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
            
            <div class="chart_container">

                <canvas id="chartCanvas10" width="400" height="400">
                    Your web-browser does not support the HTML 5 canvas element.
                </canvas>

            </div>
        </div>
        
        <p class="footer">Data source: <a href="http://gs.statcounter.com/#browser-ww-monthly-200912-201012-bar" target="_blank">StatCounter</a></p>
        
        <script type="application/javascript">
            var chart1 = new AwesomeChart('chartCanvas1');
            chart1.title = "Worldwide browser market share: December 2010";
            chart1.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart1.labels = [<?php 
        $no = count($graph);
        foreach ($graph as $a)
            {
            echo "'";
            echo $a['title']; 
            echo "'";
            if ($no > 1)
            {
                echo ",";
            }
            $no -= 1;
            }
            ?>];
            chart1.draw();
            
            var chart2 = new AwesomeChart('chartCanvas2');
            chart2.title = "Worldwide IE market share: December 2010";
            chart2.data = [27.45,15.13,8.94];
            chart2.labels = ['IE 8','IE 7','IE 6'];
            chart2.draw();
            
            var chart3 = new AwesomeChart('chartCanvas3');
            chart3.chartType = "exploded pie";
            chart3.title = "Worldwide browser market share: December 2010";
            chart3.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart3.labels = ['IE','Firefox','Chrome','Safari','Opera','Other'];
            chart3.draw();

            var chart4 = new AwesomeChart('chartCanvas4');
            chart4.chartType = "exploded pie";
            chart4.pieTotal = 100;
            chart4.title = "Worldwide IE market share: December 2010";
            chart4.data = [27.45,15.13,8.94];
            chart4.labels = ['IE 8','IE 7','IE 6'];
            chart4.draw();

            var chart5 = new AwesomeChart('chartCanvas5');
            chart5.chartType = "pie";
            chart5.title = "Worldwide browser market share: December 2010";
            chart5.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart5.labels = ['IE','Firefox','Chrome','Safari','Opera','Other'];
            chart5.draw();

            var chart6 = new AwesomeChart('chartCanvas6');
            chart6.chartType = "pie";
            chart6.pieTotal = 100;
            chart6.title = "Worldwide IE market share: December 2010";
            chart6.data = [27.45,15.13,8.94];
            chart6.labels = ['IE 8','IE 7','IE 6'];
            chart6.draw();
            
            var chart7 = new AwesomeChart('chartCanvas7');
            chart7.chartType = "ring";
            chart7.title = "Worldwide browser market share: December 2010";
            chart7.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart7.labels = ['IE','Firefox','Chrome','Safari','Opera','Other'];
            chart7.draw();

            var chart8 = new AwesomeChart('chartCanvas8');
            chart8.chartType = "ring";
            chart8.pieTotal = 100;
            chart8.title = "Worldwide IE market share: December 2010";
            chart8.data = [27.45,15.13,8.94];
            chart8.labels = ['IE 8','IE 7','IE 6'];
            chart8.draw();
            
            var chart9 = new AwesomeChart('chartCanvas9');
            chart9.chartType = "ring";
            chart9.pieTotal = 100;
            chart9.pieStart = 51.62;
            chart9.title = "Worldwide Firefox market share: December 2010";
            chart9.data = [19.51, 7.79, 3.28];
            chart9.labels = ['Firefox 3.6', 'Firefox 3.5', 'Firefox 3.0'];
            chart9.draw();
            
            var chart10 = new AwesomeChart('chartCanvas10');
            chart10.chartType = "ring";
            chart10.pieTotal = 100;
            chart10.pieStart = 82.92;
            chart10.title = "Worldwide Chrome market share: December 2010";
            chart10.data = [2.92, 2.26, 1.63, 1.5];
            chart10.labels = ['Chrome 5.0', 'Chrome 4.0', 'Chrome 7.0', 'Chrome 6.0'];
            chart10.draw();

            var chart11 = new AwesomeChart('chartCanvas11');
            chart11.chartType = "horizontal bars";
            chart11.title = "Worldwide browser market share: December 2010";
            chart11.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart11.labels = ['IE','Firefox','Chrome','Safari','Opera','Other'];
            chart11.draw();

            var chart12 = new AwesomeChart('chartCanvas12');
            chart12.chartType = "horizontal bars";
            chart12.title = "Worldwide IE market share: December 2010";
            chart12.data = [27.45,15.13,8.94];
            chart12.labels = ['IE 8','IE 7','IE 6'];
            chart12.draw();
            
            var chart13 = new AwesomeChart('chartCanvas13');
            chart13.chartType = "pareto";
            chart13.title = "Worldwide browser market share: December 2010";
            chart13.data = [51.62,31.3,10.06,4.27,1.96,0.78];
            chart13.labels = ['IE','Firefox','Chrome','Safari','Opera','Other'];
            chart13.draw();
            
        </script>
        
    </body>
</html>

