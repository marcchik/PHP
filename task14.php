<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Обход бинарного дерева</h1>
    <p><b>Описание задачи:</b>Создайте функцию обхода бинарного дерева summTree, которая вернет сумму значений, лежащих в узлах. Все значения в узлах - целые числа, дерево может быть произвольного размера. </p>
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

