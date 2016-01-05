@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }} Settings</h3>  
      <ul>
      <li><i class="fa fa-link"></i><strong>Affiliate :</strong> {{ Auth::user()->Affiliate }} </li>
      <li><i class="fa fa-money"></i><strong>Deals :</strong> {{ Auth::user()->Deals }} </li>
      <li><i class="fa fa-envelope-o"></i><strong>Email :</strong> {{ Auth::user()->Email }} </li>
      <li><i class="fa fa-facebook-official"></i><strong>Facebook :</strong> {{ Auth::user()->Facebook }} </li>
      <li><i class="fa fa-google"></i><strong>GA :</strong> {{ Auth::user()->GA }} </li>
      <li><i class="fa fa-google-plus"></i><strong>Googleplus :</strong> {{ Auth::user()->Googleplus }} </li>
      <li><i class="fa fa-linkedin"></i><strong>linkedin :</strong> {{ Auth::user()->linkedin }} </li>
      <li><i class="fa fa-search"></i><strong>PaidSearch :</strong> {{ Auth::user()->PaidSearch }} </li>
      <li><i class="fa fa-pinterest-p"></i><strong>Pinterest :</strong> {{ Auth::user()->Pinterest }} </li>
      <li><i class="fa fa-camera"></i><strong>SnapChat :</strong> {{ Auth::user()->SnapChat }} </li>
      <li><i class="fa fa-twitter"></i><strong>Twitter :</strong> {{ Auth::user()->Twitter }} </li>
      <li><i class="fa fa-youtube"></i><strong>Youtube :</strong> {{ Auth::user()->Youtube }} </li>

      
</ul>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection
