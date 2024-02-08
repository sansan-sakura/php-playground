<?php

class User
{
  // Properties
  public $name;
  public $email;
  private $status="active";
  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;

  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  public function getStatus(){
   echo $this ->status;
  }


  public function setStatus($status){
    $this->status=$status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

var_dump($user2);


class Admin extends User {
    public $level;


    public function __construct($name,$email,$level)
    {

        $this->level=$level;
        parent::__construct($name,$email);

    }
}

$admin1=new Admin("Tom","tom@gmail.com",6);

var_dump($admin1);


class MathUtility{
    public static $pi=3.14;

    public static function add (...$num)
    {
        return array_sum($num);
    }
}

echo MathUtility::$pi;
echo MathUtility::add(1,2,2,3,3,4);