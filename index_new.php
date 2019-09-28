<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("Location: informg_nr.html");
	exit;
}

$link = mysqli_connect("127.0.0.1", "root", "", "register");
/* �������� ����������� */
if (mysqli_connect_errno()) {
    printf("�� ������� ������������: %s\n", mysqli_connect_error());
    exit();
}

if (!$link) {
    echo "������: ���������� ���������� ���������� � MySQL." . PHP_EOL;
    echo "��� ������ errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "����� ������ error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "���������� � MySQL �����������!" . PHP_EOL;
echo "���������� � �������: " . mysqli_get_host_info($link) . PHP_EOL;

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
		<title>������������� ��������-�������</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="newscript.js"></script>
		<script type="text/javascript" src="http://oemar.googlecode.com/files/scroll-startstop.events.jquery.js"></script>
	</head>
	<body onload="makeMenu(); makeTOC(); makeTests();">
		<header>
			<img src="sky.jpg" width="100%" height="100px">
			<span style="cursor:pointer; padding:0px 5px; margin:0; float:right; font-size:12px; text-align:center; background-color:#cc6600; z-index: 4;" onclick="javascript:window.location = 'logout.php';"> <b>�����</b> </span>
		</header>
		<div class="osnova">
			<aside>
				<menu>
					<ul id = "menu"> 
						<li>
							<a href = "informg.html">�������</a>
						</li>
						<li>
							<a href = "#">��������</a>
								<ul>
									<li>
										<a href = "inform_2.html">�� 2 ������</a>
									</li>
								</ul>
						</li>
						<li>
							<a href = "informg.html">�������</a>
						</li>
					</ul>
				</menu>
			</aside>
			<article>
				<div class = "book">
					<!--<h2>�������� - �������</h2>-->
					<dl>
					</dl>
					
					<h3>����� 1. �������������� ��������. ��������� ��� �������� ���������� �������������� ���������.</h3>
					<h4>1.	���������, ������, ����������, ���.</h4>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/cYzVqBw4uyrwzN" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	�������������� �������� � �������. ���� �������������� ���������� � ����� ������������ ��������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/B3gBhuCqX9HaJF" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>3.	���������� � �� �������������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/s3Llc6Af0AhlOK" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>4.	���������� ���������� � �� ����������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/3BfEZktbqqBMKe" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>5.	������� �������� ������� (�����, �����, ������).</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/HKe16eJtE3JWbY" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
					<h4>6.	������������ ������ �1 ������ � ������� � �������</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/DKQy1pwdFd6m29" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>7.	������������ ������ �2 ������ � ������</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/K3B08JAoEb2Sff" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>	
					<h3>���� 2. �������� ������� ����������</h3>
					<h4>1.	��������� ����, ������������� ������� �����.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/GuE8I03dnquXIX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	����� �������� � ���� ��������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/tRorGzKBLG92Ky" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
						</center>
					<h3>���� 3. ��������� ���������</h3>
					<h4>1.	��������� �������� � ��� �������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/fhJklXPARNiX1N" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>2.	���������� ������ ����� � �������������� ������ (��������, �������).</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/x7D3GyhSUSMe2" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>3.	������������ ������ �4 �������������� ������</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/60KIIPGeU7X1YM" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
						<p>
							<b>�������������� ������ </b> <br/> 
								� WINDOWS ���� ����� <b style = "margin:0; color:#223399;">����������� ����������</b> � ��������, ����������� ��������� ���� �����. �� ������ ����������� � ������ <b style = "margin:0; color:#223399;"> �����������, ������������ </b> <i style = "margin:0; color:#223399;">�������� ����</i>. �������� ����� ������������ ����������� ���������: <br/>
							<b style = "color: #27F; ">�����������.</b>  ��������� ���������� ���������� ���������� ������� ������� ���������. ����� ��� ����: ������� (��� ���������� �������������� �������� � ������������ ������������� ��������, ������������ � ����������������� ������� ���������). <br/>
							<b style = "color: #27F; ">�������.</b> ��� ���������� ��������� ��������. ������������ � ������, ���� ����� ������ �������� ��������� ���� ��� ����������� (������ �������� ������). </br>
							<b style = "color: #27F; ">����������� �������� Paint.</b> ��������� ��������� �� ������� ������� � ��������� ������� � �������������� ������ ������� ������������.

						</p>
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/mYGlDm0sljUbk3" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>4.	���������� �������� �� ����� � ���������� ��������� � �� ��������������. �������� ��������� � �� ��������������.</h4>	
						<center>
							<iframe src="http://www.slideshare.net/slideshow/embed_code/key/qDDlQ5dUA6TvyX" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> 
						</center>
					<h4>5.	������������ ������ �5.����������, �������������� � �������������� ������. </h4>	
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