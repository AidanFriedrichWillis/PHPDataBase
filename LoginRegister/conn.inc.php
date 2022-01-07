<?php
// $dsn = 'mysql:host=localhost;dbname=b7020211_db3';
// $user = 'b7020211';
// $password = 'Yasuo1';
// $dsn = 'mysql:host=localhost;dbname=id18099736_login';
// $user = 'id18099736_users';
// $password = 'F?WO|KAaO9^R%D%h';
$dsn = 'mysql:host=localhost;dbname=login';
$user = 'root';
$password = '';

try {
$pdo = new PDO($dsn, $user, $password);
$pdo ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo ->exec("SET CHARACTER SET utf8");
}
catch (PDOException $e) {
echo 'Connection failed again: ' . $e->getMessage();
}
?>