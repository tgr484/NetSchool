<?php
	$dbconnect = mysql_connect('localhost', 'root', '');
	if (!$dbconnect) { echo ("�� ���� ������������ � ������� ���� ������!"); }
	$db_selected = mysql_select_db('rs', $dbconnect);
	if (!$db_selected) {
   		 die ('�� ������� ������� ���� foo: ' . mysql_error());
	}
?>