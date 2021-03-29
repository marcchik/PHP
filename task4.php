<?php
require_once "header.php";
?>

<main class="col-md-9">
    <h1>Задача 4</h1>
    <p><b>Описание задачи:</b> Дан текст. Заменить все email в этом тексте на '[email]'. Например, 'пишите мне на itmathrepetitor@gmail.ru по любому вопросу' преобразуется в 'пишите мне на [email] по любому вопросу'.
    </p>
    <div class = "task">
        <form action = "" method="post">
            <label for="exampleInputEmail1">Текст</label>
            <textarea name = "name" type="name" class="form-control" >Введите текст с E-mail
 моя почта markstal2002@gmail.com отправит сообщение на markst@gmail.com</textarea>
            <br>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
        <?
        $string = $_POST['name'];

        echo "<br>"."<b>Ввёденный текст: </b>".$string."<br>";

        $pattern = "/[-a-z0-9!#$%&'*_`{|}~]+[-a-z0-9!#$%&'*_`{|}~\.=?]*@[a-zA-Z0-9_-]+[a-zA-Z0-9\._-]+/i";
        $replace = '<b>[email]</b>';
        preg_match_all($pattern, $string, $result);

        echo "<b>E-mail в тексте:</b><br>";
        $r = array_unique(array_map(function ($i) { return $i; }, $result));
        array_walk_recursive($r, function ($item, $key) {
            echo "почта[".++$key."] = ".$item."<br>";
            $string = $_POST['name'];
            $replace = '<b>[email]</b>';
            echo $newstr = str_replace($item, $replace, $string)."<br>";
        });
        print_r($r);
            $r = array('markstal2002@gmail.com','markst@gmail.com');
        print_r($r);
        echo "<br>".$newstr = str_replace($r, $replace, $string)."<br>";
        ?>
    </div>
</main>


<?php
require_once "footer.php";
?>

