<?php

date_default_timezone_set ('Europe/Moscow'); // часовой пояс
define("DB_HOST","localhost"); // хост базы данных
define("DB_USER","test"); // пользователь базы данных
define("DB_PASS","test"); // пароль от базы данных
define("DB_BASE","test"); // имя базы данных
@mysql_connect(DB_HOST,DB_USER,DB_PASS)
or die("Невозможно подключиться к базе данных.");
@mysql_select_db(DB_BASE)
or die("Ошибка mysql_select_db()");

if(isset($_POST[button])) {
	$login = $_POST[login];
	$password = $_POST[password];
	if (!$login || !$password)
	{
		echo("Ошибка");
		return 1;
	}
	$result = "SELECT * FROM accountssite WHERE Name = '".$login."'";
	$result1 = mysql_num_rows($result);
	if ($result != 1)
	{
		echo("Ошибка");
		return 1;
	}
	$result2 = mysql_fetch_array($result);
	$password2 = $result2["password"];
	if ($password != $password2)
	{
		echo("Ошибка");
		return 1;
	}
}
?>

<!DOCTYPE html>
<html lang = "ru">

<head>
	<meta charset = "UTF-8">
	<title>БОТ - Администрирование</title>
	<link rel = "stylesheet" href = "css/login.css">
</head>

<body>
	<image src = "images/logo.png" alt = "logo" class = "logo">
	<div class = "form">
		<form method = "POST">
			<input type = "text" name = "login" placeholder = "Логин">
			<input type = "password" name = "password" placeholder = "Пароль">
			<input type = "submit" name = "button" class = "button" value = "АВТОРИЗОВАТЬСЯ">
		</form>
	</div>
</body>

</html>