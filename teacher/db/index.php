<html>
    <head>
        <title>Зарегистрированные на курсы</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		 <link href="style.css" rel="stylesheet" media="screen">
		<script>
			var time = 0;
			function show_form(t)
			{
				document.getElementById("form").hidden = false;
				time = t;
			}
			function send()
			{
				$.ajax({
					type: "GET",
					url: "add.php",
					data: {
						t : time,
						fio: ""
						
					}
					
				});
			}
		</script>
    </head>
    <body>
	
		
			
			<div class="content">
				
				<?php

				$dbconnect = mysql_connect("89.189.153.93:3306", "root", "gncL_G04");
				if (!$dbconnect) { echo ("Не могу подключиться к серверу базы данных!"); }
				 $db_selected = mysql_select_db('net_school', $dbconnect);
				if (!$db_selected) {
				die ('Не удалось выбрать базу: ' . mysql_error());
				}				
					if ($dbconnect)
					{						
						
						//echo $query;
						$query = "SELECT * FROM !!!";	
						$result = mysql_query($query);						
						echo "<table>";
						echo "<thead><tr><th>ФИО</th><th>Поток</th></tr></thead>";
												
						$row = mysql_fetch_assoc($result);
						
						while ($row = mysql_fetch_assoc($result)) {
							echo '<tr><td>'.$row['fam'].$row['nam'].$row['ot'].'</td><td>'.$row['potok'].'</td></tr>';

						}
        
						mysql_free_result($result);
						
						echo "</table>";		
							
					}
					mysql_free_result($result);
					mysql_close($dbconnect);
				?>
				
				<!--<form action="add.php" method = "post">
					<p>Выберите время</p>
					<select name="time">
						//<?
							//in_opt(8);
						//?>
					</select>
					<p>ФИО</p>
					<input name="fio"></input>
					<input type="submit" ></input>
				</form>-->
			</div>
		
    </body>
</html>