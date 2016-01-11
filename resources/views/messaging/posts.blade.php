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

<textarea editable="true" placeholder="Craft Post" id="Craft_Post"></textarea>

<i class="fa fa-hashtag"></i> 
<select>
  

<select>
<option>Sale</option>
<option>Summer</option>
<option>LGRW</option>
<option>BlackFriday</option>
<option>NewYear</option>
<option>JimmyWho</option>
</select>

<button>Send</button>
</form>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

