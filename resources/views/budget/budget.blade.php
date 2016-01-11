@extends('layouts.app-nocharts')

@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
<form action="deliver()">
<SELECT NAME="Network"> 
<OPTION VALUE="Small">Small</OPTION> 
<OPTION VALUE="medium">medium</OPTION>
 <OPTION VALUE="large">large</OPTION>
 <OPTION VALUE="aggressive">aggressive </OPTION>
 <OPTION VALUE="advisory">advisory</OPTION>
 </SELECT>

<button>Send</button>
</form>
    </div>

<h1> Current Budget</h1>
<li><strong>facebook:$5000</li> 
<li><strong>twitter:$5000</li> 
<li><strong>affiliate:$10000</li> 
<li><strong>display:$2000</li> 
<li><strong>offline:$10000</li> 
<li><strong>total:$30000</li> 
  </div><!--/row-->
  <hr>
  
<h1> aggressive Budget</h1>
<li><strong>facebook:$8000</li> 
<li><strong>twitter:$5000</li> 
<li><strong>affiliate:$20000</li> 
<li><strong>display:$10000</li> 
<li><strong>offline:$1000</li> 
<li><strong>total:$5000</li> 

  </div><!--/row-->
<hr>

<h1> aggressive roi</h1>
<li><strong>facebook:$2000</li> 
<li><strong>twitter:$1000</li> 
<li><strong>affiliate:$30000</li> 
<li><strong>display:$100</li> 
<li><strong>offline:$5000</li> 
<li><strong>total:$11500</li> 

  </div><!--/row-->
<hr>


@endsection

