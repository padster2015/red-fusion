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
            <div class="col-xs-6 col-sm-3 placeholder text-center circlefactsp" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:7%;">
            <h1 class="clicks"><strong>#5000</strong> </h1>
              <h4>Clicks</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive  " style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;">
            <h1 class="impressions"><strong>#5000</strong> </h1>
              <h4>Impressions</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center negative" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;"><h1 class="spend2date">4400</h1></strong> </h1>
              <h4>Spend to Date</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
            <h1 class="roi"><strong>$20,000 </strong></h1>
              <h4>ROI</h4>
            </div>
          </div>
          
          <hr>

<br>

<input type="radio" name="mychart" class="mychart" id= "column" value="column" onclick= "chartfunc()" checked>Column data
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
                  <th>Header testing Patrick hook</th>
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
var chart;
$(document).ready(function() { /*begin chart render*/
    var colors = Highcharts.getOptions().colors,
        categories = ['The Americas', 'Asia Pacific', 'Europe & Africa'],
        //name = 'Sectors',
        data = [{
            name: 'A-1',
            y: 55,
            color: colors[0],
            drilldown: {
                //begin alcohol
                name: 'A-1',
                color: colors[0],
                data: [{
                    y: 33.06,
                    name: 'A',
                    drilldown: {
                        name: 'Budweiser',
                        data: [
                            {name:'A', y:10838}
                            , {name:'B', y:11349}
                            , {name:'C', y:11894}
                            , {name:'D', y:11846}
                            , {name:'E', y:11878}
                            , {name:'F', y:11662}
                            , {name:'G', y:11652}
                        ],
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
    function setChart(name, categories, data, color) {
        //chart.xAxis[0].setCategories(categories);
        chart.series[0].remove();
        chart.addSeries({
            name: name,
            data: data,
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 15,
            shadow: false,

            color: color || 'white'
        });
    }
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',
plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,            
type: 'pie',
            /* changes bar size */
            pointPadding: -0.3,
            borderWidth: 0,
            pointWidth: 10,
            shadow: false,
style: {
         color: '#FFF',
         fontweight:'200',
         font: '25px "Work Sans", Helvetica, sans-serif'
      },
            backgroundColor: null
        },
        title: {
style: {
         color: '#FFF',
         fontweight:'200',
         font: '25px "Work Sans", Helvetica, sans-serif'
      },

            text: 'Fit Award'
        },
        subtitle: {
style: {
         color: '#FFF',
         fontweight:'200',
         font: '25px "Work Sans", Helvetica, sans-serif'
      },
            text: 'Omni Marketing Analysis'
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
                point: {
                    events: {
                        click: function() {
                            var drilldown = this.drilldown;
                            if (drilldown) { // drill down
                                setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                            } else { // restore
                                setChart(name, categories, data);
                            }
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    color: '#FFFFFF',
shadow: false,
style: {
         color: '#FFF',
         fontweight:'200',
         font: '16px "Work Sans", Helvetica, sans-serif'
      },
                    //label colors
                    connectorColor: '#FFFFFF',
                    // connector label colors
                    formatter: function() {
                        return '<b>' + this.point.name + '</b>: ' + this.y;22
                    }
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
            shadow: false,
            color: '#FFF' //Sectors icon
            }],
        exporting: {
            enabled: false
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

