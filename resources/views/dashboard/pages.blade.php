@extends('layouts.app')

@section('content')
<div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Whoo hoo!</strong> Logged in and data is in :)
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }} Charts</h3>  
      <ul>
      <li><strong>ID :</strong> {{ Auth::user()->id }} </li>
      <li> <strong>email :</strong>{{ Auth::user()->email }} </li>
      <li><strong>created date :</strong>{{ Auth::user()->created_at }}</li>
      <li><strong>updated at :</strong>{{ Auth::user()->updated_at }}</li>
      <li><strong>token :</strong>{{ Auth::user()->remember_token }}</li>
</ul>
    </div>
  </div><!--/row-->
  <hr>
  <div class="row">
    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</div>
<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Brand'
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Bananas', 'Plums']
        },
        labels: {
            items: [{
                html: 'Total fruit consumption',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: [{
            type: 'area',
            name: 'Jane',
            data: [3, 2, 1, 3, 4]
        }, {
            type: 'area',
            name: 'John',
            data: [2, 3, 5, 7, 6]
        }, {
            type: 'area',
            name: 'Joe',
            data: [4, 3, 3, 9, 0]
        }, {
            type: 'area',
            name: 'Average',
            data: [3, 2.67, 3, 6.33, 3.33],
            marker: {
                lineWidth: 2,
                lineColor: Highcharts.getOptions().colors[3],
                fillColor: 'white'
            }
        }, {
            type: 'pie',
            name: 'Total consumption',
            data: [{
                name: 'Jane',
                y: 13,
                color: Highcharts.getOptions().colors[0] // Jane's color
            }, {
                name: 'John',
                y: 23,
                color: Highcharts.getOptions().colors[1] // John's color
            }, {
                name: 'Joe',
                y: 19,
                color: Highcharts.getOptions().colors[2] // Joe's color
            }],
            center: [100, 80],
            size: 100,
            showInLegend: true,
            dataLabels: {
                enabled: true
            }
        }]
    });
});


</script>
@endsection

