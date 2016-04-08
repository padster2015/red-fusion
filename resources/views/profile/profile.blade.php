@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    <h2>{{ Auth::user()->Business_name }}</h2>
    	<h3>{{ Auth::user()->name }}</h3>  
      <ul>
      <li><strong>ID :</strong> {{ Auth::user()->id }} </li>
      <li> <strong>email :</strong>{{ Auth::user()->email }} </li>
      <li><strong>created date :</strong>{{ Auth::user()->created_at }}</li>
      <li><strong>updated at :</strong>{{ Auth::user()->updated_at }}</li>
      <li><strong>token :</strong>{{ Auth::user()->remember_token }}</li>
      
</ul>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection

