<?php
session_start();
$login_content = "";
$form_content = "";

require 'src/config.php';
require 'src/facebook.php';
// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => $config['App_ID'],
  'secret' => $config['App_Secret'],
  'cookie' => true
));

ini_set("display_errors",1);

if(isset($_POST['status']))
{
        $publish = $facebook->api('/me/feed', 'post',
        array('access_token' => $_SESSION['token'],'message'=>$_POST['status'],
        'from' => $config['App_ID']
        ));
        $message = 'Status updated.<br>';
        $extra = "<a href='index.php?logout=1&tocken=".$params['access_token']."'>Logout</a><br>";
		$form_content = '<form action="index.php" method="post" class="templatemo-login-form">';
		$form_content .= '<div class="form-group">';
		$form_content .= '<div class="input-group">';
		$form_content .= '<div class="input-group-addon"><i class="fa fa-envelope fa-fw" style="font-size: 18px;"></i></div>';
		$form_content .= '<textarea id="status" name="status" class="form-control" placeholder="Write your status here....." rows="6"></textarea>';
		$form_content .= '</div>';
		$form_content .= '</div>';
		$form_content .= '<div class="form-group">';
		$form_content .= '<button type="submit" class="templatemo-blue-button width-100">Upload Status</button>';
		$form_content .= '</div>';
		$form_content .= '</form>';
	
		$login_content = '<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">';
		$login_content .= '<a href="index.php?logout=1&tocken='.$params['access_token'].'"><button type="submit" class="templatemo-blue-button width-100">Logout</button></a>';
		$login_content .= '</div>';
}
elseif(isset($_GET['fbTrue']))
{
    if($_GET['fbTrue'] == 'true11' )
    {
        $token_url = "https://graph.facebook.com/oauth/access_token?"
        . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
        . "11&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];
    }
    else
    {
        $token_url = "https://graph.facebook.com/oauth/access_token?"
        . "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
        . "&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];
    }
    
    $response = file_get_contents($token_url);
    $params = null;
    parse_str($response, $params);

    $graph_url = "https://graph.facebook.com/me?access_token=" 
        . $params['access_token'];
        $_SESSION['token'] = $params['access_token'];
    $user = json_decode(file_get_contents($graph_url));
    /*if($_GET['fbTrue'] == 'true11' )
    {
        $publish = $facebook->api('/me/feed', 'post',
        array('access_token' => $params['access_token'],'message'=>'published by Demo.',
        'from' => $config['App_ID']
        ));
        $message = 'Default status updated.<br>';
    }*/
	$form_content = '<form action="index.php" method="post" class="templatemo-login-form">';
	$form_content .= '<div class="form-group">';
	$form_content .= '<div class="input-group">';
	$form_content .= '<div class="input-group-addon"><i class="fa fa-envelope fa-fw" style="font-size: 18px;"></i></div>';
	$form_content .= '<textarea id="status" name="status" class="form-control" placeholder="Write your status here....." rows="6"></textarea>';
	$form_content .= '</div>';
	$form_content .= '</div>';
	$form_content .= '<div class="form-group">';
	$form_content .= '<button type="submit" class="templatemo-blue-button width-100">Upload Status</button>';
	$form_content .= '</div>';
	$form_content .= '</form>';
	
	$login_content = '<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">';
	$login_content .= '<a href="index.php?logout=1&tocken='.$params['access_token'].'"><button type="submit" class="templatemo-blue-button width-100">Logout</button></a>';
	$login_content .= '</div>';
}
else
{
	$form_content = '<form action="index.php" method="post" class="templatemo-login-form">';
	$form_content .= '<div class="form-group">';
	$form_content .= '<div class="input-group">';
	$form_content .= '<div class="input-group-addon"><i class="fa fa-envelope fa-fw" style="font-size: 18px;"></i></div>';
	$form_content .= '<textarea id="status" name="status" class="form-control" placeholder="Write your status here....." rows="6" disabled></textarea>';
	$form_content .= '</div>';
	$form_content .= '</div>';
	$form_content .= '<div class="form-group">';
	$form_content .= '<button type="submit" class="templatemo-blue-button width-100" disabled>Upload Status</button>';
	$form_content .= '</div>';
	$form_content .= '</form>';

	$login_content = '<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">';
	$login_content .= '<p>Not a login user yet? <strong></p><br />';
	$login_content .= '';
	$login_content .= '</div>';
}


$title = ""; 
$heading = "";
?>















<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">  
	    <title>Facebook Add</title>
        <meta name="description" content="">
        <meta name="author" content="templatemo">
        <!-- 
        Visual Admin Template
        http://www.templatemo.com/preview/templatemo_455_visual_admin
        -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/templatemo-style.css" rel="stylesheet">
	    
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body class="light-gray-bg">
		<div class="templatemo-content-widget templatemo-login-widget white-bg">
			<header class="text-center">
	          <h1>Facebook</h1>
	        </header>
	        <?php echo $form_content; ?>
		</div>
		<?php echo $login_content; ?>
	</body>
</html>