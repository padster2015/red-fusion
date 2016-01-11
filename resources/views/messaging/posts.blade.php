@extends('layouts.app-nocharts')

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

<textarea id="textpost" editable="true" placeholder="Craft Post" id="Craft_Post"  rows="4" cols="144"><i class="fa fa-hashtag"></i> 
  
<Select NAME="HashTags">
<option value="Sale">Sale
<option value="Summer">Summer
<option value="LGRW">LGRW
<option value="BlackFriday">BlackFriday
<option value="NewYear">NewYear
<option value="JimmyWHo">JimmyWho
</Select>

<button>Send</button>
</form>


<div id="textarea_feedback"></div>
<script>

$(document).ready(function() {
    var text_max = 99;
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
  
@endsection

