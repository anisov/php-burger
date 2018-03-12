<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 11.03.2018
 * Time: 1:38
 */

$config = include('config.php');
$config = $config['db'];

$host = $config["host"];
$db = $config["dbname"];
$charset = $config["charset"];
$user = $config["user"];
$password = $config["password"];

$dsn = "mysql:host=$host; dbname=$db;charset=$charset";

try {
    $DBH = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

