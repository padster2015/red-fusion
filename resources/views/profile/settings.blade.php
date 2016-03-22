@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Settings</a></li>
  <li role="presentation"><a href="/settings/billing">Billing</a></li>
</ul>

<ul class="nav nav-pills">
  <div class="row">
    <div class="col-sm-12">
    	<h3>{{ Auth::user()->name }}</h3> <br> <h4>Settings</h4>  
      <form action="losting">
      <ul>
      <li><i class="fa fa-link"></i> &nbsp; <strong>Affiliate Api Key:</strong><textarea class="api-edits" contenteditable="true"> {{ Auth::user()->Affiliate_api }} </textarea></li>
      <li><i class="fa fa-money"></i> &nbsp; <strong>Deals Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->Deals_api }}</textarea> </li>
      <li><i class="fa fa-envelope-o"> &nbsp; </i><strong>Email Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->Email_api }} </textarea></li>
      <li><i class="fa fa-facebook-official"></i> &nbsp; <strong>Facebook Api Key:</strong> <textarea class="api-edits"  contenteditable="true"> {{ Auth::user()->Facebook_api }}</textarea> 

  
    
    <fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>


</li>
      <li><i class="fa fa-google"></i> &nbsp; <strong>Google Analytics Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->GA_api }}</textarea> </li>
      <li><i class="fa fa-google-plus"></i> &nbsp; <strong>Googleplus Api Key:</strong><textarea class="api-edits" contenteditable="true">  {{ Auth::user()->Googleplus_api }}</textarea> </li>
      <li><i class="fa fa-linkedin"></i> &nbsp; <strong>linkedin Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->linkedin_api }} </textarea></li>
      <li><i class="fa fa-search"></i> &nbsp; <strong>PaidSearch Api Key :</strong><textarea class="api-edits" contenteditable="true">  {{ Auth::user()->PaidSearch_api }} </textarea></li>
      <li><i class="fa fa-pinterest-p"></i> &nbsp; <strong>Pinterest Api Key :</strong><textarea class="api-edits" contenteditable="true">  {{ Auth::user()->Pinterest_api }}</textarea> </li>
      <li><i class="fa fa-camera"></i> &nbsp; <strong>SnapChat Api Key :</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->SnapChat_api }} </textarea></li>
      <li><i class="fa fa-twitter"></i> &nbsp; <strong>Twitter Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->Twitter_api }} </textarea></li>
      <li><i class="fa fa-youtube"></i> &nbsp; <strong>Youtube Api Key:</strong> <textarea class="api-edits" contenteditable="true"> {{ Auth::user()->Youtube_api }}</textarea> </li>
</ul>
<button>Update</button>
</form>
    </div>
  </div><!--/row-->
  </ul>
@endsection
