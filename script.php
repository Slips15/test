<?php
$dbh = new PDO('mysql: host=localhost; dbname=test_bd', 'root', '');


        
$name = filter_var(trim($_POST['name']),
        FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),
        FILTER_SANITIZE_STRING);
$patronymic = filter_var(trim($_POST['patronymic']),
        FILTER_SANITIZE_STRING);
$age = filter_var(trim($_POST['age']),
        FILTER_SANITIZE_STRING);


$dbh->query("INSERT INTO info SET name = '$name', surname = '$surname', patronymic = '$patronymic', age = '$age' ");
$sth = $dbh->query('SELECT * FROM info');

foreach ($sth as $row) {
  print_r($row);
}