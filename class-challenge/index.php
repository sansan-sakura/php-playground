<?php

class Article{

public $title;
public $content;
private $published=false;

public function __construct($title, $content){
    $this->title=$title;
    $this->content=$content;
}


public function publish(){
    $this->published=true;
}

public function isPublished(){
    return $this->published;
}

}

$article1=new Article("hooo","jhsijka");
$article2=new Article("hei","blallll");
$article1->publish();

var_dump($article1);
var_export($article2);

class StringUtlity{
public static function shout($string){
 return strtoupper($string)."!";
}

public static function whosper($string)
{
    return strtolower($string).".";   
}

public static function repeat($string,$times)
{
  return  str_repeat($string,$times); 
}

}


echo StringUtlity::shout("hi");
echo StringUtlity::whosper("hi");
echo StringUtlity::repeat("hi",2);