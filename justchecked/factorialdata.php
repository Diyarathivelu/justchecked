<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $number="";
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        
    }
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    }
    return $number * factorial($number - 1);
}


echo   "Factorial of given number is  ". factorial($number);
   }
?>
