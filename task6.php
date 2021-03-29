<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Задача 6</h1>
    <p><b>Описание задачи:</b> Создайте функцию, которая принимает строку на русском языке, а возвращает ее транслит.
    </p>
    <div class = "task">
        <form action = "" method="post">
            <label for="exampleInputEmail1">Строка</label>
            <input name = "name" type="name" class="form-control"  placeholder="Введите строку на руском">
            <br>
            <button type="submit" class="btn btn-primary">Преобразовать</button>
        </form>
        <?
        $str = $_POST['name'];
        echo "<br>"."<b>Введенная строка: </b>".$str."<br>";

        function translit($value)
        {
            $converter = array(
                'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
                'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
                'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
                'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
                'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
                'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
                'э' => 'e',    'ю' => 'yu',   'я' => 'ya',

                'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
                'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
                'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
                'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
                'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
                'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
                'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
            );

            $value = strtr($value, $converter);
            return $value;
        }

        echo translit($str);
        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

