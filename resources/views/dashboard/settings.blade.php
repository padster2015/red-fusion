@extends('layouts.app')

@section('content')

<div class="container-fluid">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Settings</a></li>
  <li role="presentation"><a href="/settings/billings">Billing</a></li>
</ul>

<ul class="nav nav-pills">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }}</h3> <br> <h4>Settings</h4>  
      <ul>
      <li><i class="fa fa-link"></i> &nbsp; <strong>Affiliate Api Key:</strong><p class="api-edits" contenteditable="true"> {{ Auth::user()->Affiliate_api }} </p></li>
      <li><i class="fa fa-money"></i> &nbsp; <strong>Deals Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->Deals_api }}</p> </li>
      <li><i class="fa fa-envelope-o"> &nbsp; </i><strong>Email Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->Email_api }} </p></li>
      <li><i class="fa fa-facebook-official"></i> &nbsp; <strong>Facebook Api Key:</strong> <p class="api-edits"  contenteditable="true"> {{ Auth::user()->Facebook_api }}</p> </li>
      <li><i class="fa fa-google"></i> &nbsp; <strong>Google Analytics Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->GA_api }}</p> </li>
      <li><i class="fa fa-google-plus"></i> &nbsp; <strong>Googleplus Api Key:</strong><p class="api-edits" contenteditable="true">  {{ Auth::user()->Googleplus_api }}</p> </li>
      <li><i class="fa fa-linkedin"></i> &nbsp; <strong>linkedin Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->linkedin_api }} </p></li>
      <li><i class="fa fa-search"></i> &nbsp; <strong>PaidSearch Api Key :</strong><p class="api-edits" contenteditable="true">  {{ Auth::user()->PaidSearch_api }} </p></li>
      <li><i class="fa fa-pinterest-p"></i> &nbsp; <strong>Pinterest Api Key :</strong><p class="api-edits" contenteditable="true">  {{ Auth::user()->Pinterest_api }}</p> </li>
      <li><i class="fa fa-camera"></i> &nbsp; <strong>SnapChat Api Key :</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->SnapChat_api }} </p></li>
      <li><i class="fa fa-twitter"></i> &nbsp; <strong>Twitter Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->Twitter_api }} </p></li>
      <li><i class="fa fa-youtube"></i> &nbsp; <strong>Youtube Api Key:</strong> <p class="api-edits" contenteditable="true"> {{ Auth::user()->Youtube_api }}</p> </li>
</ul>
<ul class="nav nav-pills">
Billing
</ul>
    </div>
  </div><!--/row-->
  </ul>
@endsection
