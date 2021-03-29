<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Числовой патруль</h1>
    <p><b>Описание задачи:</b> Напишите функцию, которая принимает
        перетасованный список уникальных чисел от 1 до n с отсутствующим одним
        элементом (который может быть любым числом, включая n). Верните этот
        недостающий номер.</p>
    <div class="task">
        <form action="" method="post">
            <label>Число</label>
            <input name="name" type="name" class="form-control"
                   placeholder="Введите n">
            <br>
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
        <?
        $n = $_POST['name'];
        if ($_POST['name']) {
            echo "<b>Введённое число: </b>" . $n . "<br>";

            //удаление рандомного элемента
            $hiddenElement = rand(1, $n);
            echo "<b>Число, которое будет отсутствовать: </b>" . $hiddenElement
                 . "<br>";

            //генерируем натуральный ряд без одного элемента
            for ($i = 0; $i < $n; $i++) {
                $list[$i] = $i;
                if ($list[$i] == $hiddenElement) {
                    unset($list[$i]);
                }
            }

            //вывод массива
            echo "<b>Натуральный ряд без одного числа: </b><br>";
            foreach ($list as $item)
                echo "$item, ";
            echo "<br>";

            //перемешиваем массив
            shuffle($list);

            //вывод массива
            echo "<b>Перемешанный ряд без одного числа: </b><br>";
            //перемешиваем массив
            shuffle($list);
            foreach ($list as $item)
                echo "$item, ";
            echo "<br><hr>";

            //вызов созданной функции
            FindLostItem($list);

        } else {
            echo "<b>Вы не ввели число</b><br>";
        }

        //пользовательская функция, которая находит выкинутый элемент
        //function FindLostItem(array $arr)
//        {
//        $k = 0;
//        $flag = 0;
//        for ($i = 0; $i < count($arr) + 1; $i++) {
//            $j  = 1;
//            $natural_row[$i] = $i + 1;
//            echo "<br>i = $i<br>";
//            while ($j < count($arr) + 2) {
//                $k = 0;
//                echo "<b>arr[$i]: </b>" . $arr[$i] . " - " . $j . " | ";
//                if ($arr[$i] == $j) {
//                    echo "<b>Совпадающее число: </b>" . $arr[$i];
//                    echo "<b>  -  k: </b> - " . $k." ---  ";
//                    //unset($natural_row);
//                    $flag++;
//
//                } else {
//                    $k++;
//                    echo "<b>  -  Коэффицент: </b> - " . $k." ---  ";
//                }
//                $j++;
//            }
//        }//неудачный эксперимент
        function FindLostItem(array $arr)
        {
            //генерируем полный натуральный ряд
            for ($i = 0; $i < count($arr) ; $i++) {
                $natural_row[$i] = $i + 1;
                    }
            //Удаление пересекающихся элементов массива
            $arrdif = array_diff($natural_row, $arr);
            foreach ($arrdif as $item)
                echo "<b>Потерянный элемент:</b> $item";
            echo "<br><b>Выввод: </b>";
            foreach ($arr as $element)
                echo "$element, ";
            echo "<b>=></b> $item";
        }
        ?>
    </div>
</main>
<?php
require_once "footer.php";
?>

