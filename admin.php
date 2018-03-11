<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 11.03.2018
 * Time: 17:04
 */
require('models/admin-models.php');
$users = getAllUser($DBH);
$orders = getAllOrder($DBH);

echo "<h2>Список пользователей</h2>";

foreach ($users as $user) {
    echo '<table width="40%" border="1px solid black" cellspacing="0" cellpadding="0">';
    foreach ($user as $key => $value) {
        echo "<tr>
                <td width = '30%'>$key</td>
                <td>$value</td>
               </tr>";
    }
    echo "</table>";
    echo "<br>";
}


echo "<h2>Список зазов</h2>";
foreach ($orders as $order) {
    echo '<table width="40%" border="1px solid black" cellspacing="0" cellpadding="0">';
    foreach ($order as $key => $value) {
        if ($key == 'money') {
            if ($value == 1) {
                echo "<tr>
                <td width = '30%'>$key</td>
                <td>Потребуется сдача</td>
               </tr>";
            } else {
                echo "<tr>
                <td width = '30%'>$key</td>
                <td>Оплата по карте</td>
               </tr>";
            }
            continue;
        }
        if ($key == 'callback') {
            if ($value == 1) {
                echo "<tr>
                <td width = '30%'>$key</td>
                <td>Не перезванивать</td>
               </tr>";
            } else {
                echo "<tr>
                <td width = '30%'>$key</td>
                <td>Перезванивать</td>
               </tr>";
            }
            continue;
        }
        echo "<tr>
                <td width = '30%'>$key</td>
                <td>$value</td>
               </tr>";
    }
    echo "</table>";
    echo "<br>";
}
