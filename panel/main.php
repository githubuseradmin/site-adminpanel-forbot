<!DOCTYPE html>
<html lang = "ru">

<head>
	<meta charset = "UTF-8">
	<title>БОТ - Администрирование</title>
	<link rel = "stylesheet" href = "../css/main.css">
</head>

<body>
	<div class = "header_menu">
		<a href = "/"><image src = "../images/logo.png" alt = "logo" class = "logo"></a>
		<a class = "user" id = "button_menu">
			<div class = "user_name">Тест</div>
			<div class = "user_photo"><image src = "../images/logo.png" alt = "user_photo" class = "user_photo_image"></div>
			<image src = "../images/arrow.png" alt = "user_arrow" class = "user_arrow">
		</a>
	</div>
	<div class = "menu_list" id = "menu_list">
		<a href = "">Настройки</a>
		<div class = "line"></div>
		<a href = "">Выйти</a>
	</div>
	<div class = "main">
		<nav>
			<ul class = "menu">
				<li>
					<a href = "#">
						<image src = "../images/home.png">
						<span class = "menu_name">Главная</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<image src = "../images/statistics.png">
						<span class = "menu_name">Статистика</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<image src = "../images/users.png">
						<span class = "menu_name">Пользователи</span>
					</a>
				</li>
				<li>
					<a href = "#">
						<image src = "../images/settings.png">
						<span class = "menu_name">Настройки</span>
					</a>
				</li>
			</ul>
		</nav>
	<div class = "result" id = "result">
	</div>
	</div>
</body>

<script src = "../scripts/script.js"></script>
<script src = "http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src = "../scripts/load.js"></script>

</html>