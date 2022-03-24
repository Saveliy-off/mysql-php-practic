<?php

$one = $_POST['exampleInputEmail1'];
$two = $_POST['exampleInputPassword1'];
$exampleCheck1 = $_POST['exampleCheck1'];

if ($one == 'Strong' && $two == 'qwe123') {
    echo 'Вы вошли в систему '.$one;
    if ($exampleCheck1 == 'on') {
        echo '<br><p>Мы запомнили вас</p>';
    } else{
        echo '<br><p>Мы не запомнили вас</p>';
    }
}else{
    echo 'Вы ввели неверный пароль или логин!';
}