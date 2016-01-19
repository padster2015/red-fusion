<!DOCTYPE html>
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
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
font-family: 'Work Sans' , sans-serif;
font-weight: 200 !important;
background-color:#22313F;
color:#FFF;
        }
        h1{
            font-family: 'Work Sans' , sans-serif !important;
font-weight:200 !important;

        }

        .fa-btn {
            margin-right: 6px;
        }

        .api-edits{
            width:500px;
            background-color:#fffdbf;
            padding:4px 4px 4px 20px;
            border-radius:5px;
        }
.circlefacts{

border-radius:100%; background-color:#2ecc71; color:#FFF; width:200px; height:200px; padding-top:36px; margin-left:2%; margin-right:10%

}

        li
{
    list-style-type: none;
}
    </style>
<!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/modules/drilldown.js"></script>


</head>
<body id="app-layout">
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


   <script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("http://www.w3schools.com/angular/customers.php").then(function(response) {
        $scope.myData = response.data.records;
    });
});
</script> 
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
