<?php
	session_start();
	
	require 'src/config.php';
	require 'src/facebook.php';
	
	// Create our Application instance (replace this with your appId and secret).
	$facebook = new Facebook(array(
		'appId'  => $config['App_ID'],
		'secret' => $config['App_Secret'],
		'cookie' => true
	));
	
	ini_set("display_errors",1);
	
	if(isset($_GET['typ']) && !empty($_GET['typ']) && $_GET['typ'] == "logout")
	{
		session_destroy();
		header('Location:index.php');
	}
	if(isset($_POST['frm_submit']))
	{
		if($_POST['ststs'] != "")
		{
			if($_POST['dt'] != "")
			{
				mysql_query("insert into post_details(uid,ststs,postDtTm) values(".$_SESSION['usrId'].",'".$_POST['ststs']."','".$_POST['dt']."')");
			}
		}
		header("location:index.php");
	}
	if(isset($_GET['fbTrue']) && !empty($_GET['fbTrue']) && $_GET['fbTrue'] == 'true')
	{
		$token_url = "https://graph.facebook.com/oauth/access_token?". "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url']). "&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];
		
		$response = file_get_contents($token_url);
		$params = null;
		parse_str($response, $params);

		$graph_url = "https://graph.facebook.com/me?access_token=" . $params['access_token'];
		$_SESSION['usrTkn'] = $params['access_token'];
		$user = json_decode(file_get_contents($graph_url),true);
		
		//$urid = $facebook->getUser();
		$urid = $user['id'];
		$_SESSION['usrId'] = $urid;
		
		$sel2 = "select id from user_details where usrId=".$urid;
		$res2 = mysql_query($sel2);
		if(mysql_num_rows($res2) > 0)
		{
			mysql_query("update user_details set accTkn='".$params['access_token']."' where usrId=".$urid);
		}
		else
		{
			mysql_query("insert into user_details(usrId,accTkn) values(".$urid.",'".$params['access_token']."')");
		}
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Facebook Shedual Post - Dashboard</title>
    <meta name="description" content="Post on facebook at your time">
    <meta name="author" content="Jaydip Lila">
	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="css/DateTimePicker.css" />
	
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/DateTimePicker.js"></script>
  </head>
  <body>	
    <div class="templatemo-flex-row">
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
                <li style="float:left;"><h3>Facebook Post</h3></li>
                <li style="float:right;"><b>Server Time :</b> <span id="srvr_time">20/04/2016 10:11:12 AM</span></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-1">
              <h2 class="templatemo-inline-block">Add Post</h2><hr>            
			  <div class="templatemo-flex-row flex-content-row">
				<?php if(isset($_SESSION['usrId'])) { ?>
					<form action="index.php" method="post" class="templatemo-login-form">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-envelope fa-fw" style="font-size: 18px;"></i></div>
								<textarea id="ststs" name="ststs" class="form-control" placeholder="Write your status here....." rows="6"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-calendar fa-fw" style="font-size: 18px;"></i>
								</div>
								<input data-field="datetime" data-format="yyyy-MM-dd hh:mm:ss" type="text" id="dt" name="dt" class="form-control" placeholder=" yyyy / MM / dd hh : mm : ss" rows="6"></input>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" name="frm_submit" class="templatemo-blue-button width-100">Add Status</button>
						</div>
					</form>
				<?php } ?>
			  </div>
            </div>
			<div id="dtBox"></div>
            <div class="templatemo-content-widget white-bg col-2">
				<h2 class="templatemo-inline-block">Post Listing</h2>
				<?php if(isset($_SESSION['usrId']) && !empty($_SESSION['usrId'])) { ?>
					<a href="index.php?typ=logout" style="float:right;margin: -6px 0 0px 0px;"><button class="templatemo-blue-button" style="background-color: #3A87B5 !important;">Logout</button></a>
				<?php } else { ?>
					<a href="https://www.facebook.com/dialog/oauth?client_id=<?php echo $config['App_ID'].'&redirect_uri='.$config['callback_url'].'&scope=publish_actions'; ?>" style="float:right;margin: -6px 0 0px 0px;"><button class="templatemo-blue-button" style="background-color: #3A87B5 !important;">Login with facebook</button></a>
				<?php } ?>
			  <hr>            
			  <div class="templatemo-flex-row flex-content-row">
				<div class="col-1">
				<?php
					if(isset($_SESSION['usrId']))
					{
						$sel = "select * from post_details where uid=".$_SESSION['usrId'];
						$res = mysql_query($sel);
						if(mysql_num_rows($res) > 0)
						{
							$cnt = 0;
							While($row = mysql_fetch_array($res))
							{
								?>
								<div class="templatemo-content-widget <?php echo $cnt%2==0 ? 'orange' : 'syan'; ?>-bg">
									<a href="delete_post.php?pId=<?php echo $row['id']; ?>"<i class="fa fa-times"></i></a>
									<div class="media">
									  <div class="media-body">
										<h4 class="media-heading text-uppercase"><?php echo "Post At : ".$row['postDtTm']; ?></h4>
										<p><?php echo nl2br($row['ststs']); ?></p>  
										<p style="text-align:right;margin: 6px 0 -3px 0;"><?php echo "Added At : ".$row['postDtTm']; ?></p>
									  </div>
									</div>                
								</div>
								<?php
								$cnt++;
							}
						}
					}
				?>
				</div>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://www.google.com/jsapi"></script>
	<script>
		$(document).ready(function(){ 
			$("#dtBox").DateTimePicker();
		});
		var d = new Date();
		function two_digits(number) {
			return (number < 10 ? '0' : '') + number
		}
		function get_date_time()
		{
			d = new Date();
			$("#srvr_time").text(d.getFullYear()+"/"+two_digits(d.getMonth())+"/"+two_digits(d.getDate())+" "+two_digits(d.getHours())+":"+two_digits(d.getMinutes())+":"+two_digits(d.getSeconds()));
		}
		setInterval(get_date_time, 100);
    </script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>

  </body>
</html>