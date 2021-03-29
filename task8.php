<?php
require_once "header.php";
?>
<style>
    .form{
        width: 300px;
    }
    .cont{
        width: 300px;
    }
</style>
<main class="col-md-9">
    <h1>Задача 8</h1>
    <p><b>Описание задачи:</b> Реализовать на чистом PHP и HTML/css механизм авторизации и простого личного кабинета.
        Написать простой скрипт на php, который будет авторизовывать только пользователей из php-массива (логин => пароль)
        Для этого объявить ассоциативный массив на php вида (логин => пароль). Вывести форму авторизации (Логин + пароль + кнопка ""Войти"").
        Написать скрипт авторизации пользователя. Выводить ошибки авторизации (""Логина нет в системе"", ""Неверный пароль"").
        Если пользователь авторизован -- вывести страницу с открытым логином и паролем из массива и кнопку/ссылку ""Выйти"", которая завершает сессию.
        Убедиться что открытая страница недоступна по прямой ссылке до авторизации и после завершения сессии.
    </p>
    <div class = "task">
        <div class="form">
            <div class="cont">
                <form action = "submit.php" method="post">
                    <fieldset>
                        <legend>Войти в личный кабинет</legend>
                        <p>Логин:    <input name="login" class = "form-control"></p>
                        <p>Введите пароль: <input type="password" class = "form-control" name="pass"></p>
                        <p><input type="submit" class = "btn btn-success" value="Войти">
                            <a href="registration.php">
                                <input type="button" class = "btn btn-secondary" value="Зарегистрироваться">
                            </a>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
        <?
        $users = array("login" => "name", "password" => "pass");
        //print_r($users);
        ?>
    </div>
</main>



<?php
require_once "footer.php";
?>

