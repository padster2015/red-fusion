@extends('layouts.app')

@section('content')
    <div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Whoo hoo!</strong> Logged in and data is in :)
</div>


<div class="container-fluid">


        <!--main-->
        <div class="main-view" style="width:80%; margin:0 auto;" ng-app="myApp" ng-controller="customersCtrl">


          <h1>
          {{ Auth::user()->Business_name }} Charts</h1>
          <div id="summarise" class="row placeholders chart-highlights" style="text-align=Center;">
            <div class="col-xs-6 col-sm-3 placeholder text-center circlefactsp" style="border-radius:0px 100px 100px 100px; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:7%;">
            <h1 class="clicks"><strong>@{{ names }}  </strong> </h1>

            <span get-value="" max="upperCount"></span><span class="circle-home-score " id="counterofreviews" data-count="@{{upperCount}}"><h1>@{{noReviews}}</span></h1>


              <h4>Clicks</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive  " style="border-radius:0px 100px 100px 100px; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;">
            <h1 class="impressions"><strong>#5000</strong> </h1>
              <h4>Impressions</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center negative" style="border-radius:100px 100px 100px 0px; background-color:#c0392b; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:7%;">
             <h1 class="spend2date"><strong>$@{{ sptddata }}</h1></strong> </h1>
              <h4>Spend to Date</h4>
            </div>
             <div class="col-xs-6 col-sm-3 placeholder text-center positive" style="border-radius:0px 100px 100px 100px; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-right:10%;">
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

          <a href="./auth/authorize/facebook">Facebook Auth</a>
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




<script src="app/js/dashboard/dashboard.js"></script>

@endsection
