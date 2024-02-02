<?php 

$name="Saku";

var_dump($name);

$age=35;
var_dump($age);

$ratig=4.5;
var_dump($ratig);

$friends=["saku","yuri","haru","natsu"];

var_dump($friends);

$person=new stdClass();

var_dump($person);

$file=fopen("sample.tsx","r");
var_dump($file);


//null and false -->0 true -->1 
$bool1=true;
$bool2=false;
$num=-7;
$result=$num+$bool1;


$result=(string) $num;
