<?php

$age=20;
// If statement
if($age>=21){
    echo "You are old enough tp drink in the US";
} else {
    echo "You are not old enough tp drink in the US";
}

// If-Else

// Nested if statement

if($age>=21){
    echo "You are old enough tp drink in the US";
} else {
    if($age>18){
        echo "You are not old enough tp drink in the US, but you can vote";
    }else {
        echo "You are not old enough to drink or vote in the US";

    }
}

// If-Else-If

