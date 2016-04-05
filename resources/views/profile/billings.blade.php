@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">

<ul class="nav nav-pills">
  <li role="presentation" ><a href="/settings">Settings</a></li>
  <li role="presentation" class="active"><a href="#">Billing</a></li>
</ul>
  
<ul class="nav nav-pills">
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
