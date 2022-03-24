<?php

session_start();

$name = $_POST['name'];

echo 'Добрый день! '. $_SESSION['user']['name'] . ' Вот ваша заявка:<br>';

if ($_SESSION['user']['pol'] == 'm') {
	echo 'Ваш пол: Мужской<br>';
}else{
	echo 'Ваш пол: Женский<br>';
}
if ($_SESSION['user']['group'] == 't1') {
	echo 'Ваша группа: ПИ 11<br>';
}elseif($_SESSION['user']['group'] == 't2'){
	echo 'Ваша группа: ПИ 21<br>';
}else{
	echo 'Ваша группа: ПИ 31<br>';
}
echo 'Вот чем вы хотите заняться ' . $_SESSION['user']['zanatie'];