<?php
session_start();
if(!isset($_SESSION['user_id'])){
	header("Location: login.php");
	exit;
}
mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("register");
/*$link = mysqli_connect("127.0.0.1", "root", "", "register");
 �������� ����������� 
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

mysqli_close($link);*/
?>
<html>
	<head>
		<!--<meta charset="utf-8">-->
		<title>������������� ��������-�������</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="style_quiz.css" type = "text/css" >
		<link rel="stylesheet" type="text/css" href="diary.css">
		<script type="text/javascript" src="newscript.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	</head>
	<body onload="makeMenu(); makeTOC(); makeTests();">
	<div class="scroll" onclick="Scroll();" style = "position: fixed; margin-left:15px; margin-top:15px;"><button class="up" onclick="Scroll();" >
			<img src="go_up_mate.png" width="70px" height="70px" style =""/></button></div>
		<div class="body">
		<header width="80%">
			<img src="sky.jpg" width="80%" height="100px" style = "position:absolute;">
			<!-- <span style="cursor:pointer; padding:0px 5px; margin:0; float:right; font-size:12px; text-align:center; background-color:#cc6600; z-index: 4;" onclick="javascript:window.location = 'logout.php';"> <b>�����</b> </span>-->
			<div style="padding:10px 10px; margin:0px 0px; background-color:#00c38d; color:#eeeeee; font-size:12px; text-align:left; float:right; position: absolute; font-size:105%">
			<?php if (isset($_SESSION['user_id'])) { echo '�� ����� ��� ������������ ' . $_SESSION['user_name'] . ' [ <a style="cursor:pointer; text-decoration: none; color: #FFF;" 
			href = "logout.php">�����</a> ]';} else { echo '<a style="cursor:pointer; text-decoration: none; color: #FFF;" href = "login.php">�x��</span> ';} ?>
				</div>

			
		</header>
		<div class="osnova">
			<aside>
				<menu>
					<ul id = "menu"> 
						<li>
							<a href = "informg.php">�������</a>
						</li>
						<li>
							<a href = "#">��������</a>
								<ul>
									<li>
										<a href = "inform_2.php" title="����������� 5 ����� (��� ��������, ��������� ����������� �� 2-4 �������)">�� ���������� 2016�.</a>
									</li>
									<li>
										<a href = "inform_5.php" title="����������� 5 ����� (��� ��������, ��������� ����������� � 5 ������)">�� ���������� 2015�.</a>
									</li>
									<li>
										<a href="inform_ug.php">���������� ��������</a>
									</li>
								</ul>
						</li>
						<li>
							<a href = "internet_bez.php">��������-������������</a>
						</li>
						<li>
							<a href="luboz.php">��������������</a>
						</li>
						<li>
							<a href="konkurs.php">��������</a>
						</li>
						<li>
							<a href = "diary.php">�������</a>
						</li>
					</ul>
				</menu>
			</aside>
			<article>
				<?php
					if (!isset($_SESSION['user_id'])){
						echo '<h3>����������������� ��� ������� � �������</h3>';
					}
				?>
				<h2>������� ����������</h2>
					<h3>����������� ��� ��������, ��������� ����������� �� 2-4 �������</h3>
						<table border="1" cellpadding="4" cellspacing="0">
						<tr>
							<th colspan="4" class="a">����������� ������ �1</th>
							<th colspan="4" class="a">����������� ������ �2</th>
						</tr>
						<tr>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 2</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 2</th>
						</tr>
						<tr>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
						</tr>
						<tr>
							<td>				<?php 
													$sql_select = "SELECT Test1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test1']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_1']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test2 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test2']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_2 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_2']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test1']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_1']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test1']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_1 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_1']);
												?>
							</td>
						</tr>
						<tr>
							<th colspan="4" class="a">����������� ������ �3</th>
							<th colspan="4" class="a">����������� ������ �4</th>
						</tr>
						<tr>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 2</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 2</th>
						</tr>
						<tr>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
						</tr>
						<tr>
							<td>				<?php 
													$sql_select = "SELECT Test3 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test3']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_3 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_3']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test4 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test4']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_4 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_4']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test3 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test3']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_3 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_3']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test4 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test4']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_4 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_4']);
												?>
							</td>
						</tr>
					</table>
					<h3>����������� ��� ��������, ��������� ����������� � 5 ������</h3>
						<table border="1" cellpadding="4" cellspacing="0">
						<tr>
							<th colspan="2" class="a">���� 1.2</th>
							<th colspan="2" class="a">���� 1.3</th>
							<th colspan="2" class="a">���� 2.1</th>
							<th colspan="2" class="a">���� 2.2</th>
							<th colspan="2" class="a">���� 2</th>
						</tr>
						<tr>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 1</th>
						</tr>
						<tr>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
						</tr>
						<tr>
							<td>				<?php 
													$sql_select = "SELECT Test5 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test5']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_5 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_5']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test6 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test6']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_6 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_6']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test7 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test7']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_7 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_7']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test8 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test8']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_8 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_8']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test9 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test9']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_9 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_9']);
												?>
							</td>
						</tr>
						<tr>
							<th colspan="2" class="a">���� 3</th>
							<th colspan="8" class="a">���� 4</th>
						</tr>
						<tr>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 1</th>
							<th colspan="2" class="b">������� 2</th>
							<th colspan="2" class="b">������� 3</th>
							<th colspan="2" class="b">������� 4</th>
						</tr>
						<tr>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
							<th class="c">������</th>
							<th class="d">���. �������</th>
						</tr>
						<tr>
							<td>				<?php 
													$sql_select = "SELECT Test10 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test10']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_10 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_10']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test11 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test11']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_11 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_11']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test12 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test12']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_12 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_12']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test13 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test13']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_13 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_13']);
												?>
							</td>
							<td>				<?php 
													$sql_select = "SELECT Test14 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['Test14']);
												?>
							</td>
							<td>
												<?php 
													$sql_select = "SELECT col_14 FROM diary WHERE user_id = " . $_SESSION['user_id'];
													$result = mysql_query($sql_select);
													$row = mysql_fetch_array($result);
													printf($row['col_14']);
												?>
							</td>
						</tr>
					</table>
					
			</article>
		</div>
		<footer>
			&copy; 2015
		</footer>
	</body>
</html>