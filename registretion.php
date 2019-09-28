<?php 
	session_start();
  if(isset($_SESSION['user_id'])){
	header("Location: informg.php");
	exit;
  }
	$connect = mysql_connect ('localhost','root') or die(mysql_error());
	mysql_select_db('register');
	$data = $_POST;
	$msg="";
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$login = $_POST['login'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$r_password = $_POST['r_password'];
		$query = mysql_query("SELECT * FROM users WHERE login = '{$login}'");
		//echo $query;
		if ($query){
			$msg="Пользователь с таким логином уже существует!";
		} else {
			if ($password == $r_password){
				$password = md5($password);
				$query = mysql_query("INSERT INTO users VALUES('','$username','$login','$email','$password')") or die(mysql_error());
				$query = mysql_query("INSERT INTO diary VALUES('" . $_SESSION['user_id'] . "','','','','')") or die(mysql_error());
				header("Location: informg.php");
				exit;
			}
			else {
				$msg = "Пароли не совпадают";
			}
		}
	}
?>
<html>
	<body style="margin:0px 0px; padding:0px 0px; background-color: #383d44;">
	<div style="margin:200px auto; width:40%;  background-color:#f9f9f9; padding:20px; text-align:center; border-radius:10px;">
		<h1 style = "color:#666666; font-size: 150%;">Регистрация</h1>
		<form action="registretion.php" method="post">
			<span style="float:left; margin-right:25.5%; font-size:120%;">Имя:</span><input type="text" name="username" value="<?php echo @$data['username'];?>" placeholder="Username" requered  style="float:left; padding : 0.5em; border-radius: 5px; outline:0;"/> <br/><br/><br/> 
			<span style="float:left; margin-right:22.5%; font-size:120%;">Логин:</span><input type="text" name="login" value="<?php echo @$data['login'];?>" placeholder="Login" requered style="float:left; padding : 0.5em; border-radius: 5px; outline:0;"/> <br/><br/><br/>
			<span style="float:left; margin-right:17.5%; font-size:120%;">Эл. почта:</span><input type="email" name="email" value="<?php echo @$data['email'];?>" placeholder="E-Mail" requered style="float:left; padding : 0.5em; border-radius: 5px; outline:0;"/> <br/><br/><br/>
			<span style="float:left; margin-right:21%; font-size:120%;">Пароль:</span><input type="password" name="password"  placeholder="Password" requered style="float:left; padding : 0.5em; border-radius: 5px; outline:0;"/> <br/><br/><br/>
			<span style="float:left; margin-right:5%; font-size:120%;">Повторите пароль:</span><input type="password" name="r_password"  placeholder="Repead password" requered style="float:left; padding : 0.5em; border-radius: 5px; outline:0;" /> <br/><br/><br/>
			<div style ="margin:3% auto; text-align:left; "><input type="submit" name="submit" value="Зарегистрироваться" style ="margin:3% auto; text-align:center; background-color: #45858e; border-radius: 5px; padding: 0.5em; color :#fcfcfc; width: 99%; border: 2px solid #45858e; outline:0; cursor:pointer; font-size: 110%;"/></div>
		</form>	
		<font color="red" size="-1"><?php echo $msg; ?></font><br/>
		<a href = "login.php">Войти</a>
	</div>
	</body>
</html>
