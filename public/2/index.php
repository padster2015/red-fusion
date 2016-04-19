<?php
	$login_content = "";
	$form_content = "";

	require 'src/config.php';
	require 'src/facebook.php';
	
	$facebook = new Facebook(array(
	  'appId'  => $config['App_ID'],
	  'secret' => $config['App_Secret'],
	  'cookie' => true
	));

	ini_set("display_errors",1);

	if(isset($_GET['fbTrue']))
	{
		$token_url = "https://graph.facebook.com/oauth/access_token?"
		. "client_id=".$config['App_ID']."&redirect_uri=" . urlencode($config['callback_url'])
		. "&client_secret=".$config['App_Secret']."&code=" . $_GET['code'];
		
		$response = file_get_contents($token_url);
		$params = null;
		parse_str($response, $params);

		$graph_url = "https://graph.facebook.com/me/posts?access_token=" 
			. $params['access_token']."&limit=25";
			$_SESSION['token'] = $params['access_token'];
		$user = json_decode(file_get_contents($graph_url));

		$user_data = json_decode(json_encode($user), True);

		$login_content = '<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">';
		$login_content .= '<a href="index.php?logout=1&tocken='.$params['access_token'].'"><button type="submit" class="templatemo-blue-button width-100">Logout</button></a>';
		$login_content .= '</div>';
	}
	else
	{

		$login_content = '<div class="templatemo-content-widget templatemo-login-widget templatemo-register-widget white-bg">';
		$login_content .= '<a href="https://www.facebook.com/dialog/oauth?client_id='.$config['App_ID'].'&redirect_uri='.$config['callback_url'].'&scope=user_posts,email,user_likes,publish_actions'.'"><button type="submit" class="templatemo-blue-button width-100">Facebook Login</button></a>';
		$login_content .= '</div>';
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Facebook Post</title>
    <meta name="description" content="Get Post From Facebook Profile Using Free Tools.">
    <meta name="author" content="Jaydip Lila">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
  </head>
  <body>
    <div class="templatemo-flex-row">
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-content-container">
		  <?php echo $login_content; ?>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-md-12 white-bg templatemo-content-widget">
				<?php
					$pst_cnt = 1;
					foreach($user_data['data'] as $use_dt)
					{
						if($use_dt['message'] != '' || $use_dt['story'] != '')
						{
							?>	
							<div class="templatemo-content-widget <?php echo $pst_cnt%2==0 ? 'light-gray' : 'orange'; ?>-bg col-md-6" style="<?php echo $pst_cnt%2==0 ? ' margin-right: 10%;float: right;' : 'margin-left: 10%;'; ?>">
        		        		<i class="fa fa-times"></i>                
			                	<div class="media">
			                	  <div class="media-body">
        	        			    <h2 class="media-heading text-uppercase"></h2>
				                    <p><?php echo $use_dt['message'] == '' ? $use_dt['story'] == '' ? '' : $use_dt['story'] : $use_dt['message'] ; ?></p>  
                				  </div>        
				                </div>                
				              </div>
							<?php
							$pst_cnt++;
						}
					}
				?>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>

  </body>
</html>