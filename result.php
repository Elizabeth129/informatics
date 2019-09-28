<?php
session_start();
if(isset($_POST['score'])) {

    //header("Content-type: text/txt; charset=UTF-8");

  //if($_POST['score']=='1') {

        echo 'запрос POST успешно обработан; Test' . $_POST['Test'] . ' score: ' . $_POST['score'];
		$_SESSION['Test1'] = $_POST['score'];
		mysql_connect("127.0.0.1", "root", "");
		mysql_select_db("register");
		//echo "$_POST['score']";
		if (mysqli_connect_errno()) {
		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		exit();}
		$query = mysql_query("SELECT user_id FROM `diary` WHERE user_id = 3") or die(mysql_error());
		echo $query;
		if ($query){
			if ($_POST['Test'] == 1)
				$query = mysql_query("UPDATE diary SET Test1 = " . $_POST['score'] . ", col_1 = col_1 + 1 WHERE user_id = " . $_SESSION['user_id'] ) or die(mysql_error());
			if ($_POST['Test'] == 2)
				$query = mysql_query("UPDATE diary SET Test2 = " . $_POST['score'] . ", col_2 = col_2 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 3)
				$query = mysql_query("UPDATE diary SET Test3 = " . $_POST['score'] . ", col_3 = col_3 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 4)
				$query = mysql_query("UPDATE diary SET Test4 = " . $_POST['score'] . ", col_4 = col_4 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 5)
				$query = mysql_query("UPDATE diary SET Test5 = " . $_POST['score'] . ", col_5 = col_5 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 6)
				$query = mysql_query("UPDATE diary SET Test6 = " . $_POST['score'] . ", col_6 = col_6 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 7)
				$query = mysql_query("UPDATE diary SET Test7 = " . $_POST['score'] . ", col_7 = col_7 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 8)
				$query = mysql_query("UPDATE diary SET Test8 = " . $_POST['score'] . ", col_8 = col_8 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 9)
				$query = mysql_query("UPDATE diary SET Test9 = " . $_POST['score'] . ", col_9 = col_9 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 10)
				$query = mysql_query("UPDATE diary SET Test10 = " . $_POST['score'] . ", col_10 = col_10 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 11)
				$query = mysql_query("UPDATE diary SET Test11 = " . $_POST['score'] . ", col_11 = col_11 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 12)
				$query = mysql_query("UPDATE diary SET Test12 = " . $_POST['score'] . ", col_12 = col_12 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 13)
				$query = mysql_query("UPDATE diary SET Test13 = " . $_POST['score'] . ", col_13 = col_13 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
			if ($_POST['Test'] == 14)
				$query = mysql_query("UPDATE diary SET Test14 = " . $_POST['score'] . ", col_14 = col_14 + 1 WHERE user_id = " . $_SESSION['user_id']) or die(mysql_error());
		} else {
			if ($_POST['Test'] == 1)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','" . $_POST['score'] . "','','','','','','','','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 2)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','" . $_POST['score'] . "','','','','','','','','','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 3)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 4)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 5)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 6)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 7)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 8)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 9)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 10)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 11)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 12)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','','','')") or die(mysql_error());
			if ($_POST['Test'] == 13)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','','','')") or die(mysql_error());
			if ($_POST['Test'] == 14)
				$query = mysql_query("INSERT INTO diary VALUES ('" . $_SESSION['user_id'] . "','','','','','','','','','','','','','','','','','','','','','','','','','','','"  . $_POST['score'] . "','')") or die(mysql_error());
			
			
			
		}
		
    
  }
    else {

        echo 'карявый POST запрос';

    }

//}



	/*session_start();
	echo "dsfadf".$_POST['score'];
	if(isset($_POST['score'])){
		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		mysql_connect("127.0.0.1", "root", "");
		mysql_select_db("diary");
		//echo "$_POST['score']";
		if (mysqli_connect_errno()) {
		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
		exit();
		$query = mysql_query("INSERT INTO 2_kr1 VALUES('$_SESSIONS['user_id']','$_POST['score']')") or die(mysql_error());
	} else {
		printf("Не удалось подключиться: %s\n", mysqli_connect_error());
	}*/
?>