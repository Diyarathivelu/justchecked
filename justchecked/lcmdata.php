<?php
// Function to find GCD using Euclidean Algorithm
function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}

// Function to find LCM using formula: (a × b) / GCD
function lcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

// Check if form values are set
if (isset($_POST['num1']) && isset($_POST['num2'])) {
    $a = (int) $_POST['num1'];
    $b = (int) $_POST['num2'];

    if ($a > 0 && $b > 0) {
        $g = gcd($a, $b);
        $l = lcm($a, $b);

        echo "GCD of $a and $b is: <strong>$g</strong><br>";
        echo "LCM of $a and $b is: <strong>$l</strong>";
    } else {
        echo "Please enter positive numbers only.";
    }
} else {
    echo "Both numbers are required.";
}
?>
