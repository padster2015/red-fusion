
    
<!DOCTYPE html>
<!--testing git push and pulls using exec over prev-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Red Fusion v1</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,200,700' rel='stylesheet' type='text/css'>    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

  <link href="app/css/style.css" rel="stylesheet">

<link rel="stylesheet" href="app/css/bootstrap-table.css">
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.0/animate.min.css" type="text/css" rel="stylesheet">-->

<!-- Latest compiled and minified JavaScript -->





<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js"></script>
<script src="https://raw.githubusercontent.com/adobe-webplatform/Snap.svg/master/dist/snap.svg-min.js"></script>
<script src="app/js/slide.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<script src="app/js/count-to.js"></script>
 <link href="app/css/style.css" rel="stylesheet">
<script src="app/js/bootstrap-table.js"></script>



    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/modules/drilldown.js"></script>
<script src="app/js/extensions/sticky-header/bootstrap-table-sticky-header.js"></script>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>













</head>
<body id="app-layout">
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '611359388994894',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
    
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Red Fusion
                </a>
            </div>



            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="{{ url('/dashboard') }}"> <i class="fa fa-line-chart"></i> Reporting</a></li>
        <li><a href="{{ url('/budget') }}"> <i class="fa fa-money"></i> Budget</a></li> 
        <li><a href="{{ url('/messaging') }}"> <i class="fa fa-envelope-o"></i> Messaging</a></li>
                        <li><a href="{{ url('/help') }}"> <i class="fa fa-question"></i> Help</a></li>

    </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            <li class="dropdown">

                            <li><a href="{{ url('/profile') }}"> <i class="fa fa-btn fa-user"></i>Profile</a></li>
                            <li><a href="{{ url('/settings') }}"> <i class="fa fa-btn fa-cog"></i>Settings</a></li>

                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')


   
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    
     
    
</body>
</html>
