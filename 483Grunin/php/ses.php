<?php
	session_start();
	$user = selectOne(table: '1', ['id' => $id];
	$_SESSION['id'] = $user['id'];
	echo $user;
?>