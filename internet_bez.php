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
					<h2>Интернет-безопасность</h2>
						<p>
						Internet - всемирная глобальная компьютерная сеть. <br>
						Internet объединяет в себе тысячи локальных, отраслевых, региональных сетей всего мира.<br> 
						Отдельный пользователь, который не является абонентом какой-то из перечисленных сетей, также может подключиться к Internet через ближайший узловой центр.<br> 
						В настоящее время услугами сети Интернет пользуется более 1 млрд. человек.<br> 
						Интернет предоставляет пользователям разнообразные услуги: электронную почту, телеконференции, файловые архивы, Интернет-телефонию, форумы прямого общения (chat).<br>
						Самой новой и самой интересной услугой, предоставляемых пользователям глобальной сети, с недавних пор стала возможность работы с информационной системой World Wide Web (WWW).<br> 
						World Wide Web - всемирная паутина: распределенная по всему миру информационная система с гиперсвязями, существующая на технической базе мировой сети Internet.<br> 
						Всемирной Паутине исполнилось всего 16 лет. <br>
						Датой рождения World Wide Web (WWW) считается 6 августа 1991 года.<br> 
						В этот день Тим Бернерс-Ли, работавший в Европейском центре ядерных исследований в Женеве (Швейцария), опубликовал краткое описание проекта WWW.<br> 
						Web-страница - отдельный документ World Wide Web.<br> 
						Web-сервер - компьютер в сети Internet, хранящий Web-страницы и соответствующее программное обеспечение для работы с ними. <br>
						Web-сайт - раздел данных на Web-сервере, принадлежащий какой-то организации или лицу. В этом разделе его владелец размещает свою информацию в виде множества взаимосвязанных Web-страниц. Обычно Web-сайт имеет главную (домашнюю) страницу - Home page, от которой по гиперссылкам или указателям "вперед-назад" можно двигаться по страницам сайта. <br>
						Web-страница имеет своё имя, по которому к ней можно обратиться.<br> 
						•	http://myschool.narod.ru/html/urok.htm <br>
						•	Протокол доступа - http <br>
						•	Имя компьютера - myschool.narod.ru<br> 
						•	Имя директории - html <br>
						•	Имя файла - urok.htm <br>
						Просматривать Web-страницы не обязательно подряд, перелистывая их, как в книге.<br> 
						Важнейшим свойством WWW является гипертекстовая организация  связей между Web-страницами.<br>
						Эти связи действуют не только между страницами на одном сервере, но и между разными серверами WWW.<br>
						Переход от одной страницы к другой происходит по гиперсвязям, образующим сеть, которая напоминает паутину.<br> 
						Обычно ключевые слова, от которых идут гиперсвязи, выделяются на Web-странице цветом или подчеркиванием. <br>
						Роль ключа для связи может выполнить не только текст, но и рисунок, фотография, указатель на звуковой документ, поэтому вместо термина "гипертекст" употребляется термин "гипермедиа". <br>
						Гипермедиа - система гиперсвязей между мультимедиа документами.<br> 
						Web-браузер - специальное программное обеспечение, которое помогает пользователю перемещаться по "паутине". Наиболее популярным Web-браузером является Internet Explorer. Основная задача браузера - обращение к Web-серверу за искомой страницей и вывод страницы на экран.<br> 
						Поиск нужного документа в WWW может происходить: <br>
						•	путем указания адреса документа;<br>
						•	путем перемещения по “паутине” гиперсвязей;<br>
						•	путем использования поисковых программ. <br>
						На поисковый сервер можно выйти с помощью браузера, если указать адрес сервера.<br>
						Пользователь Интернета во время сеансов работы в сети погружается в информационное пространство с неограниченными ресурсами.<br> 
						Киберпространство - это совокупность мировых систем телекоммуникаций и циркулирующей в них информации. <br>
						</p>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/pERnEowema0SET" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen></iframe> 
						</center>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/4rhBEJI2BIDiUX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen></iframe>
							<iframe src="http://LearningApps.org/watch?app=1334032" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
							<iframe src="http://LearningApps.org/watch?app=1690037" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
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