<?php session_start();

$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);

$pas = filter_var(trim($_POST['pas']), 
FILTER_SANITIZE_STRING);

$pas = md5($pas."trye653");

$mysql = new mysqli('localhost','root','','bd');

$result = $mysql->query("SELECT * FROM `1` WHERE `name` = '$name' AND `pas` = '$pas'");

$user = $result->fetch_assoc(); // Конвертируем в массив

if(is_null($user) || count($user) == 0){
	echo "Такой пользователь не найден. <a href='../login.html'>Назад</a>";
	exit();
}

setcookie('user', $user['name'], time() + 300, "/");

$mysql->close();

header('Location: ../profile.php');
?>