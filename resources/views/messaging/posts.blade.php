@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="javascript:AddMessage()" class="form-horizontal">

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Choose Channel/network 
    <span class="caret"></span>
  </button>
  <ul id="Network" class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Facebook</a></li>
    <li><a href="#">LinkedIn</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Pinterst</a></li>
    <li><a href="#">SnapChat</a></li>
      <li role="separator" class="divider"></li>
        <li><a href="#">Email</a></li>
        <li><a href="#">Affilate</a></li>
        <li><a href="#">Display</a></li>
        <li><a href="#">Google Ad word</a></li>

  </ul>
</div>

<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Choose Hashtag
    <span class="caret"></span>
  </button>
  <ul id="Network" class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">NY Year</a></li>
    <li><a href="#">Happy Easter</a></li>
    <li><a href="#">Summer Sale</a></li>
    <li><a href="#">Black Friday</a></li>
    <li><a href="#">Cyber Monday</a></li>
    <li><a href="#">Merry Xmas</a></li>
  </ul>
</div>




<br>


<br>
<input type="hidden" id="id" value="{{ Auth::user()->id }}">



<div class="input-group">
      <input type="text" placeholder="Craft Post" id="textarea_feedback" class="form-control" aria-label="..." style="width:200px">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="#">Action</a></li>
          <li><a href="#">Post</a></li>
          <li><a href="#">Schedule</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->



</form>

    </div>
  </div>
  <hr>
  


<div class="app-content" id="data-items" > 
       <div class="grid" >   
         <div class="col-sm-10">
          <!-- Language Flag -->  
            </div>
            
<!-- <div class="alert alert-success" id="eventsResult">
    Here is the result of success or fail
</div> -->

<table id="messages-grid" data-toggle="table"
 data-sort-name="ID"
       data-sort-order="asc"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
        data-show-export="true"
         data-click-to-select="true"
               data-toolbar="#toolbar"
       data-query-params="queryParams"
        data-mobile-responsive="true"
              data-pagination="true"
                          stickyHeader="true"

       data-url="api/v1/Messages/?user={{ Auth::user()->id }}&show=50">
    <thead>
    <tr>
        <th data-field="id" data-sortable="true" data-switchable="false"><strong>ID</strong></th>
        <th data-field="message">Message</th>
                <th data-field="platform" data-editable="false">Platform</th>
        <th data-field="Createdat" data-editable="false">Created At</th>
        <th data-field="Sentat" data-editable="false">Sent at</th>
         <th data-field="sent" data-editable="false">Sent at</th>
            <th data-field="Hashtag" data-editable="false">Hashtag</th>
       
    </tr>
    </thead>
</table>

  </div>
 </div>
 </div>
 </div>

 <!--send data to api -->



<script>

$(document).ready(function() {
    var text_max = 144;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#Craft_Post').keyup(function() {
        var text_length = $('#Craft_Post').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});



$( "#btn-save" ).click(function() {
  $( "#response" ).toggle("slow");
});

$(".alert-message").alert();
window.setTimeout(function() { $(".alert-message").alert('close'); }, 2000);




            function AddMessage(FirstName,LastName)
            {
                  var IdRequest = document.getElementById('id').value;
                  var CraftPostIn = document.getElementById('Craft_Post').value;
                  var NetworkRequest = document.getElementById('Network').value;
                  var HashtagIn = document.getElementById('HashTags').value;

                $.ajax({
                       type : 'POST',
                       url : 'api/v1/Messages/save',
                       data: {'message':CraftPostIn, 'NetworkIn':NetworkRequest, 'Hashtag':HashtagIn,'userID':IdRequest},
                       success : function (d)
                       {
                       alert(CraftPostIn);
                       $('#messages-grid').bootstrapTable('refresh');
                       },
                       })
                
            }
        
         </script>
        





@endsection

