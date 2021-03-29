<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Нахождение пиков</h1>
    <p><b>Описание задачи:</b>Написать функцию pickPeaks, принимающую массив целых положительных чисел от 1 и более, возвращающую ассоциативный массив с двумя ключами: «pos» и «peaks». Оба они должны быть неассоциативными массивами. Если в данном массиве нет пика, просто верните ['pos' => [], 'peaks' => []]. </p>
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

        echo "<br>"."<b>Ввёденный текст: </b>".$number."<br>";


        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

