<?php
	$pas1 = filter_var(trim($_POST['pas']), 
	FILTER_SANITIZE_STRING);
	
	//$pas2 = filter_var(trim($_POST['pas']), FILTER_SANITIZE_STRING);
	
	$pas1 = md5($pas1."trye653");
	
	$pas2 = md5($pas2."trye653");
	
	$mysql = new mysqli('localhost','root','','bd');
	
	$result = $mysql->query("UPDATE 1 SET pas = '$pas2' WHERE `pas` = '$pas1'");

	//$result = $mysql->query("UPDATE 1 SET pas = '$pas2' WHERE pas = '$pas1'");
	
	$mysql->close();

	header('Location: ../profile.php');
?>