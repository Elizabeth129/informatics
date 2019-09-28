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
					
					<h3>Глава 1. Информация и сообщения.</h3>
				<p>
				Издавна восход солнца сообщал человеку о начале нового дня, закат - о конце дня. Рычание животных заставляло человека прятаться от хищников. Человек от рождения окружен информацией, получаемой из окружающей среды. Но в первобытном мире информации было немного, а с развитием общества ее становилось все больше и больше. 
				</p>
				<center>  
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/aRJXWHqSvZj30p" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen></iframe> 
				</center>
				<p>
				Современный человек получает большое количество информации: общение с людьми и животными, чтение книг, газет, журналов, просмотр телепередач, прослушивание радио, посещение музеев, театров, концертов. Такое количество информации трудно хранить, обрабатывать, передавать. И человек изобретает новые технические средства, какие ему помогают осуществлять эти процессы. Было изобретено книгопечатание, почту, радио, телевизор, компьютер, мобильный телефон. Появление компьютеров - для обработки информации - дала человечеству новые возможности.
				</p>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/BaIXkL2VgCgmGT" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen></iframe> 
				</center>
				<p>
				Компьютеры быстро вошли во все сферы нашей жизни, и во второй половине ХХ века сформировалась наука об общих свойствах и закономерностях информации, о методах ее поиска, передачи, хранения, обработки и использования в различных сферах деятельности человека. Эта наука получила название "информатика". Информатика – это наука, которая изучает средства получения, обработки, хранения и распространения информации с помощью компьютера.
				</p>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/meInB91f1OUmqw" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
				</center> 
				<center>
					<iframe src="http://LearningApps.org/watch?app=1697533" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
				</center>	
				<h4>Тест 1.1</h4>
				<center>	
					<iframe src="http://LearningApps.org/watch?v=pjmfvu7ea15" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
				</center>
				<h4>Тест 1.2</h4>
						<div class = "grid_4">
							<div id = "quiz_4">
								<h1>Тест 1.2</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_4"></p>
				
								<div class = "buttons_4">
									<button id = "btn_40"><span id = "choice_40"></span></button>
									<button id = "btn_41"><span id = "choice_41"></span></button>
									<button id = "btn_42"><span id = "choice_42"></span></button>
									<button id = "btn_43"><span id = "choice_43"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_4">
									<p id="progress_4">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_4.js"></script> 
						<h4>Тест 1.3</h4>
						<div class = "grid_5">
							<div id = "quiz_5">
								<h1>Тест 1.3</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_5"></p>
				
								<div class = "buttons_5">
									<button id = "btn_50"><span id = "choice_50"></span></button>
									<button id = "btn_51"><span id = "choice_51"></span></button>
									<button id = "btn_52"><span id = "choice_52"></span></button>
									<!--<button id = "btn_53"><span id = "choice_53"></span></button>-->
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_5">
									<p id="progress_5">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_5.js"></script> 
						<h3>Глава 2. Основы работы с компьютером.</h3>
				<p>
				Люди придумали компьютеры, чтобы быстро выполнять сложные расчеты. И не случайно вначале их назвали электронными вычислительными машинами или, сокращенно, ЭВМ.
				</p>
				<p>
				Но компьютеры могут решать не только математические задачи. Человек научил их управлять космическими кораблями, различными машинами, механизмами и даже целыми заводами. Сейчас и дома компьютеры становятся незаменимыми помощниками. А сколько разных сведений хранят компьютеры в своей памяти! Они всегда к вашим услугам и в любой момент мгновенно дадут нужную справку ученому и врачу, инженеру и учителю, писателю и композитору, конструктору и агроному – всем может помочь компьютер.
				</p>
				<h4>Устройства компьютера</h4>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/vm5Qj6YZI1fj3x" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen></iframe> 
				</center>
				<h4>Объекты и их свойства</h4>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/2iuWgfDokBcuPu" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen></iframe> 
				</center>
				<h4>Опирации над окнами</h4>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/atgGBTP6VCxVWB" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
				</center>
				<h4>Понятие о папке и файле</h4>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/vu9tqjstkL5cqU" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
				</center>
				<p>Файл – последовательность байтов, имеющая имя. Имя файла имеет 2 части: собственно имя, задаваемое пользователем, и расширение, которое дает файлу программа, в которой он создан. Еще говорят, что расширение указывает на тип файла. В имени файла может содержаться до 255 символов, запрещены символы ', ",:,?,/ \, &lt;, &gt;. Расширения исполняемых файлов - .exe, .com, расширения текстовых файлов - .txt, .doc, .pdf, расширения графических файлов - .bmp, .jpg, .gif, расширения звуковых файлов - .mp3, .waw и др. Рекомендации при работе с файлами: 
				1) Давать файлу имя, которое отражает его содержание;
				2) Сохранять в той папке, в которой его будет проще найти.
				</p>
				<p>Папка – хранилище объектов, имеющее имя. Папки нужны для упорядочивания объектов. Чаще всего объекты хранят в папках по некоторому принципу, например: в папке Изображения хранят графические файлы, в папке Музыка – музыкальные и т.д., хотя возможно собрать в одной папке и объекты совершенно разного вида. Папки делятся на системные и рабочие. Системные папки созданы ОС Windows и предназначены для стабильной работы компьютера, например папка Program Files, MS Office и др. Многие системные папки имеют особые значки для своего изображения, например, Мой компьютер или Корзина. Содержимое системных папок менять нельзя! Рабочие папки создаем мы сами, и с ними можно производить любые операции: создание, переименование, копирование, перемещение, удаление и проч.</p>
				<h4>Практическая работа №1</h4>
				<center>
					<iframe src="http://www.slideshare.net/slideshow/embed_code/key/9V0NmRZYAQI3M" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
				</center>
				<center>
					<iframe src="http://LearningApps.org/watch?app=1441792" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
					<iframe src="http://LearningApps.org/watch?v=p9ophep6315" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
				</center>
						<h4>Тест 2.1</h4>
						<div class = "grid_6">
							<div id = "quiz_6">
								<h1>Тест 2.1</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_6"></p>
				
								<div class = "buttons_6">
									<button id = "btn_60"><span id = "choice_60"></span></button>
									<button id = "btn_61"><span id = "choice_61"></span></button>
									<button id = "btn_62"><span id = "choice_62"></span></button>
									<!--<button id = "btn_53"><span id = "choice_53"></span></button>-->
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_6">
									<p id="progress_6">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_6.js"></script> 
						<h4>Тест 2.2</h4>
						<div class = "grid_7">
							<div id = "quiz_7">
								<h1>Тест 2.2</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_7"></p>
				
								<div class = "buttons_7">
									<button id = "btn_70"><span id = "choice_70"></span></button>
									<button id = "btn_71"><span id = "choice_71"></span></button>
									<button id = "btn_72"><span id = "choice_72"></span></button>
									<button id = "btn_73"><span id = "choice_73"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_7">
									<p id="progress_7">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_7.js"></script> 
						<h4>Тест 2</h4>
						<div class = "grid_8">
							<div id = "quiz_8">
								<h1>Тест 2</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_8"></p>
				
								<div class = "buttons_8">
									<button id = "btn_80"><span id = "choice_80"></span></button>
									<button id = "btn_81"><span id = "choice_81"></span></button>
									<button id = "btn_82"><span id = "choice_82"></span></button>
									<!--<button id = "btn_53"><span id = "choice_53"></span></button>-->
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_8">
									<p id="progress_8">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_8.js"></script> 
						<h3>Глава 3. Графический редактор </h3>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/v8c2sgo3damsH7" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/8lHBMmEmLyIAAy" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/odgwX6ckcDIDJz" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/wZbhrxYToswUT6" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/rHBO5bHAekatJs" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
						<h4>Дорисуй рисунок</h4>
						<center>
							<img src="dorisui risunok.bmp" width="90%"  >
						</center>
						<h4>Нарисуй рисунок</h4>
						<center>
							<img src="vushny.bmp"  width="90%">
							<img src="akvarium.bmp" width="90%">
						</center>
						<h4>Сложи мозаику</h4>
						<center>
							<img src="klounu.bmp" width="90%">
							<img src="muxomor.bmp" width="90%">
							<img src="clock.bmp" width="90%">
							<img src="cheburashka.bmp" width="90%">
						</center>
						<h4>Дорисуйте картинку с помощю копирования</h4>
						<center>
							<img src="vaza kopy.bmp" width="90%">
							<img src="gribu (peretaskivanie).bmp" width="90%">
							<img src="3 tsvetochka.bmp" width="90%">
							<img src="copy.bmp" width="90%">
						</center>
						<center>
							<iframe src="http://LearningApps.org/watch?app=1504890" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
						</center>
						<h4>Тест 3</h4>
						<div class = "grid_9">
							<div id = "quiz_9">
								<h1>Тест 3</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_9"></p>
				
								<div class = "buttons_9">
									<button id = "btn_90"><span id = "choice_90"></span></button>
									<button id = "btn_91"><span id = "choice_91"></span></button>
									<button id = "btn_92"><span id = "choice_92"></span></button>
									<button id = "btn_93"><span id = "choice_93"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_9">
									<p id="progress_9">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_9.js"></script> 
						<h3>Глава 4. Редактор презентаций</h3>
							<p>
							Достаточно часто возникает потребность передать одно и то же сообщение группе людей. Вернувшись после каникул, вы рассказываете школьным друзьям о местах, которые посетили. Разработчики новой компьютерной программы знакомят будущих пользователей с ее особенностями, отличиями от других программ. 
							</p>
							<p>
							В каждом из этих случаев приглашают заинтересованных лиц, чтобы представить что-то новое, важное. Такое мероприятие называют презентацией.  Самым современным способом является представление в виде компьютерной презентации. Материалы в компьютерной презентации могут размещаться и подаваться в том порядке, в котором построено ваше выступление. Во время своего выступления вы сможете демонстрировать компьютерную презентацию. Это сделает ваш ответ более ярким, более наглядным, более интересным и более понятным. Основными объектами компьютерных презентаций являются слайды.
							</p>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/GOv0Szq1vCdEWZ" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen></iframe> 
							</center>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/glxgNTT5F2wGcs" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen></iframe> 
							</center>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/m44T5RaaoPxr3d" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
							</center>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/JGLxXNnsrlf5Gx" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe> 
							</center>
							<h4>Практическая работа№1</h4> 
							<p><b>Цель работы:</b><br> 
							– закрепить навыки работы с объектами;<br>
							– ознакомить с видами эффекта анимации.
							<h5 class='var'>«Чудо ребёнок»</h5>
							</p>
							<center>
								<img src="chudo.png" >
							</center>
							<p>
							1.	Запустите программу <b>Microsoft Power Point</b>.<br>
							2.	Создайте объекты на слайде.<br>
							3.	Выполните сборку лица ребёнка по образцу:
							</p>
							<center>
								<img src="chudo2.png">
							</center>
							<p>
							4.	Анимируйте сборку рисунка, задав объектам эффекты анимации.<br>
							5.	Покажите работу преподавателю.
							</p>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/CWgi7q1YgBLQM8" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
							</center>
							<h4>Практическая работа№2</h4>
							<h5 class='var'>Практическая работа на тему «Форматирование текстовых объектов»</h5>
							<p>
							1.	Загрузить редактор презентации Microsoft Office PowerPoint.<br>
							2.	Открыть презентацию «Украинский веночек».<br>
							3.	Титульный слайд отредактировать. Выделить текст и задать для него шрифт Bookman Old Style, размер – 72, тип начертания – с тенью <br>
							4.	Отредактировать текстовые и графические объекты слайдов  на свой вкус.<br>
							5.	Сохранить презентацию в свою папку.
							</p>
							<center>
								<iframe src="http://www.slideshare.net/slideshow/embed_code/key/EDu38Umn8LquTr" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%; " allowfullscreen> </iframe>
								<iframe src="http://LearningApps.org/watch?app=764697" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
								<iframe src="http://LearningApps.org/watch?app=1459741" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
							</center>
							<h4>Тест 4</h4>
							<div class = "grid_10">
							<div id = "quiz_10">
								<h1>Тест 4 <br/> Вариант 1</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_10"></p>
				
								<div class = "buttons_10">
									<button id = "btn_100"><span id = "choice_100"></span></button>
									<button id = "btn_101"><span id = "choice_101"></span></button>
									<button id = "btn_102"><span id = "choice_102"></span></button>
									<button id = "btn_103"><span id = "choice_103"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_10">
									<p id="progress_10">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_10.js"></script>
							<div class = "grid_11">
							<div id = "quiz_11">
								<h1>Тест 4 <br/> Вариант 2</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_11"></p>
				
								<div class = "buttons_11">
									<button id = "btn_110"><span id = "choice_110"></span></button>
									<button id = "btn_111"><span id = "choice_111"></span></button>
									<button id = "btn_112"><span id = "choice_112"></span></button>
									<button id = "btn_113"><span id = "choice_113"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_11">
									<p id="progress_11">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_11.js"></script>		
						<div class = "grid_12">
							<div id = "quiz_12">
								<h1>Тест 4 <br/> Вариант 3</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_12"></p>
				
								<div class = "buttons_12">
									<button id = "btn_120"><span id = "choice_120"></span></button>
									<button id = "btn_121"><span id = "choice_121"></span></button>
									<button id = "btn_122"><span id = "choice_122"></span></button>
									<button id = "btn_123"><span id = "choice_123"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_12">
									<p id="progress_12">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_12.js"></script>
						<div class = "grid_13">
							<div id = "quiz_13">
								<h1>Тест 4 <br/> Вариант 4</h1>
								<hr style = "margin-bottom:20px;">
				
								<p id = "question_13"></p>
				
								<div class = "buttons_13">
									<button id = "btn_130"><span id = "choice_130"></span></button>
									<button id = "btn_131"><span id = "choice_131"></span></button>
									<button id = "btn_132"><span id = "choice_132"></span></button>
									<button id = "btn_133"><span id = "choice_133"></span></button>
								</div>
								<hr style = "margin-top:20px;">
								<footer class="progress_13">
									<p id="progress_13">Quetion x of y.</p>
								</footer>
							</div>
						</div>
						<!--<script src="quiz_controller_1.js"></script>
						<script src="question_1.js"></script>-->
						<script src="app_13.js"></script>
				</div>
				
			</article>
		</div>
		<footer>
			&copy; 2015
		</footer>
	</body>
</html>