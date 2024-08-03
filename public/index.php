<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Password Generator</title>
</head>
<body class="flex flex-col justify-center items-center h-screen w-screen bg-neutral-900">
    <main class="flex flex-col justify-center items-center text-white">
        <h1 class="mb-7 text-5xl text-teal-400">Password Generator</h1>
        <form action="" method="get" class="flex flex-col ">
            <div class="flex flex-col mb-2">
                <label for="lenght" class="mb-1">Lenght of chars:</label>
                <input type="number" name="lenght" id="lenght" class="p-1 rounded-lg text-black">
            </div>
            <div class="flex mb-2 gap-2">
                <label for="use-uppercase">Use uppercase?</label>
                <input type="checkbox" name="use-uppercase" id="use-uppercase">
            </div>
            <div class="flex mb-2 gap-2">
                <label for="use-numbers">Use numbers?</label>
                <input type="checkbox" name="use-numbers" id="use-numbers">
            </div>
            <div class="flex mb-2 gap-2">
                <label for="user-special-chars">Use special chars?</label>
                <input type="checkbox" name="user-special-chars" id="user-special-chars">
            </div>
            <button type="submit" class="p-2 rounded-lg bg-teal-400">Generate</button>
        </form>
    </main>

    <?php

        require('../vendor/autoload.php');
        use app\models\PasswordGenerator;

        if(isset($_GET["use-uppercase"])) {
            $lenght = $_GET["lenght"];
            $use_uppercase = $_GET["use-uppercase"] ?? false;
            $use_numbers = $_GET["use-numbers"] ?? false;
            $use_special_chars = $_GET["user-special-chars"] ?? false;

            $new_password = new PasswordGenerator($lenght, $use_uppercase, $use_numbers, $use_special_chars);
            $new_password = $new_password->generate();
            echo "<input type='text' name='password-generated' class='p-1 bg-white rounded-lg mt-2' value='$new_password' readonly>";
            // echo $lenght . " " . $use_uppercase . " " . $use_numbers . " " . $use_special_chars;
        }
    ?>
</body>
</html>