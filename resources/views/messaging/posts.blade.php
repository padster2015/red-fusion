@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network" MULTIPLE SIZE=5> 
<OPTION VALUE="Facebook">Facebook></OPTION>
<OPTION VALUE="LinkedIn">LinkedIn></OPTION>
 <OPTION VALUE="Twitter">Twitter></OPTION>
 <OPTION VALUE="Pinterst">Pinterst></OPTION> 
 <OPTION VALUE="olives">SnapChat></OPTION>
 </SELECT>

<textarea editable="true" placeholder="Craft Post" id="Craft_Post"></textarea>
<button>Send</button>
</form>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

