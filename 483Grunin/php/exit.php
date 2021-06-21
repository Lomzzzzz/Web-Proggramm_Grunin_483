<?php session_start();
	setcookie('user', $user['name'], time() - 3000, "/");
	header('Location: ../login.html');
?>