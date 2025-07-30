<?php


if($_SERVER["REQUEST_METHOD"]=="POST")
   {
  $number="";
    if(isset($_POST['number'])){
        $number=$_POST['number'];
        
    }
if($number===1 ||$number===0){
   echo "Not Composite number";
}else if($number>1){
    $count=0;
    for($i=1;$number>$i;$i++){
        if($number%$i==0){
          $count++;
        }
        
    }
    if($count>2){
                echo "Composite number";
        }
    else{
        echo "Not Composite number";
    }
 
}else{
    echo "Not Composite number";
}
   }


















?>