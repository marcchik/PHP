<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Хранение данных клиентов</h1>
    <p><b>Описание задачи: </b>Создайте функцию, принимающую массив-хранилище
        данных, произвольный массив с новыми данными и имя клиента, позволяющую
        дописать произвольные данные клиента в массив-хранилище. Функция должна
        возвращать массив, в который были добавлены данные в случае, если клиент
        существует, либо false в случае, если клиент не найден в
        массиве-хранилище.</p>

    <div class="task">
        <form action="" method="post">
            <label>Имя</label>
            <input name="name" type="name" class="form-control"
                   placeholder="Введите имя пользователя">
            <label>Возраст</label>
            <input name="age" type="name" class="form-control"
                   placeholder="Введите имя пользователя">
            <label>Зарплата</label>
            <input name="money" type="name" class="form-control"
                   placeholder="Введите имя пользователя">
            <label>Телефон</label>
            <input name="tel" type="tel" class="form-control"
                   placeholder="Введите имя пользователя">
            <label>Машина</label>
            <input name="car" type="name" class="form-control"
                   placeholder="Введите имя пользователя">
            <br>

            <button type="submit" class="btn btn-primary">Найти</button>
        </form>
        <?
        $name  = $_POST['name'];
        $age   = $_POST['age'];
        $money = $_POST['money'];
        $tel   = $_POST['tel'];
        $car   = $_POST['car'];

        //массив с пользователями
        $clientsDataArray = [
            'Tom'  => [
                'Age'   => 21,
                'Money' => '350$'
            ],
            'Mike' => [
                'Age'   => 38,
                'Car'   => 'Toyota',
                'Phone' => 8432848238
            ],
            'John' => [
                'Car' => 'Mercedes'
            ]
        ];

        //массив с ведёнными данными
        $newClientDataArray = [
            'age'   => $age,
            'money' => $money,
            'tel'   => $tel,
            'car'   => $car
        ];
//        foreach ($newClientDataArray as $item) {
//            echo "item - " . $item;
//        }


        echo "<br>" . "<b>Имя: </b>" . $name;
        echo "<br>" . "<b>Возраст: </b>" . $age;
        echo "<br>" . "<b>Зарплата: </b>" . $money;
        echo "<br>" . "<b>Телефон: </b>" . $tel;
        echo "<br>" . "<b>Машина: </b>" . $car;


        //вызов функции
        AddUser($clientsDataArray, $newClientDataArray, $name);

        //пользовательская функция, которая добавляет данные пользователя
        function AddUser($clientsDataArray, $newClientDataArray, $name)
        {
            foreach ($clientsDataArray as $item) {
                echo "<br>item - " . $item;
            }
        }


        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

