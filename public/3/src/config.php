<?php
	$config['callback_url']         =   'http://prajapativivah.com/jaydip/FB/3/index.php?fbTrue=true'; //   /?fbTrue=true allow you to code process section.

	//Facebook configuration
	$config['App_ID']      =   '505936812947160';
	$config['App_Secret']  =   '4962457c27828ad4aef33c09d3f66db6'; 

	$con = mysql_connect("localhost","root","");
	$db = mysql_select_db("facebook_spost",$con);
?>