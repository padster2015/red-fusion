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

    <style>
        body {
font-family: 'Work Sans' , sans-serif;
font-weight:200 !important;
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


        li
{
    list-style-type: none;
}



.back_link {
    display: block;
    text-decoration: none;
    margin-top: 70px;
    margin-bottom: 70px;
    text-align: center;
    font-family:'opensans-regular', Helvetica, Arial, sans-serif;
    color: #515860;
    font-size: 16px;
}
.back_link .back_arrow_icon {
    vertical-align: middle;
    margin-right: 4px;
}
/*  form steps  */
 .steps {
    max-width: 500px;
    height: auto;
    margin: 0 auto;
    padding: 40px;
    background: #ffffff;
    border: 1px solid #e1e8f2;
    position: relative;
    text-align: center;
}
.steps:after {
    content:"";
    display: block;
    width: 16px;
    height: 8px;
    position: absolute;
    bottom: -8px;
    left: 50%;
    margin-left: -8px;
}
.steps ul li {
    width: 100%;
    list-style: none;
    display: none;
    float: left;
}
.steps ul li.current_step {
    display: block;
}
.steps ul li .text_field {
    display: block;
    width: 100%;
    padding: 15px 20px;
    border: 1px solid #d0d7e1;
    font-family:"opensans-regular", Helvetica, Arial, sans-serif;
    font-size: 13px;
    color: #515860;
    letter-spacing: 1px;
    background: #ffffff;
    margin: 0 auto;
    outline: none;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    -ms-border-radius: 2px;
    -o-border-radius: 2px;
    border-radius: 2px;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
}
.steps ul li.error .text_field {
    border: 1px solid #CE8349;
}
.steps .form_title {
    display: inline-block;
    text-align: center;
    margin-bottom: 20px;
    font-family:'opensans-bold', Helvetica, Arial, sans-serif;
    color: #515860;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 1px;
}
.steps .note {
    display: inline-block;
    font-family:'opensans-regular', Helvetica, Arial, sans-serif;
    color: #c7d3e1;
    font-size: 12px;
    margin-top: 10px;
    width: 100%;
    text-align: center;
}
/*  steps navigation  */
 .navigation_container ul {
    display: inline-block;
    margin-top: 50px;
}
.navigation_container li {
    list-style: none;
    position: relative;
    display: block;
    width: 10px;
    height: 10px;
    float: left;
    margin: 24px 10px 0 0;
    background: #d8e0eb;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    -o-border-radius: 100px;
    border-radius: 100px;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
}
.navigation_container li:first-child {
    margin-left: 0;
}
.navigation_container .current_nav {
    width: 60px;
    height: 60px;
    position: relative;
    margin: 0 15px 0 5px;
    top: -1px;
    background: #6DC097;
    border: 4px solid #FFF;
    cursor: pointer;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
}
.navigation_container .valid {
    background: #6DC097!important;
}
.navigation_container .error {
    background: #CE8349!important;
    -webkit-animation: bounce_btn .5s linear;
    -moz-animation: bounce_btn .5s linear;
    -ms-animation: bounce_btn .5s linear;
    -o-animation: bounce_btn .5s linear;
    animation: bounce_btn .5s linear;
}
/*  SVG icons css  */
 .animate {
    -webkit-animation: bounce_btn .5s linear;
    -moz-animation: bounce_btn .5s linear;
    -ms-animation: bounce_btn .5s linear;
    -o-animation: bounce_btn .5s linear;
    animation: bounce_btn .5s linear;
}
.icon {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -12px;
    margin-top: -12px;
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
}
.arrow {
    opacity: 0;
}
.current_nav .arrow {
    opacity: 1;
    display: block!important;
}
.step_nb {
    display: none;
    width: 50px;
    height: 50px;
    font-family:"opensans-regular", Helvetica, Arial, sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
    color: #515860;
    background: #F5F5F5;
    margin: 0 auto 30px auto;
    line-height: 50px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    -o-border-radius: 100px;
    border-radius: 100px;
}
/*  bounce effect animation  */
 @-webkit-keyframes bounce_btn {
    0% {
        transform: scale(1);
        -webkit-transform: scale(1);
    }
    30% {
        transform: scale(1.2);
        -webkit-transform: scale(1.2);
    }
    60% {
        transform: scale(.95);
        -webkit-transform: scale(.95);
    }
    100% {
        transform: scale(1);
        -webkit-transform: scale(1);
    }
}
@keyframes bounce_btn {
    0% {
        transform: scale(1);
        -webkit-transform: scale(1);
    }
    30% {
        transform: scale(1.2);
        -webkit-transform: scale(1.2);
    }
    60% {
        transform: scale(.95);
        -webkit-transform: scale(.95);
    }
    100% {
        transform: scale(1);
        -webkit-transform: scale(1);
    }
}
/*  reponsive css  */
 @media (max-width : 750px) {
    .navigation_container ul {
        display: block;
        text-align: center;
        margin-left: 0!important;
    }
    .navigation_container li {
        display: none;
    }
    .navigation_container li.current_nav {
        display: inline-block;
        float: none;
        margin: 0;
    }
    .wrapper {
        max-width:660px;
        margin: 50px 20px;
    }
    .step_nb {
        display: block;
    }
}
    </style>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/velocity/1.2.2/velocity.min.js"></script>
<script src="https://raw.githubusercontent.com/adobe-webplatform/Snap.svg/master/dist/snap.svg-min.js"></script>
<script src="app/js/slide.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



   <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '611359388994894',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>
    


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

            <fb:login-button scope="public_profile,email,user_birthday,publish_actions,read_insights,publish_pages,publish_pages" onlogin="checkLoginState();">
</fb:login-button>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
                        @if (Auth::guest())
        <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a></li>
        @else
        <li><a href="{{ url('/dashboard') }}"> <i class="fa fa-line-chart"></i> Reporting</a></li>
        <li><a href="{{ url('/budget') }}"> <i class="fa fa-money"></i> Budget</a></li> 
        <li><a href="{{ url('/messaging') }}"> <i class="fa fa-envelope-o"></i> Messaging</a></li>
                <li><a href="{{ url('/help') }}"> <i class="fa fa-question"></i> Help</a></li>
@endif
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
