<?php 

// $score=50;

// if($score > 40){
//     echo "High Score";
// } else {
//     echo "Low Score";
// }

// $result=$score>40?"High Score":"Low Score";

// echo $result;

$favoriteColor="pink";
$color =isset($favoriteColor)?$favoriteColor:"red";
$color =$favoriteColor??"red";

function calc($temp){
    $c=($temp-32)*5/9;
return $c;
};

$f=40;
$base=32;
$calc2=function ($f) use($base){
return ($f-$base)*5/9;
};

function findLongestWord($sentence){

$words=explode(" ",$sentence);

$longest="";

foreach($words as $word){

    $word=trim($word);

    if(strlen($word)>strlen($longest)||$longest===""){
       $longest=$word;
    }
}

return $longest;
}

echo findLongestWord("This project bridges the gap between design and development, showcasing the art of bringing visuals to life");