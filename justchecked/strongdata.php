<?php
if (isset($_POST['number'])) {
    $num = (int) $_POST['number'];
    $sum = 0;
    $temp = $num;

    while ($temp > 0) {
        $digit = $temp % 10;
        $fact = 1;

        for ($i = 1; $i <= $digit; $i++) {
            $fact *= $i;
        }

        $sum += $fact;
        $temp = (int)($temp / 10);
    }

    if ($sum === $num) {
        echo "$num is a Strong Number.";
    } else {
        echo "$num is not a Strong Number.";
    }
}
?>
