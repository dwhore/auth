/**
 * Created by chester on 07.09.16.
 */

$(document).ready(function () {
    $.ajax({
        url:'/menu/php/loaddata.php',
        type:'POST',
        data:{type:1},
        success:function (data) {
            var info=JSON.parse(data);
            console.log(info.name);
            $("#nick").val(info.name);
            $("#about").val(info.about);
        }

    });

    $("#ok").click(function () {

        var user=new userinfo($("#nick").val(),$("#about").val());
        console.log("CLICK");
        $.ajax({
            url:"/menu/php/save_data.php",
            type:'POST',
            data:{user:JSON.stringify(user)},
            success:function (data) {
                console.log(data);
            }
        });
    });

});

function userinfo(nick,about){
    this.nick=nick;
    this.about=about;
}





