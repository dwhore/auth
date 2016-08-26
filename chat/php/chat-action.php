<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 25.08.16
 * Time: 15:36
 */
session_start();
$message=$_POST['msg'];
$nickname=getUserNickByLogin($_SESSION['login']);

saveMessage(getUserId($_SESSION['login']),$message);

$count=getMessages();



//echo $nickname. ': ' .$message. ' Msgs: ' .$count;
echo "";

function getUserNickByLogin($login){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT name FROM users WHERE login='".$login."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM);
    $nickname=$row[0];

    return $nickname;
}

function getUserNickByUserId($id){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT name FROM users WHERE id_key='".$id."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM);
    $nickname=$row[0];

    return $nickname;
}

function getUserId($login){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT id_key FROM users WHERE login='".$login."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM);
    $id=$row[0];

    return $id;
}

function saveMessage($id_user,$message){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="INSERT INTO msgs VALUES ('0','".$id_user."','".$message."')";
    $mysqli->query($query);
}

function getMessages(){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT id_user,msg FROM msgs";
    $result=$mysqli->query($query);
    $data="gg";
    while($row=$result->fetch_assoc()){
        printf('<li><a class="nick">%s</a>: <a class="message">%s</a></li><br>', getUserNickByUserId($row['id_user']),$row['msg']);
    }

    return $data;
}
?>