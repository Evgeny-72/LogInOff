<?php
    include 'calc/Calculate.php';
    $calc = new Calculate();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="form">
        <h1 class="form__title">Калькулятор</h1>
        <form action="" method="post">
            <div class="form__body">
                <div class="form__item">
                    <input type="text" name="first" placeholder="введите число" class="form__input">
                    <input type="text" name="second" placeholder="введите число" class="form__input">
                </div>
                <div class="form__select">
                    <select name="calculate" id="" class="select">
                        <option value="+" class="option">+</option>
                        <option value="-" class="option">-</option>
                        <option value="*" class="option">*</option>
                        <option value="/" class="option">/</option>
                    </select>
                    <input type="submit" value="посчитать" class="form__button">
                </div>
            </div>

        </form>
    </div>
    <div class="result">
        <?php
            if ($_POST['calculate'] === '+') {
                echo $calc->sum();
            }
            if ($_POST['calculate'] === '-') {
                echo $calc->subtract();
            }
            if ($_POST['calculate'] === '*') {
                echo $calc->multiply();
            }
            if ($_POST['calculate'] === '/') {
                echo $calc->divide();
            } ?>
    </div>
</div>
</body>
</html>
