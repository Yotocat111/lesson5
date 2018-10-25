<?php
$name = "Егор";
$age = 24;
$email = "e.grafow@yandex.ru";
$city = "Красногорск";
$about = "Обучаюсь на netology.ru";	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Страница пользователя <?= $name ?></h1>
	<dl>
		<dt>Имя</dt>
		<dd><?= $name ?></dd>
		<dt>Возраст</dt>
		<dd><?= $age ?></dd>
		<dt>Адрес электронной почты</dt>
		<dd><a href="#"><?= $email ?></a></dd>
		<dt>Город</dt>
		<dd><?= $city ?></dd>
		<dt>О себе</dt>
		<dd><?= $about ?></dd>
	</dl>
</body>
</html>



<hr>
/*Дополнительное задание */


<?php
$x = rand(0,100);
echo(x);
$fist = 1;
$second = 1;
if($fist > $x){
	echo("Задуманное число НЕ входит в числовое ряд");
}
elseif($fist < $x) {
	if($fist==$x){
		echo("задуманное число входит в числовой ряд");
	}
else{
$z=$fist;
	$fist+=$second;
	$second=$z;	
}
}
?>