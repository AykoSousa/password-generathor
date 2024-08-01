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
        <label for="lenght"></label>
        <input type="number" name="lenght" id="lenght">
        <label for="use-uppercase">Use uppercase?</label>
        <input type="checkbox" name="use-uppercase" id="use-uppercase">
        <label for="use-numbers">Use numbers?</label>
        <input type="checkbox" name="use-numbers" id="use-numbers">
        <label for="user-special-chars">Use special chars?</label>
        <input type="checkbox" name="user-special-chars" id="user-special-chars">
        <button type="submit">Enviar</button>
    </form>

    <?php

        require('../vendor/autoload.php');
        use app\models\PasswordGenerator;

        if(isset($_GET["use-uppercase"])) {
            $lenght = $_GET["lenght"];
            $use_uppercase = $_GET["use-uppercase"] ?? false;
            $use_numbers = $_GET["use-numbers"] ?? false;
            $use_special_chars = $_GET["user-special-chars"] ?? false;

            $new_password = new PasswordGenerator($lenght, $use_uppercase, $use_numbers, $use_special_chars);
            $new_password->generate();

            // echo $lenght . " " . $use_uppercase . " " . $use_numbers . " " . $use_special_chars;
        }
    ?>
</body>
</html>