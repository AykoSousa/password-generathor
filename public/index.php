<?php
    
    $use_uppercase = $_GET["use-uppercase"];
    $use_numbers = $_GET["use-numbers"];
    $use_special_chars = $_GET["user-special-chars"];

    echo $use_uppercase . " " . $use_numbers . " " . $use_special_chars;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <h1>Password Generator</h1>
    <form action="" method="get">
        <label for="use-uppercase">Use uppercase?</label>
        <input type="checkbox" name="use-uppercase" id="use-uppercase">
        <label for="use-numbers">Use numbers?</label>
        <input type="checkbox" name="use-numbers" id="use-numbers">
        <label for="user-special-chars">Use special chars?</label>
        <input type="checkbox" name="user-special-chars" id="user-special-chars">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>