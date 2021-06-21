<?php session_start();
	
	$title = filter_var(trim($_POST['title']), 
	FILTER_SANITIZE_STRING);

	$img = filter_var(trim($_POST['img']), 
	FILTER_SANITIZE_STRING);

	$text = filter_var(trim($_POST['text']), 
	FILTER_SANITIZE_STRING);
	
	$mysql = new mysqli('localhost','root','','bd');

	$mysql->query("INSERT INTO `post` (`title`,`img`,`text`)
	VALUES('$title','$img','$text')");

	$mysql->close();
	
	// Путь загрузки
	$path = 'C:\xampp\htdocs\483Grunin\img\\';

 // Загрузка файла
	!@copy($_FILES['img']['tmp_name'], $path . $_FILES['img']['name']);

	header('Location: ../index.html');	
?>