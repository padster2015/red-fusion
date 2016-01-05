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
        chart: {
            type: 'area'
        },
        title: {
            text: 'How your Brand is doing'
        },
      
        xAxis: {
            categories: ['01-01-2015', '01-03-2015', '01-06-2015', '01-09-2015', '01-10-2015', '01-11-2015', '31-12-2015'],
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Clicks'
            },
            labels: {
                formatter: function () {
                    return this.value / 100;
                }
            }
        },
        tooltip: {
            shared: true,
            valueSuffix: ' millions'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }
            }
        },
        series: [{
            name: 'New Year - New You',
            data: [502, 635, 809, 947, 1402, 3634, 5268]
        }, {
            name: 'Spring into action',
            data: [106, 107, 111, 133, 221, 767, 1766]
        }, {
            name: 'Summer Sale',
            data: [163, 203, 276, 408, 547, 729, 628]
        }, {
            name: 'Cyber Monday',
            data: [18, 31, 54, 156, 339, 818, 1201]
        }, {
            name: 'Boxing Day Madness',
            data: [2, 2, 2, 6, 13, 30, 46]
        }]
    });
});

</script>
@endsection

