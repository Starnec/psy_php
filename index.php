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
	echo 'Добро пожаловать в мир психологии, ', $name, ' :)';

function whattest() #Выбор теста
{
    echo "\nКакой тест Вы хотите пройти?\
\n1 - Шкала депрессии Бека\n2 - Шкала тревоги Спилбергера-Ханина\n
3 - MMPI (СМИЛ)\n4 - Анализ семейных взаимоотношений\n5 - Я устал от тестов. 
Давайте завершим.\n";
    echo '<form method="post">
		<p>Ваш ответ: <input type="text" name="wtest" /></p>
		<p><input type="submit" name="submit" value="Ок" /></p>
		</form>';
	$wtest = $_POST ['wtest'];
	if ($wtest == "1") {
        scaleBek();
    } elseif ($wtest == "2") {
        trevogaSH();
    } elseif ($wtest == "3") {
        mmpi();
    } elseif ($wtest == "4") {
        asv();
    } elseif ($wtest == "5") {
        echo "\nУдачи Вам! :)";
        exit(0);
    } else {
        echo "\nНеверная команда";
        //whattest();
	}	
}
function scaleBek()
{
	echo 'scaleBek';
}
function trevogaSH()
{
	echo 'Тревога';
}
function mmpi()
{
	echo 'СМИЛ';
}
function asv()
{
	echo 'АСВ';
}
	?>
	</body>
</html>