<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 06.09.16
 * Time: 2:23
 */
session_start();

$login=$_SESSION['login'];

getData($login);

function getData($login){

    $data=array();

    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT * FROM users WHERE login='".$login."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    echo $row.count();
}