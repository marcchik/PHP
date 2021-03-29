<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$password = $_POST['pass'];
$password_rep = $_POST['pass2'];

$url = "registration.html";

$password = md5($password);
$password_rep = md5($password_rep);

$host = 'localhost'; // адрес сервера
$database = 'startsla_USERS'; // имя базы данныyhhh
$user = 'startsla_admin'; // имя пользователя
$global_password = 'M52502002sbd'; // пароль

$link = mysqli_connect($host, $user, $global_password, $database)
or die("Ошибка " . mysqli_error($link));
$query ="SELECT login FROM CONTACT WHERE login=\"$login\";";
$result = mysqli_query($link, $query) or die("Ошибка 404 " . mysqli_error($link));
if(trim($name) == ""){
    echo "<script>alert(\"Вы не ввели имя пользователя\");</script>";
    echo "<script> document.location.href = \"task8.php\"</script>";
}
else if(trim($surname) == ""){
    echo "<script>alert(\"Вы не ввели фамилию пользователя\");</script>";
    echo "<script> document.location.href = \"task8.php\"</script>";
}
else if(trim($login) == ""){
    echo "<script>alert(\"Вы не ввели логин\");</script>";
    echo "<script> document.location.href = \"task8.php\"</script>";
}
else if (strlen(trim($login)) <= 1){
    echo "\"<script>alert(\"Такого имени не существует\");</script> 
    <script> document.location.href = \"task8.php\"</script>";
}
else if ($password != $password_rep){
    echo "<script>alert(\"Пароли не совпадают\");</script>";
    echo "<script> document.location.href = \"task8.php\"</script>";
}
else if (mysqli_num_rows($result) == 1){
        echo "<script>alert(\"Такой пользователь уже существует\");</script>";
        echo "<script> document.location.href = \"registration.html\";</script>";
    echo "<script> document.location.href = \"task8.php\"</script>";
}
else {
    echo "<script>alert(\"Регистрация прошла успешно\");</script>";
    echo "<h1>Ваши данные</h1><p>$name</p><p>$surname</p><p>$login</p><p>$password</p><p>$password_rep</p>";


// подключаемся к серверу
    $link = mysqli_connect($host, $user, $global_password, $database)
    or die("Ошибка " . mysqli_error($link));

// выполняем операции с базой данных
    $query ="INSERT INTO CONTACT(login, password, name, surname) VALUES(\"$login\", \"$password\", \"$name\",\"$surname\")";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "Выполнение запроса прошло успешно";
        echo "<script> document.location.href = \"index.php\"</script>";
    }

// закрываем подключение
    mysqli_close($link);
}

