<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 22.08.16
 * Time: 14:59
 */

$login= $_POST['login'];
$password= $_POST['pass'];
$repassword=$_POST['repass'];
$nickname=$_POST['nick'];


if(check_login($login)==1){
    exit('Такой логин уже существует');
}
if(check_password==1){
    exit('Пароль и повторный пароль не совпадают');
}

echo 'Зарегано!';

function registration_user($login,$password,$nickname){

}

function check_password($pass,$repass){
    if($pass==$repass) return 0;
    return 1;
}

function check_login($login){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT * FROM users WHERE login='".$login."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM);

    $getLogin=$row[1];

    if($getLogin!=$login){
        return 1;
       // exit('Введёт не верный логин');
    }
    return 0;
}