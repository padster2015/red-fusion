@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network" MULTIPLE SIZE=6> 
<OPTION VALUE="Facebook">Facebook 
<OPTION VALUE="LinkedIn">LinkedIn
 <OPTION VALUE="Twitter">Twitter 
 <OPTION VALUE="Pinterst">Pinterst 
 <OPTION VALUE="olives">SnapChat
 <OPTION VALUE="olives">All

 </SELECT>
<br>

<textarea id="textpost" editable="true" placeholder="Craft Post" id="Craft_Post"  rows="4" cols="50"></textarea>
<br># 
<i class="fa fa-hashtag"></i>
<Select NAME="HashTags">
<option value="Sale">Sale
<option value="Summer">Summer
<option value="LGRW">LGRW
<option value="BlackFriday">BlackFriday
<option value="NewYear">NewYear
<option value="JimmyWHo">JimmyWho
</Select>
<br>

<button>Send</button>
</form>


<div id="textarea_feedback"></div>
<script>

$(document).ready(function() {
    var text_max = 144;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textpost').keyup(function() {
        var text_length = $('#textpost').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});

</script>


    </div>
  </div><!--/row-->
  <hr>
  




<div class="app-content" id="data-items" ng-app="" ng-controller="customersController"> 
       <div class="grid" >   
         <div class="col-sm-10">
          <!-- Language Flag -->  
            </div>
            
<!--<div class="alert alert-success" id="eventsResult">
    Here is the result of success or fail
</div>-->

<button id="btn-add" class="btn btn-primary btn-xs">Add New Word</button>
<table id="example2-grid" data-toggle="table"
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
       data-url="/api/v1/Messages/show/50">
    <thead>
    <tr>
        <th data-field="ID" data-sortable="true" data-switchable="false"><strong>ID</strong></th>
        <th data-field="message">English Word</th>
                <th data-field="platform" data-editable="true">Brazilian Portuguese</th>
        <th data-field="created at" data-editable="true">French</th>
        <th data-field="sent at" data-editable="true">German</th>
       
    </tr>
    </thead>
</table>

            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add new translation</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmEmployees" class="form-horizontal" action="" id='addwordmodal'>

                                        <textarea autofocus wrap="hard" rows="4" cols="75"  id="word" name="word" required placeholder="Describe yourself here..."> </textarea>
                                    
                                                                
                                        <input type="dropdown" class="form-control" id="platform" name="platform" placeholder="Enter Platform " value="1" >
                                                                        
                                        <input type="dropdown" class="form-control" id="product" name="product" placeholder="Product Name" value="1" >
                                  
                                        <input type="submit" class="btn btn-primary" id="btn-save" value="Add Word">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      
  </div>
 </div>
 </div>
 </div>

<!--send data to api -->
// save message
 <script>
            function AddUser(FirstName,LastName)
            {
                
                
                  var messagein = document.getElementById('message').value;
                  var platformin = document.getElementById('platform').value;
                  


                $.ajax({
                       type : 'POST',
                       url : '/api/v1/Message/save',
                       data: {'message':messagein, 'platform':platformin success : function (d)
                       {
                       alert(myNewTitle);
                       },
                       })
                
            }
        
         </script>

<script>
$( "#btn-save" ).click(function() {
  $( "#response" ).toggle("slow");
});

$(".alert-message").alert();
window.setTimeout(function() { $(".alert-message").alert('close'); }, 2000);

</script>








@endsection

