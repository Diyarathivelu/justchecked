<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
   {
  $number="";
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        
    }
    $org=$number;
    $sum=0;
    while($number>0){
        $a=$number%10;
        $sum=$sum+$a*$a*$a;
        $number=$number/10;
    }
    if($sum==$org){
        echo 'Armstrong';
    }
    else{
        echo 'not Armstrong';
    }

   }


















?>