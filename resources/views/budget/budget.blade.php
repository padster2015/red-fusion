@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network" MULTIPLE SIZE=5> 
<OPTION VALUE="Small">Small 
<OPTION VALUE="medium">medium
 <OPTION VALUE="large">large
 <OPTION VALUE="aggressive">aggressive 
 <OPTION VALUE="advisory">advisory</SELECT>

<textarea editable="true" placeholder="Craft Post" id="Craft_Post"></textarea>
<button>Send</button>
</form>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

