<?php
	session_start();
	require 'src/config.php';
	
	$del = "delete from post_details where id=".$_GET['pId']." AND uid=".$_SESSION['usrId'];
	mysql_query($del);
	
	header("location:index.php");
?>