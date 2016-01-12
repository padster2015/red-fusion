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
            <div class="col-xs-6 col-sm-3 placeholder text-center circlefactsp" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:10%;">
            <h1 class="clicks"><strong>#5000</strong> </h1>
              <h4>Clicks</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive  " style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1 class="impressions"><strong>#5000</strong> </h1>
              <h4>Impressions</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center negative  "4400</strong> </h1>
              <h4>Spend to Date</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1 class="roi"><strong>$20,000 </strong></h1>
              <h4>ROI</h4>
            </div>
          </div>
          
          <hr>

<br>

<input type="radio" name="mychart" class="mychart" id= "column" value="column" onclick= "chartfunc()" checked>Column
<input type="radio" name="mychart" class="mychart" id= "bar" value="bar" onclick= "chartfunc()">Bar
<input type="radio" name="mychart" class="mychart" id= "pie" value="pie" onclick= "chartfunc()">Pie
<input type="radio" name="mychart" class="mychart" id= "line" value="line" onclick= "chartfunc()">Line


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
backgroundColor: null,
       events: {
            drilldown: function (e) {
                if (!e.seriesOptions) {

            var chart = this,
                            drilldowns = {
                                'New Year': {
                                    name: 'New Year',
                                    data: [
                                        ['Click', 2000],
                                        ['Impressions', 30000]
                                    ]
                                },
                                'Summer Sale': {
                                    name: 'Summer Sale',
                                    data: [
                                        ['Click', 390],
                                        ['Impressions', 13000],
                                        ['Acquisition', 5]
                                    ]
                                },
                                'Black Friday': {
                                    name: 'Black Friday',
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
                name: 'New Year',
                y: 2000,
                drilldown: true
            }, {
                name: 'Summer Sale',
                y: 390,
                drilldown: true
            }, {
                name: 'Black Friday',
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
options.chart.pointWidth: 28;
        var chart1 = new Highcharts.Chart(options);
    }
else if(bar.checked)
    {
        options.chart.renderTo = 'container';
        options.chart.type = 'bar';
options.chart.pointWidth: 28;
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

//counting up



(function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);

jQuery(function($) {
        $('.clicks').countTo({
            from: 0,
            to: 500,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });



jQuery(function($) {
        $('.impressions').countTo({
            from: 0,
            to: 10000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });

jQuery(function($) {
        $('.spend').countTo({
            from: 0,
            to: 20000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });

jQuery(function($) {
        $('.roi').countTo({
            from: 0,
            to: 50000,
            speed: 1000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
    });



</script>
@endsection

