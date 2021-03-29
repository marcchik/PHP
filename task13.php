<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Поиск делителей</h1>
    <p><b>Описание задачи:</b> Создайте функцию с именем divisors, которая
        принимает целое число n > 1 и возвращает массив со всеми делителями
        целого числа (кроме 1 и самого числа), от наименьшего до наибольшего.
        Если число простое, верните строку '(целое число) простое'</p>
    <div class="task">
        <form action="" method="post">
            <label>Число</label>
            <input name="name" type="name" class="form-control"
                   placeholder="Введите n (больше 1)">
            <br>
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
        <?
        $number = $_POST['name'];
        echo "<br>" . "<b>Ввёденное число: </b>" . $number . "<br>";

        //вызов функции
        divisors($number);

        //пользовательская функция, которая находит делители
        function divisors($n)
        {
            $i = 2;
            //результирующий массив простых чисел
            $justnumber = array();

            //флаг для простых чисел
            $flag = false;

            //перебор всех чисел от 1 до n
            while ($i < $n) {
                //проверка на деление без остатка
                if ($n % $i == 0) {
                    $justnumber[$i] = $i;
                    $flag           = true;
                }
                $i++;
            }
            //если делителей не было найдено, то число простое
            if ( ! $flag) {
                echo $n . " - простое";
            }
            //иначе были делители
            else {
                echo "<b>Делители: [</b>";
                //вывод делителей
                foreach ($justnumber as $item) {
                    echo "$item, ";
                }
                echo "<b>]</b>";
            }
        }

        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

