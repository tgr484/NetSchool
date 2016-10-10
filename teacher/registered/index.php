<html>
    <head>
        <title>Выбор даты</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		 <link href="style.css" rel="stylesheet" media="screen">
	</head>
	<body>
	<?
		function echo_nums($n)
		{
			$i = 1;
			while ($i < $n+1)
			{
				echo "<option value='".$i."'>".$i."</option>";
				$i++;
			}
		}
	?>
	
	<div >
		<form align="center" action="register.php" method="GET">
			<select  name="d">
			<option selected disabled>Выберите дату</option>
				<? echo_nums(date("t"))?>
			</select>
			<select name="m">
				<option selected disabled>Выберите месяц</option>
				<? echo_nums(12)?>
			</select>
			<input class="submit" type="submit" value="Показать"></input>
		</form>
	</div>

	</body>
</html>