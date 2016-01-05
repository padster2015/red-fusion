@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }} Settings</h3>  
      <ul>
      <li><i class="fa fa-link"></i> &nbsp; <strong>Affiliate :</strong> {{ Auth::user()->Affiliate }} </li>
      <li><i class="fa fa-money"></i> &nbsp; <strong>Deals :</strong> {{ Auth::user()->Deals }} </li>
      <li><i class="fa fa-envelope-o"> &nbsp; </i><strong>Email :</strong> {{ Auth::user()->Email }} </li>
      <li><i class="fa fa-facebook-official"></i> &nbsp; <strong>Facebook :</strong> {{ Auth::user()->Facebook }} </li>
      <li><i class="fa fa-google"></i> &nbsp; <strong>GA :</strong> {{ Auth::user()->GA }} </li>
      <li><i class="fa fa-google-plus"></i> &nbsp; <strong>Googleplus :</strong> {{ Auth::user()->Googleplus }} </li>
      <li><i class="fa fa-linkedin"></i> &nbsp; <strong>linkedin :</strong> {{ Auth::user()->linkedin }} </li>
      <li><i class="fa fa-search"></i> &nbsp; <strong>PaidSearch :</strong> {{ Auth::user()->PaidSearch }} </li>
      <li><i class="fa fa-pinterest-p"></i> &nbsp; <strong>Pinterest :</strong> {{ Auth::user()->Pinterest }} </li>
      <li><i class="fa fa-camera"></i> &nbsp; <strong>SnapChat :</strong> {{ Auth::user()->SnapChat }} </li>
      <li><i class="fa fa-twitter"></i> &nbsp; <strong>Twitter :</strong> {{ Auth::user()->Twitter }} </li>
      <li><i class="fa fa-youtube"></i> &nbsp; <strong>Youtube :</strong> {{ Auth::user()->Youtube }} </li>

      
</ul>
    </div>
  </div><!--/row-->
  <hr>
  
@endsection
