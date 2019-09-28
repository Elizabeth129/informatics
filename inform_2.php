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
	
	<body onload=" makeTOC(); makeTests();">
		<div class="scroll" onclick="Scroll();" style = "position: fixed; margin-left:15px; margin-top:15px;"><button class="up" onclick="Scroll();" >
			<img src="go_up_mate.png" width="70px" height="70px" style =""/></button></div>
		<div class="body">
		<header width="80%">
			<img src="sky.jpg" width="80%" height="100px" style = "position:absolute;">
			<!-- <span style="cursor:pointer; padding:0px 5px; margin:0; float:right; font-size:12px; text-align:center; background-color:#cc6600; z-index: 4;" onclick="javascript:window.location = 'logout.php';"> <b>выход</b> </span>-->
			<div style="padding:10px 10px; margin:0px 0px; background-color:#00c38d; color:#eeeeee; font-size:12px; text-align:left; float:right; position: absolute; font-size:105%">
			<?php if (isset($_SESSION['user_id'])) { echo 'Вы вошли как пользователь ' . $_SESSION['user_name'] . ' [ <a style="cursor:pointer; text-decoration: none; color: #FFF;" 
			href = "logout.php">выход</a> ]';} else { echo '<a style="cursor:pointer; text-decoration: none; color: #FFF;" href = "login.php">Вxод</span> ';} ?>
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
				<div class = "book">
					<!--<h2>Интернет - учебник</h2>-->
					<h2 style="margin-top:0;">Содержание</h2>
					<dl>
					</dl>
					
					<h3 style = "margin-top:0;">Глава 1. Информационные процессы. Компьютер как средство реализации информационных процессов.</h3>
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
					<div class = "grid">
						<div id = "quiz">
							<h1>Контрольная работа № 1 <br> Вариант 1</h1>
							<hr style = "margin-bottom:20px;">
							
							<p id = "question"></p>
							
							<div class = "buttons">
								<button id = "btn0"><span id = "choice0"></span></button>
								<button id = "btn1"><span id = "choice1"></span></button>
								<button id = "btn2"><span id = "choice2"></span></button>
								<button id = "btn3"><span id = "choice3"></span></button>
							</div>
							<hr style = "margin-top:20px;">
							<footer class="progress">
								<p id="progress">Quetion x of y.</p>
							</footer>
						</div>
					</div>
					<script src="app.js"></script>
					<!--<script src="quiz_controller.js"></script>
					<script src="question.js"></script> -->
					<div class = "grid_1">
						<div id = "quiz_1">
							<h1>Контрольная работа № 1 <br> Вариант 2</h1>
							<hr style = "margin-bottom:20px;">
							
							<p id = "question_1"></p>
							
							<div class = "buttons_1">
								<button id = "btn_10"><span id = "choice_10"></span></button>
								<button id = "btn_11"><span id = "choice_11"></span></button>
								<button id = "btn_12"><span id = "choice_12"></span></button>
								<button id = "btn_13"><span id = "choice_13"></span></button>
							</div>
							<hr style = "margin-top:20px;">
							<footer class="progress_1">
								<p id="progress_1">Quetion x of y.</p>
							</footer>
						</div>
					</div>
					<!--<script src="quiz_controller_1.js"></script>
					<script src="question_1.js"></script>-->
					<script src="app_1.js"></script>
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
						<div class = "grid_2">
							<div id = "quiz_2">
								<h1>Контрольная работа №3 по теме «Текстовый процессор»  <br> Вариант 1</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_2"></p>
				
								<div class = "buttons_2">
									<button id = "btn_20"><span id = "choice_20"></span></button>
									<button id = "btn_21"><span id = "choice_21"></span></button>
									<button id = "btn_22"><span id = "choice_22"></span></button>
									<button id = "btn_23"><span id = "choice_23"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_2">
									<p id="progress_2">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_2.js"></script> 
						<div class = "grid_3">
							<div id = "quiz_3">
								<h1>Контрольная работа №3 по теме «Текстовый процессор»  <br> Вариант 2</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_3"></p>
				
								<div class = "buttons_3">
									<button id = "btn_30"><span id = "choice_30"></span></button>
									<button id = "btn_31"><span id = "choice_31"></span></button>
									<button id = "btn_32"><span id = "choice_32"></span></button>
									<button id = "btn_33"><span id = "choice_33"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_3">
									<p id="progress_3">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_3.js"></script> 
						<h3>Тема 4. Алгоритмы и программы</h3>
							<h4>1.	Алгоритмы и их исполнители.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/KcE40cDt9mo6Dk" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
								<center>
									<iframe src="http://LearningApps.org/watch?v=pnudg4wgc" style="border:0px;width:100%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
								</center>
								<center>
									<iframe src="http://LearningApps.org/watch?v=ppc5mn4ut" style="border:0px;width:100%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
								</center>
							<h4>2.	Среда описание и выполнения алгоритмов.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/7UUDTFPsST37GQ" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>3.	Типы алгоритмов.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/RqEy1EwfhQjuT" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>4.	Линейные алгоритмы.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/pftXG6uRisnzc9" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>Практическая работа № 6.Реализация линейных алгоритмов в среде Скретч.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/ACL69qpm2uGOQV" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>6.	Алгоритмы с циклами.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/tIfABZWxNcc9l8" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
								</center>
							<h4>7.	Практическая работа  №7.Реализация циклических алгоритмов в среде Скретч.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/68H44SQrK4KKnw" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
								</center>
							<h4>8.	Циклы со счетчиком.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/JDHyrLLk5Q4Wuq" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>9.	Циклы с условием.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/WQCip1nVHbslG" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>10.	Практическая работа №8.Составление программ с повторением в среде Скретч. </h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/ktYvptmbQoQq1t" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>11.	Алгоритмическая структура ветвления.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/c91PjqlABHqY4G" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>12.	Реализация алгоритмов с разветвлением в среде Скретч.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/fHfdlQqDyqMNzn" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
								</center>
							<h4>13.	Практическая работа №9.Реализация алгоритмов с разветвлением и повторением в среде Скретч.</h4>
								<center>
									<iframe src="http://www.slideshare.net/slideshow/embed_code/key/tLP8rcTH5uhtK0" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
								</center>
				</div>
			</article>
		</div>
		<footer>
			&copy; 2015
		</footer>
		</div>
	</body>
</html>