@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }}</h3> <br> <h4>Settings</h4>  
      <ul>
      <li><i class="fa fa-link"></i> &nbsp; <strong>Affiliate Api Key:</strong> {{ Auth::user()->Affiliate_api }} </li>
      <li><i class="fa fa-money"></i> &nbsp; <strong>Deals Api Key:</strong> {{ Auth::user()->Deals_api }} </li>
      <li><i class="fa fa-envelope-o"> &nbsp; </i><strong>Email Api Key:</strong> {{ Auth::user()->Email_api }} </li>
      <li><i class="fa fa-facebook-official"></i> &nbsp; <strong>Facebook Api Key:</strong> {{ Auth::user()->Facebook_api }} </li>
      <li><i class="fa fa-google"></i> &nbsp; <strong>Google Analytics Api Key:</strong> {{ Auth::user()->GA_api }} </li>
      <li><i class="fa fa-google-plus"></i> &nbsp; <strong>Googleplus Api Key:</strong> {{ Auth::user()->Googleplus_api }} </li>
      <li><i class="fa fa-linkedin"></i> &nbsp; <strong>linkedin Api Key:</strong> {{ Auth::user()->linkedin_api }} </li>
      <li><i class="fa fa-search"></i> &nbsp; <strong>PaidSearch Api Key :</strong> {{ Auth::user()->PaidSearch_api }} </li>
      <li><i class="fa fa-pinterest-p"></i> &nbsp; <strong>Pinterest Api Key :</strong> {{ Auth::user()->Pinterest_api }} </li>
      <li><i class="fa fa-camera"></i> &nbsp; <strong>SnapChat Api Key :</strong> {{ Auth::user()->SnapChat_api }} </li>
      <li><i class="fa fa-twitter"></i> &nbsp; <strong>Twitter Api Key:</strong> {{ Auth::user()->Twitter_api }} </li>
      <li><i class="fa fa-youtube"></i> &nbsp; <strong>Youtube Api Key:</strong> {{ Auth::user()->Youtube_api }} </li>
</ul>
    </div>
  </div><!--/row-->
  <hr>

  <div class="row">
    <div class="col-sm-12">

    <h3> Billing and Payment </h3><br>
    <h4> Settings </h4>


    </div>
    </div>
  
@endsection
