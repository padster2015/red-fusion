@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Options" id="options"> 
<OPTION VALUE="Small">Small</OPTION> 
<OPTION VALUE="medium">medium</OPTION>
 <OPTION VALUE="large">large</OPTION>
 <OPTION VALUE="aggressive">aggressive </OPTION>
 <OPTION VALUE="advisory">advisory</OPTION>
 </SELECT>

<button style="color:#000;" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
</form>
    </div>

<h1> Current Budget</h1>
<div id="Current" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
<button id="button" style="color:#000;" class="btn btn-links">Set new budgets</button>

<script>
$(function () {

     Highcharts.setOptions({
    colors: ['#1abc9c', '#f1c40f', '#3498db', '#9b59b6', '#34495e', '#2c3e50', 
             '#e74c3c', '#e74c3c', '#e74c3c']});


// Create the chart
    
    $('#Current').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie',
            credits: {
      enabled: false
  },
  credits: {
    enabled: false
  },
   title: {
      style: {
         color: '#FFF',
         font: '25px "Work Sans", Helvetica, sans-serif'
      }
   },
backgroundColor: null
        },
        title: {
            text: 'Budget by channel',
style: {
         color: '#FFF',
         fontweight:'200',
         font: '25px "Work Sans", Helvetica, sans-serif'
      }
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                 borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'White',
                        textShadow: false
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
innerSize: '96%',
            data: [{
                name: 'Facebook',
                y: 5000
            }, {
                name: 'twitter',
                y: 5000,
                sliced: true,
                selected: true
            }, {
                name: 'Affiliate',
                y: 10000
            }, {
                name: 'Retargeting',
                y: 20000
            }, {
                name: 'Offline',
                y: 32000
            }]
        }]
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

