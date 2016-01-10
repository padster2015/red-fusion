@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network" MULTIPLE SIZE=5> 
<OPTION VALUE="mushrooms">Facebook 
<OPTION VALUE="greenpeppers">LinkedIn
 <OPTION VALUE="onions">Twitter 
 <OPTION VALUE="tomatoes">Pinterst 
 <OPTION VALUE="olives">SnapChat</SELECT>

<textarea editable="true" placeholder="Craft Post" id="Craft_Post"></textarea>
<button>Send</button>
</form>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

