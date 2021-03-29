<?php
$login = $_POST['login'];
$password = $_POST['pass'];
$host = 'localhost'; // адрес сервера
$database = 'startsla_USERS'; // имя базы данных
$user = 'startsla_admin'; // имя пользователя
$global_password = 'M52502002sbd'; // пароль
$password = md5($password);



if(trim($login) == "")
    echo "<script>alert(\"Вы не ввели имя пользователя\");</script>";
else if (strlen(trim($login)) <= 1)
    echo "\"<script>alert(\"Такого имени не существует\");</script> ";
//    else if(trim($name) == "" || trim($password) == "")
//        echo  "<script>alert(\"Введите все данные\");</script >";
else {
    // подключаемся к серверу
    $link = mysqli_connect($host, $user, $global_password, $database)
    or die("Ошибка " . mysqli_error($link));
    $query ="SELECT login FROM CONTACT WHERE login=\"$login\";";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $rows = mysqli_num_rows($result);
    if ($rows == 1){
        $query ="SELECT password FROM CONTACT WHERE password = \"$password\"";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

        $rows = mysqli_num_rows($result);

        if ($rows == 1){
            echo "<script>alert(\"Вы вошли на сайт!\");</script> ";
            echo "<script> document.location.href = \"task8.php\"</script>";
        }
        else
            echo "<script>alert(\"Пароль не совпадает!!!\");</script> ";
        echo "<script> document.location.href = \"task8.php\"</script>";
        //echo "<script> document.location.href = \"index.html\";</script>";
    }
    else {
        echo "<script> document.location.href = \"registration.php\";</script>";
        echo "<script>alert(\"Такого пользователя не существует!!! Зарегистрируйтесь\");</script> ";
    }
}


// закрываем подключение
mysqli_close($link);