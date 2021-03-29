<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Задача 5</h1>
    <p><b>Описание задачи:</b> Пользователь вводит email. Осуществить проверку на корректность (длина больше восьми, присутствует символ @, после которого присутствует символ '.', между этими двумя символами есть хотя бы две буквы, оканчивается на 'ru', 'com', 'net' или 'by', символ '_' может встречаться только один раз, до символа @ могут быть только цифры, буквы и символ '_').

    </p>
    <div class = "task">
        <form action = "" method="post">
            <label for="exampleInputEmail1">E-mail</label>
            <input name = "name" type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Введите E-mail">
            <br>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
        <?
        $string = $_POST['name'];

        echo "<br>"."<b>Ввёденный email: </b>".$string."<br>";
        //$pattern = "/[-a-z0-9!#$%&'*_`{|}~]+[-a-z0-9!#$%&'*_`{|}~\.=?]*@[a-zA-Z0-9_-]+[a-zA-Z0-9\._-]+/i";
        $pattern = "/^[A-Za-z0-9]{8,}+@+[A-Za-z]{1,}\.+(ru|com|net|by)/";

        $replace = '<b>[email]</b>';
        if(!preg_match($pattern, $string, $result)){
            $k = 0;
            if(preg_match("/([_?])\\1/", $string)){
                echo "<br>"."<b>Ввёденн <u>некоректный</u> email: </b>".$string."<br>";
                $k = 1;
            }
        }
        if($k == 0){
            echo "<br>"."<b>Проверка пройдена <u>успешно</u> </b>".$string." - хороший email"."<br>";
        }
        ?>

    </div>
</main>


<?php
require_once "footer.php";
?>

