<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $number="";
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        
    }
    $sum = 0;
    $num = $number;

    $number = strval($number);
    $len = strlen($number);

    for ($i = 0; $i < $len; $i++) {
        $digit = (int)$number[$i];
        $sum += pow($digit, $i + 1);  // Accumulate power of each digit
    }

    if ($sum == $num) {
        echo "Disarium";
    } else {
        echo "not Disarium";
    }

   }


















?>