<?php

include('includes/db.php');
?>

<form method="GET" action="/handle.php">
	Вход
	<hr>
	<input type="text" placeholder="Ваш логин" name="login">
	<br>
	<br>
	<input type="text" placeholder="Ваш пароль" name="password">
	<hr>
	<input type="submit" value="Отправить">
</form>