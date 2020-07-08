<?php

$db_connect = mysqli_connect('127.0.0.1', 'root', 'root', 'domirel_database');

if($db_connect == false) {
	echo "Не удалось подключиться к базе данных.";
	die();
}

?>