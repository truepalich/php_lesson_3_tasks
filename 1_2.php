<?php

$isFormSent = false;

if ($_POST) {

    $isFormSent = true;
    $prime_numbers = [2, 3];



    if (!preg_match("/^[0-9]+$/", $_POST['min_number'])) {
        die('Error! Please enter valid min number!');
    }

    if (!preg_match("/^[0-9]+$/", $_POST['max_number'])) {
        die('Error! Please enter valid max number!');
    }

    if ($_POST['min_number'] < 4) {
        die('Error! It works if min_number > 3 :)))))!');
    }

    $max_number = (int) $_POST['max_number'];
    $min_number = (int) $_POST['min_number'];

    for ($number = $min_number; $number < $max_number; $number++) {
        $result = true;

        if ($number == 2) {
            $result = true;
        } else {
            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0) {
                    $result = false;
                    break;
                }
            }
        }

        if ($result) {
            if ($min_number > 3) {
                unset($prime_numbers[0]);
                unset($prime_numbers[1]);
                $prime_numbers[] = $number;
            } else {
                $prime_numbers;
            }

        }
    }

    $prime_numbers = implode(', ', $prime_numbers);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get primes from range</title>
</head>
<body>

<h1>Get primes from range</h1>
<form method='post'>
    <input type="number" name="min_number" min="4" placeholder="Enter min value"/>
    <input type="number" name="max_number" min="4" placeholder="Enter max value"/>
    <button>Go</button>
</form>

<?php if ($isFormSent) : ?>
    Primes: <?=$prime_numbers ?>
<?php endif ?>

</body>
</html>