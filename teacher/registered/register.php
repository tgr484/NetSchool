<html>
    <head>
        <title>Запись на консультацию</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		 <link href="style.css" rel="stylesheet" media="screen">
		
    </head>
    <body>
	
		
			
			<div class="content">
				
				<?php

				$dbconnect =  mysql_connect(localhost,sdo,ZyZEzPSTENKqWqSB);
				$db_selected = mysql_select_db('sdo', $dbconnect);
				mysql_query("SET NAMES utf8");
									
					if ($dbconnect)
					{						
						
						//echo $query;
						
						//шапка даты
						echo "<table>";
						echo "<thead><tr><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Поток</th><th>E-mail</th><th>Телефон</th><th>Организация</th><th>Город</th></tr></thead>";
						$query = "select * from zayavki_bgpu";//Case or If
						
						$result = mysql_query($query);
						 while ($row = mysql_fetch_assoc($result)) 
						 {
								echo "<thead><tr><th>".$row["fam"]."</th><th>".$row["nam"]."</th><th>".$row["ot"]."</th><th>".$row["potok"]."</th><th>".$row["emai"]."</th><th>".$row["tel"]."</th><th>".$row["org"]."</th><th>".$row["city"]."</th><th>".date(c,$row["time"])."</th></tr></thead>";
							}
						if (!$result) 
						{
							echo "Could not successfully run query ($sql) from DB: " . mysql_error();//	mktime(часы, минуты, секунды, месяц, день, год)
							exit;
						}
				
						
			
						
						$row = mysql_fetch_assoc($result);
						
						//wb\\while fr\etch
						//echo '</form>';
						echo "</table>";		
							
					}
					mysql_free_result($result);
					mysql_close($dbconnect);
				?>
				
			</div>
		
    </body>
</html>