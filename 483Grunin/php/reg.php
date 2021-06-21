<?php session_start();

$name = filter_var(trim($_POST['name']), 
FILTER_SANITIZE_STRING);

$email = filter_var(trim($_POST['email']), 
FILTER_SANITIZE_STRING);

$pas = filter_var(trim($_POST['pas']), 
FILTER_SANITIZE_STRING);

$pas = md5($pas."trye653");

$mysql = new mysqli('localhost','root','','bd');

$mysql->query("INSERT INTO `1` (`email`,`name`,`pas`)
VALUES('$email','$name','$pas')");

$mysql->close();

header('Location: ../index.html');

?>



