<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
   {
  $number="";
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        
    }
    if($number%4==0 && $number%100!=0){
        echo"Leap year";
    }else{
        echo "Non-Leap year";
    }

   }


















?>