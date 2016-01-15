@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network"> 
<OPTION VALUE="Small">Small</OPTION> 
<OPTION VALUE="medium">medium</OPTION>
 <OPTION VALUE="large">large</OPTION>
 <OPTION VALUE="aggressive">aggressive </OPTION>
 <OPTION VALUE="advisory">advisory</OPTION>
 </SELECT>

<button>Send</button>
</form>
    </div>

<h1> Current Budget</h1>
<div id="Current" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<button id="button">Set new data</button>

<script>
$(function () {



var chart;
$(document).ready(function() {

     Highcharts.setOptions({
    colors: ['#1abc9c', '#f1c40f', '#3498db', '#9b59b6', '#34495e', '#2c3e50', 
             '#e74c3c', '#e74c3c', '#e74c3c']}); /*begin chart render*/
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
                categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
                data: [122252, 3516, 4036, 3557, 4021, 3624, 3847],
                color: colors[0],
                data: [{
                    y: 33.06,
                    name: 'A',
                    drilldown: {
                        name: 'Budweiser',
                        categories: ['A', 'B', 'C', 'D', 'E', 'F', 'G'],
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
            backgroundColor: null
        },
        title: {
            text: 'Pie Test'
        },
        subtitle: {
            text: 'Pie Chart Triple Breakdown'
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
                    enabled: false,
                    color: '#FFFFFF',
                    shadow: false,
                    //label colors
                    connectorColor: '#000',
                    // connector label colors
                    formatter: function() {
                        return '<b>' + this.point.name + '</b>: ' + this.y;

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
            color: 'black' //Sectors icon
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
//update function based on type
$(function () {
    
    // The button action
    $('#button').click(function() {
        chart.series[0].setData([129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4, 29.9, 71.5, 106.4] );
    });
});

</script>


@endsection

