<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Перестановка Иосифа</h1>
    <p><b>Описание задачи: </b> Теперь вам нужно создать функцию, которая
        принимает размер исходного массива и шаг внутри массива (n и k). Внутри
        функции нужно создать массив вида [1, ... , n], обойти его с шагом k.
        Результат работы - массив со значениями исходного массива, построенный в
        другом порядке.
    </p>
    <div class="task">
        <form action="" method="post">
            <label>Размерность массива</label>
            <input name="name" type="name" class="form-control"
                   placeholder="Введите n (размер массива)">
            <label>Шаг</label>
            <input name="step" type="name" class="form-control"
                   placeholder="Введите n">
            <br>
            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
        <?
        $number = $_POST['name'];
        $step   = $_POST['step'];

        echo "<br>" . "<b>Ввёденный размер: </b>" . $number;
        echo "<br>" . "<b>Ввёденный шаг: </b>" . $step . "<br>";

        //вызов функции
        DeleteArrayStep($number, $step);

        //пользовательская функция, которая удаляет массив шагом
        function DeleteArrayStep($n, $st)
        {
            //результирующий массив
            $rezarray = array();

            //генерируем натуральный ряд и выводим
            echo "<b>Исходный массив: </b>";
            for ($i = 1; $i < $n + 1; $i++) {
                $array[$i] = $i;
                echo "$array[$i], ";
            }
            echo "<br>";

            //перебираем исходный массив пока там есть элементы
            $i = 1;
            while (count($array) > 0) {

                //обходим массив заданным шагом
                foreach ($array as $item) {
                    if ($i % $st == 0) {

                        //заносим элемент в новый массив
                        array_push($rezarray, $item);

                       //находим ключ элемента по шагу
                        $key = array_search($item, $array);
                        //удаляем элемент
                        unset($array[$key]);
                        // unset($array[$i]);
                        $i = 0;
                    }
                    $i++;
                }
            }
            echo "<b>Построенный массив: </b>";
            foreach ($rezarray as $item)
                echo "$item, ";
        }


        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

