@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">


<div class="alert alert-success" id="save_alert" role="alert">
  <div class="alert alert-warning alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Minions have saved and processing your message</strong> :)
</div>
</div>




<form action="javascript:AddMessage()" class="form-horizontal">


<select id="Network" class="selectpicker" multiple> 
<option VALUE="">Choose Channel/network 
<option VALUE="Facebook">Facebook 
<option VALUE="LinkedIn">LinkedIn
 <option VALUE="Twitter">Twitter 
 <option VALUE="Pinterst">Pinterst 
 <option VALUE="SnapChat">SnapChat
   <option data-divider="true"></option>
    <option VALUE="Affiliate">Affiliate
    <option VALUE="Display">Display
    <option VALUE="Email">Email
    <option VALUE="Youtube">Youtube
    <option VALUE="Paid Search">Paid Search
    <option VALUE="Deals">Deals
     <option VALUE="All">All
 </select>


<select id="HashTags" class="selectpicker">
<option VALUE="">Choose tag

<option value="Sale">Sale
<option value="Summer">Summer
<option value="LGRW">LGRW
</select>




<input type="hidden" id="id" value="{{ Auth::user()->id }}">

<br>
<br>
<br>

<div class="input-group">
      <input type="text" id="Craft_Post" class="form-control" aria-label="..." placeholder="Craft your message here">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <span class="caret"></span></button>
        <ul class="dropdown-menu dropdown-menu-right" id="Craft_Post">
          <li><a onclick="AddMessage()" href="#">Post</a></li>
          <li><a href="#">Schedule</a></li>
          <li><a href="#">Save</a></li>
          <li role="separator" class="divider"></li>
        </ul>
      </div><!-- /btn-group -->
    </div><!-- /input-group -->



</form>


<div id="textarea_feedback"></div>

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
        <th data-field="Sentat" data-sortable="true" data-editable="false">Sent at</th>
         <th data-field="sent"  data-sortable="true" data-editable="false">Sent at</th>
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
                       $( "#save_alert" ).toggle( display );
                       $('#messages-grid').bootstrapTable('refresh');
                       },
                       })
                
            }
        
         </script>
        





@endsection
