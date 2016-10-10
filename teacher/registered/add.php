<?php 			
	//header('Content-Type: text/html; charset= utf-8');
	if (isset($_GET["t"]))
	{
		$dbconnect = mysql_connect('localhost', 'root', '');
		if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
		$db_selected = mysql_select_db('rs', $dbconnect);
		if (!$db_selected) 
		{
			die ('Не удалось выбрать базу foo: ' . mysql_error());
		}
		mysql_query("SET NAMES utf8");
		$sql = "INSERT INTO  `data` (  `time` ,  `day` ,  `month` ,  `who` ) VALUES ( '".$_GET["t"]."',  '".date("j")."',  '".date("n")."',  '".$_GET["fio"]."')";
		
		$result = mysql_query($sql);
		if (!$result) 
						{
							echo "Could not successfully run query ($sql) from DB: " . mysql_error();
							exit;
						}
		echo "Вы успешно зарегистрировались";
		
	
		mysql_close($dbconnect);
		echo "<meta http-equiv='refresh' content='2; url=/rs/register.php'>";
	}
?>