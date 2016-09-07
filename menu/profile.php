<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Профиль</title>
</head>
<body>

    <form id="info">
        <a>Фото</a><br><img name="photo" src="" width="100" height="50"><br><br>
        <input name="avatar" type="file"/><br><br>
        <a>Никнейм</a><input name="nick" id="nick"><br><br>
        <a>О себе</a><br><textarea name="about" id="about">about</textarea>
        <br><br>
        <button id="ok"  value="Сохранить изменения">Сохранить изменения</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="js/profile.js"></script>
</body>
</html>