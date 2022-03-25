<?php

$name = $_POST['name'];


$db = mysqli_connect('localhost', 'root', '', 'root');

$result = mysqli_query($db, "SELECT * FROM `zayavka` WHERE `name`='$name'");
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
        echo '<h1>Вот ваша заявка:</h1><br>';
		echo '<div class="box"><h2>Добрый день! '. $row['name'] . '<br>';

	if ($row['pol'] == 'm') {
		echo 'Ваш пол: Мужской<br>';
	}else{
		echo 'Ваш пол: Женский<br>';
	}
	if ($row['groups'] == 't1') {
		echo 'Ваша группа: ПИ 11<br>';
	}elseif($row['groups'] == 't2'){
		echo 'Ваша группа: ПИ 21<br>';
	}else{
		echo 'Ваша группа: ПИ 31<br>';
	}
	echo 'Вот чем вы хотите заняться: ' . $row['zanatie'] . '</h2></div>';
}else{
	echo '<img src="1.gif" alt="">';
}