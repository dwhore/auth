<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>chat</title>
</head>
<body>
    <h2 id="yourname">
        <?php
            session_start();
            echo 'Вы вошли как (' .$_SESSION['login']. ')';
        
        ?>
    </h2>
    <div id="wrapper">
        <div id="wrapper_chat">
            <div id="wrapper_messages">
                <ul id="content">

                </ul>
            </div>

            <div id="wrap_text">
                <textarea id="text"></textarea>
                <button id="send">Отправить</button>
            </div>
        </div>
    </div>
    <link rel="stylesheet" type="text/css" href="css/style-chat.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/chat.js"></script>
</body>
</html>