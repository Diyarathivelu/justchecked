<?php
if (isset($_POST['number'])) {
    $num = (int) $_POST['number'];
    $sum = 0;

    // Find all divisors
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }

    if ($sum === $num) {
        echo " $num is a Perfect Number.";
    } else {
        echo " $num is not a Perfect Number.";
    }
}
?>
