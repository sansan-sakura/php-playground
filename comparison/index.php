<?php
$num=10;
$output="";

// if($num%3===0&&$num%5===0){
//  return $output="Fizz Bazz";
// } else if($num%3===0){
//   return  $output="Fizz";
//  } else if($num%5===0){
//    return $output="Bazz";
//  }


for($i=1;$i<=100;$i++){
if($i%3===0&&$i%5===0){

    echo "Fizz Bazz";
}

   else if($i%3===0){
        echo "Fizz";
    } else if($i%5===0){
        echo "Bazz";
    } else {
        echo $i;
    }

    echo "<br/>";
}


 echo $output;