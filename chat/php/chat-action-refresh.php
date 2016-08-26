<?php
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 26.08.16
 * Time: 3:05
 */
$data=getMessages();
echo $data;




function getUserNickByUserId($id){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT name FROM users WHERE id_key='".$id."'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array(MYSQLI_NUM);
    $nickname=$row[0];

    return $nickname;
}

function getMessages(){
    $mysqli=new mysqli('localhost','root','9340126abc','chat');
    $query="SELECT id_user,msg FROM msgs";
    $result=$mysqli->query($query);
    $data="";
    while($row=$result->fetch_assoc()){
        printf('<li><a class="nick">%s</a>: <a class="message">%s</a></li><br>', getUserNickByUserId($row['id_user']),$row['msg']);
    }

    return $data;
}
?>