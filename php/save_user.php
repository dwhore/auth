<!--
/**
 * Created by PhpStorm.
 * User: chester
 * Date: 19.08.16
 * Time: 16:01
 */

/*if (isset($_POST['$login'])) { echo $_POST['$login']; if ($login == '') { unset($login);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['$password'])) { $password=$_POST['$password']; if ($password =='') { unset($password);} }
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}*/!-->
<?
echo 'Hello, ' .$_POST['name']. ' your email is ' .$_POST['email'];
?>
