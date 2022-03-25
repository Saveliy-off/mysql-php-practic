<?php

$db = mysqli_connect('localhost', 'root', '', 'root');

$name = $_POST['name'];
$group = $_POST['group'];
$pol = $_POST['pol'];
$zanatioe = $_POST['zanatioe'];

$query = "INSERT INTO `zayavka`(`name`, `groups`, `pol`, `zanatie`) VALUES ('$name','$group','$pol','$zanatioe')";

mysqli_query($db, $query);


header('Location: index.php');