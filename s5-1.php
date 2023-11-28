<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];

    if ($number1 > $number2) {
        echo $number1;
    } elseif ($number1 < $number2) {
        echo $number2;
    } else {
        echo "numbers is equals";
    }
}
?>