<?php
	session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Электронный психодиагност 1.0</title>
		<! <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> >
		<! <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> >
        <link rel="stylesheet" type="text/css" href="style.css"> 
		<meta charset="utf-8"/>
    </head>
    
    <body>
		<h1>Привет! Я электронный психодиагност<br>
		    Version 1.0<br>
		    Разработчик: Ovchinnikov Alexey (c)</h1><br><br>
			
		<div id=main>
			<form action="template/select.php" method="get">
				<p>Имя: <input type="text" name="name" /></p>
				<p>Возраст: <input type="text" name="age" /></p>
				<p><input type="submit" name="submit" value="Ок" /></p>
			</form>
		</div>
		<?php
			$name = $_GET ['name'];
			$age = $_GET ['age'];
			$_SESSION['name'] = $name;
			$_SESSION['age'] = $age;
		?>
	</body>
</html>