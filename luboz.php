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
		<link rel="stylesheet" type="text/css" href="newstyle.css">
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
					<h2>Любознательным</h2>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/yvQloekNOErJuB" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/fBRY7HaiiM4zQl" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/fAhjIgy97z1IHa" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/5S3TO0ZEpcDfcx" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/Dms94mKWjjQGoX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
						<center>
							<h3>Знаете ли вы, что...</h3>
						</center>
						<p> 
						•	Первая счётная машина была сконструирована в 17 веке фр. математиком, физиком, философом и писателем. Это - Блез Паскаль<br>
						•	Машина Паскаля умела только складывать и вычитать.<br>
						•	Чарльз Беббидж - Создатель аналитической счётной машины, он потратил на её разработку 10 лет, но не увидел своё детище в действии. В конце 20 века её воссоздали – и она заработала.<br>
						•	С. А. Лебедев - Первый создатель компьютера в нашей стране.Под его руководством в 50-х годах были построены серийные ламповые ЭВМ БЭСМ-1, БЭСМ-2, М-20. В то время эти машины были одними из лучших в мире.<br>
						</p>
						<center>
							<h3>Мобильная связь</h3>
						</center>
						<p> 
						В настоящее время сеть мобильной телефонной связи охватила практически весь мир, а количество пользователей мобильных телефонов около 1 млрд. человек. Сеть мобильной связи позволяет передавать не только голосовые сообщения, но и текстовые сообщения (SMS), мультимедийные сообщения (мелодии, графика). Высокоскоростной доступ к Интернету можно осуществить по технологии GPRS (170 Кбит/сек). Это в 3 раза быстрее, чем доступ по коммутируемым телефонным линиям.
						</p>
						<center>
							<h3>Информационное общество</h3>
						</center>
						<p> 
						•	В информационном обществе главным ресурсом является информация, именно на основе владения информацией о самых различных процессах и явлениях можно эффективно и оптимально строить любую деятельность. В информационном обществе повышается не только качество потребления, но и качество производства, человек, использующий информационные технологии, имеет лучшие условия труда, а труд становится творческим и интеллектуальным.<br>
						•	В настоящее время развитые страны мира (США, Япония, страны Западной Европы) фактически уже вступили в информационное общество, другие же, в том числе и Россия, находятся на ближайших подступах к нему.<br>
						</p>
						<center>
							<h3>Носитель информации</h3>
						</center>
						<p> 
						•	Но наиболее информационно ёмкими являются молекулы ДНК, которые имеют очень малый размер и плотно упакованы. Это позволяет хранить огромное количество информации (до 1021 бит в 1 см3), что даёт организму развиваться из одной единственной клетки, содержащей всю необходимую генетическую информацию. Современные микросхемы памяти позволяют хранить в 1 см3 до 1010бит информации, однако это в 100 млрд. раз меньше, чем в ДНК. Можно сказать, что современные технологии пока проигрывают биологической эволюции.<br> 
						•	Молекула ДНК является наиболее долговременным носителем информации, которая в течение десятков тысяч лет (человек) и миллионов лет (некоторые живые организмы), сохраняет генетическую информацию данного вида.
						</p>
						<center>
							<iframe src="http://LearningApps.org/watch?app=1823392" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
							<iframe src="http://LearningApps.org/watch?app=431542" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
							<iframe src="http://LearningApps.org/watch?app=431193" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
							<iframe src="http://LearningApps.org/watch?app=833077" style="border:0px;width:90%;height:500px" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
						</center>
						<center>
							<h3>Игра "Угадай"</h3>
						</center>
						<section>
							<dl data-right='2'>
								<dt>1. Что за чудо-агрегат может делать все подряд: петь, играть, самым лучшим другом стать?</dt>
								<dd>а)Принтер</dd>
								<dd>б)Машина</dd>
								<dd>в)Компьютер</dd>
							</dl>
							<dl data-right='0'>
								<dt>2. На столе он перед нами, на него направлен взор, подчиняется программе, носит имя...</dt>
								<dd>а)Монитор</dd>
								<dd>б)Дневник</dd>
								<dd>в)Клавиатура</dd>
							</dl>
							<dl data-right='1'>
								<dt>3. Не зверушка, не летаешь, а по коврику скользишь и курсором управляешь. Ты - компьютерная...</dt>
								<dd>а)Клавиатура</dd>
								<dd>б)Мышь</dd>
								<dd>в)Рука</dd>
							</dl>
							<dl data-right='2'>
								<dt>4. Нет, она - не пианино, только клавишь в ней - не счесть!<br>Алфавита там картина, знаки, цифры тоже есть.<br>Очень тонкая натура. Имя ей...</dt>
								<dd>а)Мышь</dd>
								<dd>б)Монитор</dd>
								<dd>в)Клавиатура</dd>
							</dl>
							<dl data-right='1'>
								<dt>5. Сохраняет все сереты "ящик" справа, возле ног, и слегка шумит при этом. Что за "зверь?"</dt>
								<dd>а)Компьютер</dd>
								<dd>б)Системный блок</dd>
								<dd>в)Интернет</dd>
							</dl>
							<dl data-right='0'>
								<dt>6. Он быстрее человека<br>Перемножит два числа,<br>В нём сто раз библиотека<br>Поместиться бы смогла,<br>Только там открыть возможно<br>Сто окошек за минуту.<br>Угадать совсем несложно,<br>Что загадка про...</dt>
								<dd>а)Компьютер</dd>
								<dd>б)Принтер</dd>
								<dd>в)Монитор</dd>
							</dl>
								<dl data-right='2'>
								<dt>7. Сетевая паутина оплела весь белый свет, не пройти детишкам мимо. Что же это?</dt>
								<dd>а)Компьютер</dd>
								<dd>б)Мышь</dd>
								<dd>в)Интернет</dd>
							</dl>
							<h4 class='result'></h4>
						</section>
									
					
				</div>
			</article>
		</div>
		<footer>
			&copy; 2015
		</footer>
		</div>
	</body>
</html>