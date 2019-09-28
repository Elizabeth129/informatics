<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("Location: informg_nr.html");
	exit;
}

$link = mysqli_connect("127.0.0.1", "root", "", "register");
/* проверка подключения */
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

mysqli_close($link);
?>

 <?php
#    echo '<pre>';
 #   echo htmlspecialchars(print_r($_SESSION, true));
 #   echo '</pre>';
?>

<html>
	<head>
		<!--<meta charset="utf-8">-->
		<title>Интерактивный интернет-учебник</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="newscript.js"></script>
		<script type="text/javascript" src="http://oemar.googlecode.com/files/scroll-startstop.events.jquery.js"></script>
	</head>
	<body onload="makeMenu(); makeTOC(); makeTests();">
		<header>
			<img src="sky.jpg" width="100%" height="100px">
			<span style="cursor:pointer; padding:0px 5px; margin:0; float:right; font-size:12px; text-align:center; background-color:#cc6600; z-index: 4;" onclick="javascript:window.location = 'logout.php';"> <b>выход</b> </span>
		</header>
		<div class="osnova">
			<aside>
				<menu>
					<ul id = "menu"> 
						<li>
							<a href = "informg.html">Главная</a>
						</li>
						<li>
							<a href = "#">Учебники</a>
								<ul>
									<li>
										<a href = "inform_2.html">Со 2 класса</a>
									</li>
								</ul>
						</li>
						<li>
							<a href = "informg.html">Главная</a>
						</li>
					</ul>
				</menu>
			</aside>
			<article>
				<div class = "book">
					<!--<h2>Интернет - учебник</h2>-->
					<dl>
					</dl>
					
					<h3>Глава 1. Информационные процессы. Компьютер как средство реализации информационных процессов.</h3>
					<h4>1.	Сообщения, данные, информация, шум.</h4>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/cYzVqBw4uyrwzN" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	Информационные процессы и системы. Роль информационных технологий в жизни современного человека.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/B3gBhuCqX9HaJF" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>3.	Компьютеры и их разновидности.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/s3Llc6Af0AhlOK" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>4.	Устройства компьютера и их назначение.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/3BfEZktbqqBMKe" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>5.	Объекты файловой системы (файлы, папки, ярлыки).</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/HKe16eJtE3JWbY" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
					<h4>6.	Практическая работа №1 Работа с папками и файлами</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/DKQy1pwdFd6m29" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>7.	Практическая работа №2 Работа с окнами</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/K3B08JAoEb2Sff" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>	
					<h3>Тема 2. Цифровые сетевые технологии</h3>
					<h4>1.	Локальная сеть, использование сетевых папок.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/GuE8I03dnquXIX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	Поиск сведений в сети Интернет.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/tRorGzKBLG92Ky" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
					<h3>Тема 3. Текстовый процессор</h3>
					<h4>1.	Текстовый документ и его объекты.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/fhJklXPARNiX1N" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	Повторение правил ввода и редактирования текста (символов, абзацев).</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/x7D3GyhSUSMe2" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>3.	Практическая работа №4 Форматирования текста</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/60KIIPGeU7X1YM" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
						<p>
							<b>Форматирование текста </b> <br/> 
								В WINDOWS есть много <b style = "margin:0; color:#223399;">стандартных приложений</b> – программ, выполняющих отдельные виды работ. Их ярлыки расположены в папках <b style = "margin:0; color:#223399;"> «Программы», «Стандартные» </b> <i style = "margin:0; color:#223399;">Главного меню</i>. Наиболее часто используемые стандартные программы: <br/>
							<b style = "color: #27F; ">Калькулятор.</b>  Позволяет произвести вычисления достаточно высокой степени сложности. Имеет два вида: обычный (для простейших арифметических расчетов с возможностью использования двоичной, восьмеричной и шестнадцатеричной системы счисления). <br/>
							<b style = "color: #27F; ">Блокнот.</b> Это простейший текстовый редактор. Используется в случае, если нужно просто записать несколько слов или предложений (аналог записной книжки). </br>
							<b style = "color: #27F; ">Графический редактор Paint.</b> Позволяет создавать не сложные рисунки в растровом формате с использованием набора базовых инструментов.

						</p>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/mYGlDm0sljUbk3" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>4.	Добавление рисунков из файла в текстового документа и их форматирования. Страницы документа и их форматирования.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/qDDlQ5dUA6TvyX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>5.	Практическая работа №5.Добавления, редактирования и форматирования таблиц. </h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/CXLnkzxTso3y2q" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/IaGBeXM83QPPVx" width="668" height="714" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
				</div>
			</article>
		</div>
		<footer>
			&copy; 2015
		</footer>
	</body>
</html>