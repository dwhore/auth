<?php
/**
 * Created by PhpStorm.
 * User: paul
 * Date: 21.08.16
 * Time: 2:11
 */
session_start();

$login=$_POST['login'];
$password=$_POST['pass'];

if(empty($login) or empty($password)){
    exit('Вы ввели не всю информацию , вернитесь назад');
}

$_SESSION["login"]=$login;
$_SESSION["pass"]=$password;


if(checkUser($login,$password)==0){
    header('Location:/chat/chat.php');
    echo 'Вы зашли! '.$_SESSION['nick'];

}
else if(checkUser($login,$password)==1){
    exit('Введёт не верный логин');
}
else if(checkUser($login,$password)==2){
    exit('Введен неверный пароль');
}


function checkUser($login , $pass){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    //$mysqli=new mysqli('localhost','k96147i6_dwor','dwor2016','k96147i6_dwor');
    $query="SELECT * FROM users WHERE login='".$login."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM); //преобразование в массив строку

    $getLogin=$row[1];
    $getPassword=$row[2];

    if($getLogin!=$login){
        return 1;

    }
    if($getPassword!=$pass){
        return 2;

    }

    return 0;
}

?>