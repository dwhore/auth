<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 21.08.16
 * Time: 2:11
 */

$mysqli=new mysqli('localhost','root','9340126abc','chat');

$query='SELECT * FROM users';
$result=$mysqli->query($query);
$row=$result->fetch_array(MYSQLI_NUM); //преобразование в массив строку
printf ("ID(%s) LOGIN(%s) PASS(%s) NICKNAME(%s)\n", $row[0], $row[1],$row[2],$row[3]);

?>