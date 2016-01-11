@extends('layouts.app')

@section('content')
    <div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Whoo hoo!</strong> Logged in and data is in :)
</div>


<div class="container-fluid">


        <!--main-->
        <div class="main-view" style="width:80%; margin:0 auto;">
          
          <h1>
          {{ Auth::user()->Business_name }} Charts</h1>

          <div class="row placeholders chart-highlights" style="text-align=Center;">
            <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:10%;">
            <h1>#5000 </h1>
              <h4>Clicks</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1>#5000 </h1>
              <h4>Impressions</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center negative " style="border-radius:100%; background-color:#c0392b; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1>$10,000 </h1>
              <h4>Spend to Date</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1>$20,000 </h1>
              <h4>ROI</h4>
            </div>
          </div>
          
          <hr>

<br>
<button id= "column" value="column" onclick= "chartfunc()"><i class="fa fa-bar-chart"></i></button>
<input type="button" name="mychart" class="mychart" id= "column" value="column" onclick= "chartfunc()" checked>
<input type="button" name="mychart" class="mychart" id= "bar" value="bar" onclick= "chartfunc()"><i class="fa fa-bar-chart"></i>
<input type="button" name="mychart" class="mychart" id= "pie" value="pie" onclick= "chartfunc()"><i class="fa fa-pie-chart"></i>
<input type="button" name="mychart" class="mychart" id= "line" value="line" onclick= "chartfunc()"><i class="fa fa-line-chart"></i>



            <div class="row">
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>
<hr>

          <h2 class="sub-header">{{ Auth::user()->Business_name }} Data</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,002</td>
                  <td>amet</td>
                  <td>consectetur</td>
                  <td>adipiscing</td>
                  <td>elit</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>Integer</td>
                  <td>nec</td>
                  <td>odio</td>
                  <td>Praesent</td>
                </tr>
                <tr>
                  <td>1,003</td>
                  <td>libero</td>
                  <td>Sed</td>
                  <td>cursus</td>
                  <td>ante</td>
                </tr>
                <tr>
                  <td>1,004</td>
                  <td>dapibus</td>
                  <td>diam</td>
                  <td>Sed</td>
                  <td>nisi</td>
                </tr>
                <tr>
                  <td>1,005</td>
                  <td>Nulla</td>
                  <td>quis</td>
                  <td>sem</td>
                  <td>at</td>
                </tr>
                <tr>
                  <td>1,006</td>
                  <td>nibh</td>
                  <td>elementum</td>
                  <td>imperdiet</td>
                  <td>Duis</td>
                </tr>
                <tr>
                  <td>1,007</td>
                  <td>sagittis</td>
                  <td>ipsum</td>
                  <td>Praesent</td>
                  <td>mauris</td>
                </tr>
                <tr>
                  <td>1,008</td>
                  <td>Fusce</td>
                  <td>bootply</td>
                  <td>tellus</td>
                  <td>sed</td>
                </tr>
                <tr>
                  <td>1,009</td>
                  <td>augue</td>
                  <td>semper</td>
                  <td>porta</td>
                  <td>Mauris</td>
                </tr>
                <tr>
                  <td>1,010</td>
                  <td>massa</td>
                  <td>Vestibulum</td>
                  <td>lacinia</td>
                  <td>arcu</td>
                </tr>
                <tr>
                  <td>1,011</td>
                  <td>eget</td>
                  <td>nulla</td>
                  <td>Class</td>
                  <td>aptent</td>
                </tr>
                <tr>
                  <td>1,012</td>
                  <td>taciti</td>
                  <td>sociosqu</td>
                  <td>ad</td>
                  <td>litora</td>
                </tr>
                <tr>
                  <td>1,013</td>
                  <td>torquent</td>
                  <td>per</td>
                  <td>conubia</td>
                  <td>nostra</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div><!--/main-->


<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2500);
</script>

<script>
$(function () {
     Highcharts.setOptions({
    colors: ['#1abc9c', '#f1c40f', '#3498db', '#9b59b6', '#34495e', '#2c3e50', 
             '#e74c3c', '#e74c3c', '#e74c3c']});


// Create the chart

var options = {
    chart: {
       events: {
            drilldown: function (e) {
                if (!e.seriesOptions) {

            var chart = this,
                            drilldowns = {
                                'New Year': {
                                    name: 'Facebook',
                                    data: [
                                        ['Click', 2000],
                                        ['Impressions', 30000]
                                    ]
                                },
                                'Summer Sale': {
                                    name: 'Affiliate',
                                    data: [
                                        ['Click', 390],
                                        ['Impressions', 13000],
                                        ['Acquisition', 5]
                                    ]
                                },
                                'Black Friday': {
                                    name: 'Display',
                                    data: [
                                        ['Click', 1500],
                                        ['Impression', 50000],
                                        ['Acquisition', 750]
                                    ]
                                }
                            },
                            series = drilldowns[e.point.name];

                        

                    // Show the loading label
                    chart.showLoading('Loading ...');

                    setTimeout(function () {
                        chart.hideLoading();
                        chart.addSeriesAsDrilldown(e.point, series);
                    }, 1000); 
                }

            }
        },
        plotBorderWidth: 0
    },

    title: {
        text: 'Fit Award Brand',
    },
    //
    
    //
    xAxis: {
            type: 'category',
    },
    //
    yAxis: {

            title: {
                margin: 10,
                text: 'No. of Clicks'
            },      
    },
    //
    legend: {
        enabled: true,
    },
    //
    plotOptions: {
        series: {
            pointPadding: 0.2,
            borderWidth: 0,
            dataLabels: {
                enabled: true
            }
        },
        pie: {
            plotBorderWidth: 0,
            allowPointSelect: true,
            cursor: 'pointer',
            size: '100%',
            dataLabels: {
                enabled: true,
                format: '{point.name}: <b>{point.y}</b>'
            }
        }
    },
    //
     series: [{
            name: 'Channels',
            colorByPoint: true,
            data: [{
                name: 'Facebook',
                y: 2000,
                drilldown: true
            }, {
                name: 'Affiliate',
                y: 390,
                drilldown: true
            }, {
                name: 'Display',
                y: 1500,
                drilldown: true
            }]
        }],
    //
    drilldown: {
        series: []
    }
};

// Column chart
options.chart.renderTo = 'container';
options.chart.type = 'column';
var chart1 = new Highcharts.Chart(options);

chartfunc = function()
{
var column = document.getElementById('column');
var bar = document.getElementById('bar');
var pie = document.getElementById('pie');
var line = document.getElementById('line');

        
if(column.checked)
    {
        
        options.chart.renderTo = 'container';
        options.chart.type = 'column';
        var chart1 = new Highcharts.Chart(options);
    }
else if(bar.checked)
    {
        options.chart.renderTo = 'container';
        options.chart.type = 'bar';
        var chart1 = new Highcharts.Chart(options);
    }
else if(pie.checked)
    {
        options.chart.renderTo = 'container';
        options.chart.type = 'pie';
        var chart1 = new Highcharts.Chart(options);
    }
else
    {
        options.chart.renderTo = 'container';
        options.chart.type = 'line';
        var chart1 = new Highcharts.Chart(options);
    }

}

$('#change_chart_title').click(function(){
    options.title.text = $('#chart_title').val();
    var chart1 = new Highcharts.Chart(options);
});
});



</script>
@endsection

