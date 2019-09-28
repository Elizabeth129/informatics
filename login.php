<?php
  session_start();
  if(isset($_SESSION['user_id'])){
	header("Location: informg.php");
	exit;
  }
  if ( isset($_POST['login']) && isset($_POST['pass']) ) {
	#$link = mysqli_connect("127.0.0.1", "root", "", "register");
	mysql_connect("127.0.0.1", "root", "");
	mysql_select_db("register");
	/* проверка подключения */
	/*if (mysqli_connect_errno()) {
		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		exit();
	}*/
	$password = md5($_POST['pass']);
	@$result = mysql_query("SELECT id,username from users where login='".$_POST['login']."' and password='".$password."'");
	#print ("SELECT id from users where login='".$_POST['login']."' and pass='".$_POST['pass']."'");
    #echo '<pre>';
    #echo htmlspecialchars(print_r($result, true));
    #echo '</pre>';
	@$user_id = mysql_result($result,0,"id");
	@$user_name = mysql_result($result,0,"username");
	if($user_id){
		$_SESSION['user_id'] = $user_id;
		$_SESSION['user_name'] = $user_name;
		$msg = "Логин и пароль верны!";
		header("Location: informg.php");
		exit;
	}else{
		$msg="Логин или пароль заданы неверно!";
	}
  } else {$msg="";}
?>
<html>
<head>
<title>.: login :.</title>
</head>
<body style="margin:0px 0px; padding:0px 0px; background-color: #383d44;">

	<div style="margin:200px auto; width:40%;  background-color:#f9f9f9; padding:20px; text-align:center; border-radius:10px;">
		<h1 style = "color:#666666; font-size: 150%;">Вход</h1>
		<form action="?" method="POST" style="margin:0px 0px; padding:0px 0px;">
			<label style="margin: 10px auto; display:block;"><span style="float:left; margin-right:5%; font-size:120%;">Логин:  </span> <input type="text" name="login" style="float:left; padding : 0.5em; border-radius: 5px; outline:0;" /></label> </br><br/><br/>
			<label style="margin: 10px auto; display:block;"><span style="float:left; margin-right:4%; font-size:120%;">Пароль:</span> <input type="password" name="pass"  style="float:left; padding : 0.5em; border-radius: 5px; outline:0;"/></label><br/><br/><br/>
		<div  style ="margin:3% auto; text-align:left;  " ><input type="submit" value="Войти" style ="margin:3% auto; text-align:center; background-color: #45858e; border-radius: 5px; padding: 0.5em; color :#fcfcfc; width: 99%; border: 2px solid #45858e; outline:0; cursor:pointer; font-size: 110%;"/></div>
		</form>
	<font color="red" size="-1"><?php echo $msg; ?></font><br/>
	<a href = "registretion.php">Зарегистрироватся</a>
	</div>

</body>
</html>