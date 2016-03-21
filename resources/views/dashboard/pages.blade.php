@extends('layouts.app')

@section('content')
    <div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Whoo hoo!</strong> Logged in and data is in :)
</div>


<div class="container-fluid">


        <!--main-->
        <div class="main-view" style="width:80%; margin:0 auto;" ng-app="myApp" ng-controller="customersCtrl">  

<script>
var clicktotal = @{{ names }};
console.log(clicktotal);
</script>

          <h1>
          {{ Auth::user()->Business_name }} Charts</h1>
          <div class="row placeholders chart-highlights" style="text-align=Center;">
            <div class="col-xs-6 col-sm-3 placeholder text-center circlefactsp" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:7%;">
            <h1 class="clicks"><strong>@{{ names }}  </strong> </h1>
              <h4>Clicks</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive  " style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;">
            <h1 class="impressions"><strong>#5000</strong> </h1>
              <h4>Impressions</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center negative" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;">
             <h1 class="spend2date"><strong>$@{{ sptddata }}</h1></strong> </h1>
              <h4>Spend to Date</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1 class="roi"><strong>$20,000 </strong></h1>
              <h4>ROI</h4>
            </div>
          </div>
          <p>
 <hr>

<br>
<div class="btn-group" data-toggle="buttons">
  <label class="btn btn-primary active">
<input type="radio" name="mychart" class="mychart" id= "column" value="column" onclick= "chartfunc()" autocomplete="off" checked>Column data
 </label>
  <label class="btn btn-primary">
<input type="radio" name="mychart" class="mychart" id= "bar" value="bar" onclick= "chartfunc()" autocomplete="off">Bar
 </label>
  <label class="btn btn-primary">
<input type="radio" name="mychart" class="mychart" id= "pie" value="pie" onclick= "chartfunc()" autocomplete="off">Pie
 </label>
  <label class="btn btn-primary">
<input type="radio" name="mychart" class="mychart" id= "line" value="line" onclick= "chartfunc()" autocomplete="off">Line
<label></label>
</div>


            <div class="row">
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>
<hr>

          <h2 class="sub-header">{{ Auth::user()->Business_name }} Data</h2>
          <div class="table-responsive">
        <!-- <table class="table-striped table">
  <tr ng-repeat="x in names">
    <td>@{{ x.Total_Clicks }}</td>
  </tr>
</table>-->
          </div><!--/main-->


<table width="626" class="table-responsive table table-inverse">
<tbody>
<tr style="height: 28px;">
<th style="height: 28px;" width="155" class="thead-default">METRIC</th>
<th style="height: 28px;" width="87" class="thead-default">THIS YEAR (2016)</th>
<th style="height: 28px;" width="87" class="thead-default">LAST YEAR (2015)</th>
<th style="height: 28px;" width="117" class="thead-default">% CHANGE</th>
<th style="height: 28px;" width="180" class="thead-default">5 YEAR TREND</th>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">REVENUES</th>
<td style="height: 14px;">180583.8848</td>
<td style="height: 14px;" class="currency">180026.6391</td>
<td style="height: 14px;">0</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">OPERATING EXPENSES</th>
<td style="height: 14px;">94419.45803</td>
<td style="height: 14px;">80883.33095</td>
<td style="height: 14px;">17</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">OPERATING PROFIT</th>
<td style="height: 14px;">73425.99598</td>
<td style="height: 14px;">77317.83649</td>
<td style="height: 14px;">5</td>
<td style="height: 14px;"><i style="color: red" class="fa fa-arrow-down"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">DEPRECIATION</th>
<td style="height: 14px;">5546.885548</td>
<td style="height: 14px;">5068.423486</td>
<td style="height: 14px;">9</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">INTEREST</th>
<td style="height: 14px;">3789.473391</td>
<td style="height: 14px;">3338.30743</td>
<td style="height: 14px;">14</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">NET PROFIT</th>
<td style="height: 14px;">67474.85858</td>
<td style="height: 14px;">66272.10184</td>
<td style="height: 14px;">2</td>
<td style="height: 14px;"><i style="color: red" class="fa fa-arrow-down"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">TAX</th>
<td style="height: 14px;">31408.25564</td>
<td style="height: 14px;">29424.53193</td>
<td style="height: 14px;">7</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
<tr style="height: 14px;">
<th style="height: 14px;">PROFIT AFTER TAX</th>
<td style="height: 14px;">50247.68427</td>
<td style="height: 14px;">42438.20421</td>
<td style="height: 14px;">18</td>
<td style="height: 14px;"><i style="color: green" class="fa fa-arrow-up"></i>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>




<script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 1500);
</script>
<script>

var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    
    $http.get("./api/v1/Data/DashboardSummary_clicks?jsonp")
    .then(function (response) {
    $scope.names = response.data[0].Total_Clicks;
});


$http.get("./api/v1/Budget/DashboardSummary_SPTD?jsonp")
    .then(function (SPTDResponse) {
    $scope.sptddata = SPTDResponse.data[0].SPTD;
});



});
//angel
</script>
<script>
var chart;
$(document).ready(function() { /*begin chart render*/
    var colors = Highcharts.getOptions().colors,
        categories = ['The Americas', 'Asia Pacific', 'Europe & Africa'],
        //name = 'Sectors',
        data = [{
            name: 'New Year New You',
            y: 55,
            color: colors[0],
            drilldown: {
                //begin alcohol
                name: 'New Year New You',
                categories: ['Facebook', 'Twitter', 'Affiliate', 'Email', 'Search', 'Retargeting/Display', 'Facebook'],
                data: [122252, 3516, 4036, 3557, 4021, 3624, 3847],
                color: colors[0],
                data: [{
                    y: 33.06,
                    name: 'New Year New You',
                    drilldown: {
                        name: 'Facebook',
                        categories: ['Message 1', 'Message 6', 'Message 5', 'Message 4', 'Message 3', 'Message 2', 'Message 1'],
                        data: [10838, 11349, 11894, 11846, 11878, 11662, 11652, 11438, 11833, 12252],
                        color: colors[0]
                    }},
                {
                    y: 10.85,
                    name: 'B',
                    drilldown: {
                        name: 'Heinekein',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2266, 2396, 2431, 2380, 2357, 3516],
                        color: colors[0]
                    }},
                {
                    y: 7.35,
                    name: 'C',
                    drilldown: {
                        name: 'Jack Daniels',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [1583, 1580, 1612, 4036],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'D',
                    drilldown: {
                        name: 'Johnnie Walker',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [1649, 1654, 1724, 3557],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'E',
                    drilldown: {
                        name: 'Moet & Chandon',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2470, 2445, 2524, 2861, 2991, 3257, 3739, 3951, 3754, 4021],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'F',
                    drilldown: {
                        name: 'Smirnoff',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [2594, 2723, 5600, 2975, 3097, 3032, 3379, 3590, 7350, 3624],
                        color: colors[0]
                    }},
                {
                    y: 2.41,
                    name: 'G',
                    drilldown: {
                        name: 'Corona',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                        data: [3847],
                        color: colors[0]
                    }}],
            }},
        { 
            name: 'B-1',
            y: 11.94,
            color: colors[2],
            drilldown: {
                name: 'B',
                categories: ['A-2', 'B-2', 'C-2'],
                color: colors[2],
                data: [{
                    y: 33.06,
                    name: 'A',
                    drilldown: {
                        name: 'A',
                        categories: ['A', 'B'],
                        data: [4444, 6666],
                        color: colors[3]
                    },
                    },
                {
                    name: 'B',
                    y: 10.85,
                    drilldown: {
                        name: 'B',
                        categories: ['A', 'B'],
                        data: [22222, 6005],
                        color: colors[3]
                    },
                    },
                {
                    name: 'C',
                    y: 7.35,
                    drilldown: {
                        name: 'C',
                        categories: ['2011'],
                        data: [3605],
                        color: colors[3]
                    }}],
            }},
        ];



    window.chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
            type: 'pie',
            /* changes bar size */
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 10,
            shadow: false,
            backgroundColor: null,

style: {
   fontFamily: 'Arial',
color:'white'
        }
        },
 
title: {
    text: ''
},

        subtitle: {
            text: '',
style: {
            fontFamily: 'Arial',
color:'white',
fontsize:'16px'
        }
        },
        xAxis: {
            categories: categories
        },
        yAxis: {
            title: {
                text: 'Total Brand Value',
                categories: categories
            }
        },
        //drilldown plot
        plotOptions: {
            pie: {
                cursor: 'pointer',
                allowPointSelect: true,
                pointPadding: -0.3,
                borderWidth: 0,
                pointWidth: 15,
                color: 'white',
                shadow: false,
                point: {
                    events: {
                        click: function() {
                            var chart = this.series.chart,
                                drilldown = this.drilldown;
                            if (drilldown) { // drill down
                                chart.setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            }
                        }
                    }
                },
                
                
                
                dataLabels: {
                    enabled: true,
                    shadow: false,
                    //label colors
                    connectorColor: '#fff',
                    color: '#ff69b4',
                    // connector label colors
                   format: '<b>{point.name}</b>: {point.percentage:.1f} %'

                }
            }
        },
        
        
       
        //formatting over hover tooltip
        tooltip: {
            formatter: function() {
                var point = this.point,
                    s = point.name + ':<b>' + this.y + '% market share</b><br/>';
                if (point.drilldown) {
                    s = point.name + ':<b>' + this.y + '222</b><br/>';
                    s += 'Click to view ' + point.name + ' versions';
                } else {
                    s = point.name + ':<b>' + this.y + '333</b><br/>';
                    s += 'Click to return to browser brands';
                }
                return s;
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: name,
            data: data,
            /* changes bar size */
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 15,
innerSize: '96%',
            shadow: false,
            color: 'white' //Sectors icon
            }],
        exporting: {
            enabled: false
        }
    }, function(chart){
        
        chart.upper = [];
        
        var up = false;
        
        chart.setChart = function(name, categories, data, color) {
            //chart.xAxis[0].setCategories(categories);
            if (name === true && chart.upper.length) {
                chart.series[0].remove();
                chart.addSeries( chart.upper.pop() );
                
                if( chart.upper.length === 0 ) {
                    $("#pie").hide('up');
                    
                    up = false;
                }
                return true;
            }
    
            if (up === false) {
               $("#pie").show().bind('click', function(){ chart.setChart(true); });
                up = true;
            }
            
            chart.upper.push( chart.series[0].options );
            chart.series[0].remove();
            chart.addSeries({
                name: name,
                data: data,
                color: color || 'white'
            });
        }

        
        
    });


});
</script>
<script>


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
            to: @{{ names }},
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
        $('.spend2date').countTo({
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
