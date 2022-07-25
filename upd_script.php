<?php

$dbh = new PDO('mysql: host=localhost; dbname=test_bd', 'root', '');

$id = $_POST['id'];
$name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),
        FILTER_SANITIZE_STRING);
$patronymic = filter_var(trim($_POST['patronymic']),
        FILTER_SANITIZE_STRING);
$age = filter_var(trim($_POST['age']),
        FILTER_SANITIZE_STRING);


$dbh->query("UPDATE `info` SET `name`= '$name', `surname`= '$surname', `patronymic`= '$patronymic', `age`= '$age' WHERE `info`.`id`= $id ");

