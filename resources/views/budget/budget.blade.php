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

<script>
$(function () {
    $('#Current').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Browser market shares January, 2015 to May, 2015'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [{
                name: 'Microsoft Internet Explorer',
                y: 56.33
            }, {
                name: 'Chrome',
                y: 24.03,
                sliced: true,
                selected: true
            }, {
                name: 'Firefox',
                y: 10.38
            }, {
                name: 'Safari',
                y: 4.77
            }, {
                name: 'Opera',
                y: 0.91
            }, {
                name: 'Proprietary or Undetectable',
                y: 0.2
            }]
        }]
    });
});
</script>

<li><strong>facebook:$5000</li> 
<li><strong>twitter:$5000</li> 
<li><strong>affiliate:$10000</li> 
<li><strong>display:$2000</li> 
<li><strong>offline:$10000</li> 
<li><strong>total:$30000</li> 
  </div><!--/row-->
  <hr>
  
<h1> aggressive Budget</h1>
<li><strong>facebook:$8000</li> 
<li><strong>twitter:$5000</li> 
<li><strong>affiliate:$20000</li> 
<li><strong>display:$10000</li> 
<li><strong>offline:$1000</li> 
<li><strong>total:$5000</li> 

  </div><!--/row-->
<hr>

<h1> aggressive roi</h1>
<li><strong>facebook:$2000</li> 
<li><strong>twitter:$1000</li> 
<li><strong>affiliate:$30000</li> 
<li><strong>display:$100</li> 
<li><strong>offline:$5000</li> 
<li><strong>total:$11500</li> 

  </div><!--/row-->
<hr>


@endsection

