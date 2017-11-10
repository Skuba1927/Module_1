<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class=content">
    <form action="" method="POST" id="calc">
        <div class="form-group">
            <label for="first-number">First number</label>
            <input type="text" id="first-number" class="form-control" name="first-number" required/>
        </div>
        <div class="form-group">
            <label for="second-number">First second</label>
            <input type="text" id="second-number" class="form-control" name="second-number" required/>
        </div>
        <label for="select-operation">Select operation</label>
        <select id="select-operation" name="select-operation">
        <option value="multiplication">multiplication</option>
        <option value="division">division</option>
        <option value="addition">addition</option>
        <option value="substraction">substraction</option>
        </select>
        <input type="submit" />
    </form>
</div>
</body>
</html>

<?php

if (!empty($_POST)) {
    $operation = $_POST['select-operation'];
    $firstNumber =  $_POST['first-number'];
    $secondNumber =  $_POST['second-number'];
    $result = 0;
        switch($operation) {
            case 'division':
                if ($secondNumber) {
                    $result = $firstNumber / $secondNumber;
                } else {
                    $result = 0;
                }
                break;
            case 'addition':
                $result = $firstNumber + $secondNumber;
                break;
            case 'multiplication':
                $result = $firstNumber * $secondNumber;
                break;
            case 'substraction':
                $result = $firstNumber - $secondNumber;
                break;
        }
        $result = round($result, 2);
        echo "<p>Result $operation is $result </p>";
    }
?>