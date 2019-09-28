<?php
setcookie("TestCookie", "My name", time()+3600);
?>
<html>
	<body>
		<h1>Hello world!</h1>
		<h2><?php
			$f_a = array ("from","ot" => "and");
			class people {
				public $liza = "Elizabeth";
				public $anya = "Anya";
			}
			$people = new people;
			echo "$f_a[0] $people->liza";
			echo " $f_a[ot] $people->anya";
		?></h2>
		<p><?= $_COOKIE['TestCookie']; ?></p>
		<span>
			<?php
    echo '<pre>';
    echo htmlspecialchars(print_r($_REQUEST, true));
    echo '</pre>';
?>

<?php 
	$connect = mysql_connect ('localhost','root') or die(mysql_error());
	mysql_select_db('register');
	$data = $_POST;
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$login = $_POST['login'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$r_password = $_POST['r_password'];
		if ($password == $r_password){
			$password = md5($password);
			$query = mysql_query("INSERT INTO users VALUES('','$username','$login','$email','$password')") or die(mysql_error());
		}
		else {
			die ('Password must match');
		}
	}
?>
<form action="" method="post">
    Имя:  <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Пиво: <br />
    <select multiple name="beer[]">
        <option value="warthog">Warthog</option>
        <option value="guinness">Guinness</option>
        <option value="stuttgarter">Stuttgarter Schwabenbräu</option>
    </select><br />
    <input type="submit" value="Отправь меня!" />
</form>
		</span>
		<form action="registretion.php" method="post">
			<input type="text" name="username" value="<?php echo @$data['username'];?>" placeholder="Username" requered /> <br/> 
			<input type="text" name="login" value="<?php echo @$data['login'];?>" placeholder="Login" requered /> <br/>
			<input type="email" name="email" value="<?php echo @$data['email'];?>" placeholder="Login" requered /> <br/>
			<input type="password" name="password"  placeholder="Password" requered /> <br/>
			<input type="password" name="r_password"  placeholder="Repead password" requered /> <br/>
			<input type="submit" name="submit" value="Register" />
		</form>
		
	</body>
</html>