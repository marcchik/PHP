<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Нарциссические числа</h1>
    <p><b>Описание задачи: </b>Ваш код должен возвращать true или false в зависимости от того, является ли данное число нарциссическим числом.</p>
    <div class = "task">
        <form action="" method="post">
            <label>Число</label>
            <input name="name" type="name" class="form-control"
                   placeholder="Введите n">
            <br>
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
        <?
        $number = $_POST['name'];

        echo "<br>"."<b>Ввёденное число: </b>".$number."<br>";

        //вызов функции
        FoundNarcisNumber($number);

        //пользовательская функция, которая проверяет является ли число нарцистическим
        function FoundNarcisNumber($value){
            echo "<br>";
            $i = 0;
            $narcis = 0;

            //преобразуем число по алгоритму нарцистического числа
            while($i < strlen($value)){
                $rang = substr($value, $i, 1);
                $narcis += pow($rang, strlen($value));
                $i++;
            }

            //проверка на нарцистичность числа
            if($narcis == $value)
                echo "true";
            else echo "false";
        }
        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

