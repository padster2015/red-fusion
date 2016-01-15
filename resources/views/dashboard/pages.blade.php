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
}, 1500);
</script>
<script>

// Internationalization
Highcharts.setOptions({
    lang: {
        drillUpText: '◁ Back to {series.name}'
    }
});

var options = {

    chart: {
        height: 300
    },
    
    title: {
        text: 'Highcharts Drilldown Plugin'
    },

    xAxis: {
        categories: true
    },
    
    drilldown: {
        series: [{
            id: 'fruits',
            name: 'Fruits',
            data: [
                ['Apples', 4],
                ['Pears', 6],
                ['Oranges', 2],
                ['Grapes', 8]
            ]
        }, {
            id: 'cars',
            name: 'Cars',
            data: [{
                name: 'Toyota', 
                y: 4,
                drilldown: 'toyota'
            },
            ['Volkswagen', 3],
            ['Opel', 5]
            ]
        }, {
            id: 'toyota',
            name: 'Toyota',
            data: [
                ['RAV4', 3],
                ['Corolla', 1],
                ['Carina', 4],
                ['Land Cruiser', 5]
            ]
        }]
    },
    
    legend: {
        enabled: false
    },
    
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true
            },
            shadow: false
        },
        pie: {
            size: '80%'
        }
    },
    
    series: [{
        name: 'Overview',
        colorByPoint: true,
        data: [{
            name: 'Fruits',
            y: 10,
            drilldown: 'fruits'
        }, {
            name: 'Cars',
            y: 12,
            drilldown: 'cars'
        }, {
            name: 'Countries',
            y: 8
        }]
    }]
};

// Column chart
options.chart.renderTo = 'container1';
options.chart.type = 'column';
var chart1 = new Highcharts.Chart(options);

// Pie
options.chart.renderTo = 'container2';
options.chart.type = 'pie';
var chart2 = new Highcharts.Chart(options);



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

