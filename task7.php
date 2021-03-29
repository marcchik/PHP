<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Задача 7</h1>
    <p><b>Описание задачи:</b> Написать функцию создания сокращенного варианта ФИО.
        Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.

    </p>
    <div class = "task">
        <form action = "" method="post">
            <label for="exampleInputEmail1">Фамилия Имя Отчество</label>
            <input name = "name" type="name" class="form-control"  placeholder="Введите ФИО">
            <br>
            <button type="submit" class="btn btn-primary">Преобразовать</button>
        </form>
        <?
        $fio = $_POST['name'];
        echo "<br>"."<b>Введенное ФИО: </b>".$fio."<br>";
        $keywords = preg_split("/[\s,]+/", $fio);

        $surname = mb_substr($keywords[1], 0, 1);
        $otchestvo = mb_substr($keywords[2], 0, 1);

        echo "<br>"."<b>Фамилия И.О: </b>".$keywords[0]." ".$surname.".".$otchestvo. "."."<br>";

        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

