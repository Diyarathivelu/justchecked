<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $number = 10; // default value
    if (isset($_POST['number'])) {
         $number = intval($_POST['number']); // sanitize input
    }

    // $number1 = 1;
    // $number2 = 2;

    // Optional: allow users to set first two numbers
    if (isset($_POST['number1'])) {
         $number1 = intval($_POST['number1']);
    }
    if (isset($_POST['number2'])) { // fixed the name
          $number2 = intval($_POST['number2']); // fixed incorrect key
    }
echo "Fibonocci series :  ";
    // Fibonacci generation
    for ($i = 0; $i < $number; $i++) { // fixed the loop condition
        echo $number1.','." ";
        $next = $number1 + $number2;
        $number1 = $number2;
        $number2 = $next;
    }
}
?>
