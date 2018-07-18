
<?php


$driver = 'mysql';
$host = 'localhost';
$db_name = 'english';
$db_user = 'admin';
$db_pass = 'fepipe76!!QQ';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
$pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", // Создание объе$
$db_user,
$db_pass,
$options);
}catch(PDOException $e){
exit("Нет подключения к DATABASE");
}