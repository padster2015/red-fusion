@extends('layouts.app')

@section('content')

<div class="container-fluid">


<ul class="nav nav-tabs nav-justified">
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
  </ul>
  
<ul class="nav nav-tabs nav-justified">
  <div class="row">
    <div class="col-sm-12">

    <h3> Billing and Payment </h3><br>
    <h4> Settings </h4>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="FQD58QDFSCPWC">
<table>
<tr><td><input type="hidden" name="on0" value="Payment Options">Payment Options</td></tr><tr><td><select name="os0">
  <option value="Monthly">Monthly : $50.00 USD - monthly</option>
  <option value="Yearly">Yearly : $500.00 USD - yearly</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

    </div>
    </div>
  </ul>
@endsection
