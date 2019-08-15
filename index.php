<?php
function hello() #Сбор данных пользователя
{
    global $name;
    global $age;
    global $gender;
    $a = 0;
    echo "<h1>Привет! Я электронный психодиагност \nVersion 1.0 \nРазработчик: Ovchinnikov Alexey (c)</h1>";
    echo '<div id=main>
		<form method="post">
		<p>Имя: <input type="text" name="name" /></p>
		<p>Возраст: <input type="text" name="age" /></p>
		<p><input type="submit" name="submit" value="Ок" /></p>
		</form>
		</div>';
	$name = $_POST ['name'];
	$age = $_POST ['age'];
	echo 'Добро пожаловать в мир психологии, ', $name, ' :)';
	whattest();
}
		/*
	$name = input("\nКак Вас зовут? ")
    while (a==0):
        age  = input("Сколько Вам лет? ")
        try:
            age = int(age)
            if (age<100)==True:
                a=1
            else:
                print("\nНевер	ная команда")
        except (ValueError, TypeError):
            print("\nНеверная команда")
    while (a==1):    
        sex = input("Укажите Ваш пол (м/ж): ")
        if (sex=="м")==True or (sex=="ж")==True:
            a = 0
        else:
            print("\nНеверная команда")
    whattest()
	*/
hello();

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