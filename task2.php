<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Задача 2</h1>
    <p><b>Описание задачи:</b> Подготовить форму для ввода размерности двумерного массива. После ввода по нажатию на кнопку “Найти”:
        <br> 1. Создать двумерный массив, заданной размерности;
        <br> 2. Заполнить созданный массив рандомными числами от 1 до 1000. Значения в массиве не должны повторяться
        <br> 3. Найти наименьший элемент и “подсветить” его стилями.
        Все действия должны выполняться в один шаг. Массив должен выглядеть аккуратно.
    </p>
    <div class = "task">
        <form action = "" method="post">
        <label for="exampleInputEmail1">Размерность массива</label>
        <input name = "row" type="name" class="form-control"  placeholder="Введите количество строк">
        <input name = "col" type="name" class="form-control"  placeholder="Введите количество столбцов">
            <br>
        <button type="submit" class="btn btn-primary">Сгенерировать</button>
        </form>

        <?
        $row = $_POST['row'];
        $col = $_POST['col'];
        echo "<b>Количество строк: </b>".$row."<br>";
        echo "<b>Количество столбцов: </b>".$col."<br><br>";
        $array = array([$row][$col]);
        echo "<h3>Сгенерированный массив</h3>";

        echo "<table class=\"table\">";
        for($i=0; $i<$row;$i++) {
            echo "<tr>";

            for ($j=0; $j<$col;$j++) {
                $array[$row][$col] = rand(1, 1000);
                echo "<td>";
                echo  "<b>".$array[$row][$col]."</b>";
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "<pre>";
        var_dump($array);
        echo "</pre>";
        echo "</table>";
        $a = $array[0][0];
        $ind1 = 4;
        $ind2 = 4;
        $p = 0;
        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        echo "a = ".$array[$ind1][$ind2]."<br>";
//        for($i=0; $i<$row;$i++) {
//            $minArr[$p] = min($array[$i]);
//            echo $p." ".$minArr[$p]."<br>";
//            $p++;
//        }
    //(min($minArr));
       // $minEl = min($minArr);
        //print_r($minArr);
        //echo "<h3>Минимальный элемент: $minEl</h3>";
        echo "<h3>Минимальный элемент: $a</h3>";




        ?>

    </div>
</main>


<?php
require_once "footer.php";
?>

