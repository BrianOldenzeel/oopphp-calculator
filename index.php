<?php
declare(strict_types=1);
include_once "includes/class-autoload.inc.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="includes/calc.inc.php" method="post">
        <P>simpele rekenmachine</P>
        <input type="number" name="num1">
        <select name="oper" id="">
            <option value="add">plus</option>
            <option value="sub">min</option>
            <option value="div">delen</option>
            <option value="mul">keer</option>
        </select>

        <input type="number" name="num2">
        <button type="submit" name="submit">bereken</button>
    </form>
</body>

</html>