<?php
	require 'src/config.php';
	require 'src/facebook.php';
	
	// Create our Application instance (replace this with your appId and secret).
	$facebook = new Facebook(array(
		'appId'  => $config['App_ID'],
		'secret' => $config['App_Secret'],
		'cookie' => true
	));
	
	ini_set("display_errors",1);
	
	$sel = "select p.id,p.ststs,p.postDtTm,u.accTkn from post_details p left join user_details u on (u.usrId = p.uid)";
	$res = mysql_query($sel);
	
	if(mysql_num_rows($res) > 0)
	{
		while($row = mysql_fetch_array($res))
		{
			$curdate=strtotime(date("Y-m-d H:i:s"));
			$mydate=strtotime($row['postDtTm']);

			if($curdate > $mydate)
			{
				$publish = $facebook->api('/me/feed', 'post',array('access_token' => $row['accTkn'],'message'=>$row['ststs'],'from' => $config['App_ID']));
				
				$del = "delete from post_details where id=".$row['id'];
				mysql_query($del);
			}
		}
	}
?>