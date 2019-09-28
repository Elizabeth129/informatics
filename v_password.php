<?php 
	session_start();
  if(isset($_SESSION['user_id'])){
	header("Location: informg.php");
	exit;
  }
	$connect = mysql_connect ('localhost','root') or die(mysql_error());
	mysql_select_db('register');
	$data = $_POST;
	if (isset($_POST['submit'])){
		$query = mysql_query("SELECT * FROM users WHERE login = '{$_POST['login']}'");
		if ($query){
			$simvols = array ("0","1","2","3","4","5","6","7","8","9",
                        "a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z",
                        "A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
			$string='';
			for ($key = 0; $key < 6; $key++){
				shuffle ($simvols);
				$string = $string.$simvols[1];
			}
			$password = md5($string);
			$query = "UPDATE `users` SET `password`='{$password}' WHERE `login`='{$_POST['login']}' ";
			$sql = mysql_query($query) or die(mysql_error());
			$query = "SELECT `email` FROM `users` WHERE `login`='{$_POST['login']}' LIMIT 1";
			$sql = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_assoc($sql);
			$to ="liza22092001@rambler.ru";
			$subject="test";
			$message="test messager";
			$headers="FROM: Test\r\n MIME-Version: 1.0\r\n Content-type: text/html; charset=windows-1251";
			mail($to,$subject, $message, $headers);
		}
	}
	
?>

<html>
	<body>
		<form action="v_password.php" method="post">
			<input type="text" name="login" value="<?php echo @$data['login'];?>" placeholder="Login" requered /> <br/>
			<input type="email" name="email" value="<?php echo @$data['email'];?>" placeholder="E-Mail" requered /> <br/>
			<input type="submit" name="submit" value="Востановить пароль" />
		</form>	
	</body>
</html>
