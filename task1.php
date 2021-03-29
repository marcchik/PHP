<?php
require_once "header.php";
?>
<style>
    .for-form{
        width: 300px;
        //float: left ;
        display: block;
        position: relative;
    }
    .rezult{
        //float: left;

    }
</style>
        <main class="col-md-9">
            <h1>Задача 1</h1>
            <p><b>Описание задачи:</b> Вывести веб-форму со всеми возможными полями. При отправке под формой должен распечатываться массив отправленных данных.
            </p>
            <div class = "task">

<div class = "for-form">
    <form action = "" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя</label>
            <input name = "name" type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Введите имя">

            <label for="exampleInputEmail1">Email</label>
            <input name = "email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите email">
            <small id="emailHelp" class="form-text text-muted">Мы никому не скажем ваш E-mail.</small>
            <br>
            <label>Кнопка</label>
            <input name = "btn" type="button" class="form-control btn btn-secondary" value = "Button"><br>
            <label>Выберите цвет</label>
            <input name = "color" type="color" class="form-control"><br>
            <label>Выберите дату</label>
            <input name = "date" type="date" class="form-control"><br>
            <label>Выберите дату и время</label>
            <input name = "date&time" type="datetime-local" class="form-control"><br>
            <label>Выберите файл</label>
            <input name = "file" type="file" class="form-control"><br>
            <label>Скрытая</label>
            <input name = "hidden" type="hidden" class="form-control"><br>
            <label>Кнопка картинка</label>
            <input name = "img" type="image"  src = "icon2.png" width="50px" height="auto" ><br><br>
            <label>Месяц</label>
            <input name = "month" type="month" class="form-control"><br>
            <label>Цифра</label>
            <input name = "number" type="number" class="form-control"><br>
            <label>Радио кнопка</label>
            <input name = "radio1" type="radio"class="btn-radio"><br><br>
            <label>Палзунок</label>
            <input name = "range" type="range" class=""><br><br>
            <label>Кнопка сброса</label>
            <input name = "reset" type="reset" class="form-control btn btn-danger"><br>
            <label>Кнопка поиска</label>
            <input name = "search" type="search" class="form-control"><br>
            <label>Кнопка отправки</label>
            <input name = "submit" type="submit" class="form-control btn btn-success"><br>
            <label>Телефон</label>
            <input name = "tel" type="tel" class="form-control"><br>
            <label>Обычный текст</label>
            <input name = "text" type="text" class="form-control"><br>
            <label>Время</label>
            <input name = "time" type="time" class="form-control"><br>
            <label>Ссылка</label>
            <input name = "url" type="url" class="form-control"><br>
            <label>Выбор недели</label>
            <input name = "week" type="week" class="form-control"><br>
        </div>

            <label for="exampleInputPassword1">Пароль</label>
            <input name = "pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

        <div class="form-check">
            <input name = "checkbox" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>
                <div class = "rezult">
                    <pre>
                    <?
                    print_r($_REQUEST);
                    ?>
                </pre>
                </div>
            </div>
        </main>


<?php
require_once "footer.php";
?>

