/**
 * Created by chester on 25.08.16.
 */
$(document).ready(function () {
    console.log("ReADY");

    $("#send").click(function () {
        var message=$("#text").val();

        $.ajax({
           url:'/chat/php/chat-action.php',
           type:'POST',
           data:{msg:message},
           success:function (data) {
               console.log(data);
               $("#content").html("");
               $("#content").html(data);
               $("#text").val('');
           }
        });
    });


    setInterval(function () {
        $.ajax({
            url:'/chat/php/chat-action-refresh.php',
            type:'POST',
            data:{},
            success:function (data) {
                console.log(data);
                $("#content").html("");
                $("#content").html(data);
            }
        });
    },1000);
});



