<!DOCTYPE html>
<?php
	session_start();
?>
<html lang="ru">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title> bootstrap </title>
            <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header> <div class="container-fluid"> 
                    <div class="row">
                        <div class="col"> 
                            <nav class="nav">
                                <a class="nav-link active" aria-current="page" href="index.php">Glavnaya</a>
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
								<a class="nav-link active" href="profile.php">Profile</a>
                            </nav>
                    </div>
			<div class="col"> 
                            <nav class="nav justify-content-end">
                                <a class="nav-link" href="reg.php">Register</a>
                                <a class="nav-link" href="login.php">Login</a>
                            </nav>
                    </div>
                    <div class="row">
                        <div class="col"> 
                            <img src="http://pravdahim.ru/wp-content/uploads/2018/10/7.jpg" alt="альтернативный текст" class="img img-fluid">
                        </div>
                    </div>
                </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-3"> <p> <ul class="list-group">
                                        <li class="list-group-item"> <a href="#">01.03.2021 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.02.2021 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.01.2021 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.12.2020 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.11.2020 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.10/2020 </a> </li>
                                        <li class="list-group-item"> <a href="#">01.09.2020 </a> </li>
                                        </ul> </p>
                </div>