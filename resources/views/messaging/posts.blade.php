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
  

<Select>
<option value="Sale">Sale
<option value="Summer">Summer
<optionvalue="LGRW">LGRW
<option value="BlackFriday">BlackFriday
<option value="NewYear">NewYear<
<option value="JimmyWHo">JimmyWho</option>
</select>

<button>Send</button>
</form>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

