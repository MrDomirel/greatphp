<?php

include('includes/db.php');

$login = $_GET['login'];
$pass = $_GET['password'];

$count = mysqli_query($db_connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");

if( mysqli_num_rows($count) == 0 ) {
	echo "Неверный логин или пароль, либо вы не зарегистрированы!";
	die();
} else {
	echo "Привет, " . $login . "!";
}