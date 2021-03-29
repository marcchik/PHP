<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <!-- CSS only -->
    <link rel="shortcut icon" href="icon2.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
       .left-menu{
           padding: 0px 0px 0px 20px;
           margin-top: 20px;
       }

   </style>

    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SLAM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

    </nav>

<body>
<div class="container">
    <div class="row">
        <header class="col-md-3 " >
            <nav class="sidebar-sticky bg-dark navbar-dark navbar-expand-md left-menu">
                <a href="#" class="logo navbar-brand">Содержание</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto flex-column">
                        <li class="nav-item active">
                            <a href="task1.php" class="nav-link">Задача 1</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task2.php" class="nav-link">Задача 2</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task3.php" class="nav-link">Задача 3</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task4.php" class="nav-link">Задача 4</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task5.php" class="nav-link">Задача 5</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task6.php" class="nav-link">Задача 6</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task7.php" class="nav-link">Задача 7</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task8.php" class="nav-link">Задача 8</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task9.php" class="nav-link">Числовой патруль</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task10.php" class="nav-link">Нарциссические числа
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="task11.php" class="nav-link">Перестановка Иосифа</a>
                        </li>
                        <li class="nav-item active">
                            <a href="task12.php" class="nav-link">Нахождение пиков
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="task13.php" class="nav-link">Поиск делителей
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="task14.php" class="nav-link">Обход бинарного дерева
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="task15.php" class="nav-link">Хранение данных клиентов
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="task16.php" class="nav-link">Поиск разницы дат</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <style>
            .col-md-9{
                margin-top: 20px;

            }
            .task{
                //width: 100px;	 /* Размеры */
                //position: fixed;
                float: contour;
                outline: 2px solid #000; /* Чёрная рамка */
                border: 3px solid #fff; /* Белая рамка */
                border-radius: 10px; /* Радиус скругления */
                padding: 10px 20px 10px 20px;
            }

        </style>
