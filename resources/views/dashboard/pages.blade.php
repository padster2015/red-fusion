<html>
<head>
<style>
.morris-hover{position:absolute;z-index:1000}.morris-hover.morris-default-style{border-radius:10px;padding:6px;color:#666;background:rgba(255,255,255,0.8);border:solid 2px rgba(230,230,230,0.8);font-family:sans-serif;font-size:12px;text-align:center}.morris-hover.morris-default-style .morris-hover-row-label{font-weight:bold;margin:0.25em 0}
.morris-hover.morris-default-style .morris-hover-point{white-space:nowrap;margin:0.1em 0}

</style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>Morris Charts Example</h3>  
    </div>
  </div><!--/row-->
  <hr>
  <div class="row">
    <div class="col-md-12">
        <div id="area-example" style="height: 300px;"></div>
    </div>
    <div class="col-md-12">
        <div id="line-example" style="height: 300px;"></div>
    </div>
    <div class="col-md-6">
        <div id="donut-example" style="height: 250px;"></div>
    </div>
    <div class="col-md-6">
        <div id="bar-example" style="height: 250px;"></div>
    </div>
  </div>
</div>
<script>
//Morris charts snippet - js

$.getScript('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',function(){
$.getScript('http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.0/morris.min.js',function(){

  Morris.Area({
    element: 'area-example',
    data: [
      { y: '1.1.', a: 100, b: 90 },
      { y: '2.1.', a: 75,  b: 65 },
      { y: '3.1.', a: 50,  b: 40 },
      { y: '4.1.', a: 75,  b: 65 },
      { y: '5.1.', a: 50,  b: 40 },
      { y: '6.1.', a: 75,  b: 65 },
      { y: '7.1.', a: 100, b: 90 }
    ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['Series A', 'Series B']
  });
  
  Morris.Line({
        element: 'line-example',
        data: [
          {year: '2010', value: 20},
          {year: '2011', value: 10},
          {year: '2012', value: 5},
          {year: '2013', value: 2},
          {year: '2014', value: 20}
        ],
        xkey: 'year',
        ykeys: ['value'],
        labels: ['Value']
      });
      
      Morris.Donut({
        element: 'donut-example',
        data: [
         {label: "Android", value: 12},
         {label: "iPhone", value: 30},
         {label: "Other", value: 20}
        ]
      });
      
      Morris.Bar({
         element: 'bar-example',
         data: [
            {y: 'Jan 2014', a: 100, b: 90},
            {y: 'Feb 2014', a: 75,  b: 65},
            {y: 'Mar 2014', a: 50,  b: 40},
            {y: 'Apr 2014', a: 75,  b: 65},
            {y: 'May 2014', a: 50,  b: 40},
            {y: 'Jun 2014', a: 75,  b: 65}
         ],
         xkey: 'y',
         ykeys: ['a', 'b'],
         labels: ['Visitors', 'Conversions']
      });
  
});
});
</script>
</body>
</html>
