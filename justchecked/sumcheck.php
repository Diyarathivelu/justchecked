<?php
if (isset($_POST['number'])) {
    $num = (int) $_POST['number'];
    $sum = 0;

    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit;
        $num = (int)($num / 10);
    }

    echo $sum;
}
?>
