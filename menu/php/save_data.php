<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 07.09.16
 * Time: 3:13
 */
session_start();

save_data();

function save_data(){
    $conn=new mysqli('localhost','root','9340126abc','chat');
    $user=json_decode($_POST['user']);
    $nick=$user->{'nick'};
    $about=$user->{'about'};
    $query="UPDATE users SET name='".$nick."' ,about='".$about."' WHERE  login='".$_SESSION['login']."'";
    //$query="UPDATE users SET name='AD' WHERE  login='".$_SESSION['login']."'";
    $result=$conn->query($query);

    return $nick;
}

?>