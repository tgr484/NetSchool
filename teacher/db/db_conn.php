<?php
	$dbconnect = mysql_connect('localhost', 'root', '');
	if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
	$db_selected = mysql_select_db('rs', $dbconnect);
	if (!$db_selected) {
   		 die ('Не удалось выбрать базу foo: ' . mysql_error());
	}
?>