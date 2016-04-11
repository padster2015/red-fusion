@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="javascript:AddMessage()">

<select id="Network"> 
<option VALUE="">Choose Channel/network 

<option VALUE="Facebook">Facebook 
<option VALUE="LinkedIn">LinkedIn
 <option VALUE="Twitter">Twitter 
 <option VALUE="Pinterst">Pinterst 
 <option VALUE="SnapChat">SnapChat
 <option VALUE="All">All
 </select>
 <br># 
<i class="fa fa-hashtag"></i>
<Select id="HashTags">
<option value="Sale">Sale
<option value="Summer">Summer
<option value="LGRW">LGRW
<option value="BlackFriday">BlackFriday
<option value="NewYear">NewYear
<option value="JimmyWHo">JimmyWho
</Select>

<textarea editable="true" placeholder="Craft Post" id="Craft_Post"  rows="4" cols="50"></textarea>

<br>
<input type="hidden" id="id" value="{{ Auth::user()->id }}">

<button class="btn btn-lin">Send</button>
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

