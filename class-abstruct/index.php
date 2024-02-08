<?php 

abstract class Shape{
protected $name;

abstract public function clacArea();

public function __construct($name)
{

    $this->name=$name;
}

}


class Circle extends Shape{

    private $radious;

    public function __construct($name,$radious)
    {
        parent::__construct($name);
        $this->radious=$radious;
    }


    public function clacArea()
    {
        return pi()*pow($this->radious,2);
    }
}


class Rectangle extends Shape {
private $width;
private $height;

public function __construct($name,$height,$width)

{

    parent::__construct($name);
    $this->width=$width;
    $this->height=$height;
}

public function clacArea()
{
    return $this->width*$this->height;
}
{
    
}
}

$circle=new Circle("Circle",5);

var_dump($circle);