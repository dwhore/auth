/**
 * Created by chester on 13.08.16.
 */
$(document).ready(function () {
   console.log("Hello!");
});

function user(name,login,password,id){
    this.name=name;
    this.login=login;
    this.password=password;
    this.id=id;
}

var vasya=new user('vasya','qwer','1234','554433');

function call() {
    var msg=$('#formx').serialize();
    console.log("|eef");
    $.ajax({
       type: 'POST',
        url: 'save_user.php',
        data:msg,
        success:function (data) {
            $('#results').html(data);
        }
    });
}
