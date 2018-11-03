<?php
/**
 * Created by PhpStorm.
 * User: vadimpopov
 * Date: 03/11/2018
 * Time: 13:17
 */

$hostname = 'localhost';
$username = "admin";
$password = "admin";
$dbName = "phisicsSQL";
/* создать соединение */
mysql_connect($hostname,$username,$password) OR DIE("Не могу создать соединение ");


?>