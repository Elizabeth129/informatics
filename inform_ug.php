<?php
session_start();
//if(!isset($_SESSION['user_id'])){
//	header("Location: login.php");
//	exit;
//}

/*$link = mysqli_connect("127.0.0.1", "root", "", "register");
 проверка подключения 
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Соединение с MySQL установлено!" . PHP_EOL;
echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);*/
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Интерактивный интернет-учебник</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="style_quiz.css" type = "text/css" >
		<script type="text/javascript" src="newscript.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body>
	<div class="scroll" onclick="Scroll();" style = "position: fixed; margin-left:15px; margin-top:15px;"><button class="up" onclick="Scroll();" >
			<img src="go_up_mate.png" width="70px" height="70px" style =""/></button></div>
		<div class="body">
		<header width="80%">
			<img src="sky.jpg" width="80%" height="100px" style = "position:absolute;" />
			<!-- <span style="cursor:pointer; padding:0px 5px; margin:0; float:right; font-size:12px; text-align:center; background-color:#cc6600; z-index: 4;" onclick="javascript:window.location = 'logout.php';"> <b>выход</b> </span>-->
			<div style="padding:10px 10px; margin:0px 0px; background-color:#00c38d; color:#eeeeee; font-size:12px; text-align:left; float:right; position: absolute; font-size:105%">
			<?php if (isset($_SESSION['user_id'])) { echo 'Вы вошли как пользователь ' . $_SESSION['user_name'] . ' [ <a style="cursor:pointer; text-decoration: none; color: #FFF;" 
			href = "logout.php">выход</a> ]';} else { echo '<a style="cursor:pointer; text-decoration: none; color: #FFF;" href = "login.php">Вxод</a> ';} ?>
				</div>
			

			
		</header>
		<div class="osnova">
		
			<aside>
				<menu>
					<ul id = "menu"> 
						<li>
							<a href = "informg.php">Главная</a>
						</li>
						<li>
							<a href = "#">Учебники</a>
								<ul>
									<li>
										<a href = "inform_2.php" title="Информатика 5 класс (для учеников, изучающих информатику во 2-4 классах)">за программой 2016г.</a>
									</li>
									<li>
										<a href = "inform_5.php" title="Информатика 5 класс (для учеников, изучающих информатику с 5 класса)">за программой 2015г.</a>
									</li>
									<li>
										<a href="inform_ug.php">Углублённое изучение</a>
									</li>
								</ul>
						</li>
						<li>
							<a href = "internet_bez.php">Интернет-безопасность</a>
						</li>
						<li>
							<a href="luboz.php">Любознательным</a>
						</li>
						<li>
							<a href="konkurs.php">Конкурсы</a>
						</li>
						<li>
							<a href = "diary.php">Дневник</a>
						</li>
					</ul>
				</menu>
			</aside>
			<article>
				
			</article>
		</div>
		<footer>
			&copy; 2016
		</footer>
	</body>
</html>