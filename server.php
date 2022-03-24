<?php

session_start();

$name = $_POST['name'];
$group = $_POST['group'];
$pol = $_POST['pol'];
$zanatioe = $_POST['zanatioe'];

$_SESSION['user'] = [
'name' => $name,
'group' => $group,
'pol' => $pol,
'zanatie' => $zanatioe
];

header('Location: index.php');