<?php
    // простий калькулятор з використанням оператора switch і метода POST
    if(isset($_POST['calc'])) {
        $numb1 = $_POST['number1'];
        $numb2 = $_POST['number2'];
        $op = $_POST['operation'];
            
        if(is_numeric($numb1) && is_numeric($numb2)) {
            switch($op) {
                case "add" : $add = $numb1 + $numb2;
                echo 'Сума = ' . $add;
                break;
                case "sub" : $sub = $numb1 - $numb2;
                echo 'Різниця = ' . $sub;
                break;
                case "mult" : $mult = $numb1 * $numb2;
                echo 'Результат множення = ' . $mult;
                break;
                case "div" : $div = $numb1 / $numb2;
                echo 'Результат ділення = ' . $div;
                break;
            }
        } else {
            echo 'Заповніть всі поля';
        }

    }

?> 



<!DOCTYPE html>
<html>
    <head>
        <title>Простий калькулятор</title>
    </head>
    <body>
        <form method = "POST">
        Число 1 <input type = "text" name = "number1" placeholder = 'Введіть число'><br>
        Число 2 <input type = "text" name = "number2" placeholder = 'Введіть число'><br>
        <select name = "operation">
            <option>Виберіть дію</option>
            <option value = "add">Додати</option>
            <option value = "sub">Відняти</option>
            <option value = "mult">Помножити</option>
            <option value = "div">Поділити</option>
        </select><br>
        <input type = "submit" name = "calc"><br>
    </body>
</html>
