<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 11.03.2018
 * Time: 1:38
 */

$host = '127.0.0.1:3307';
$db = 'burger';
$user = 'root';
$password = '';
$charset = 'utf8';
$dsn = "mysql:host=$host; dbname=$db;charset=$charset";

try {
    $DBH = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die('Подключение не удалось: ' . $e->getMessage());
}

