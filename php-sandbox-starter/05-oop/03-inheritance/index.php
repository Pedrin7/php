<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}


class Admin extends User{
  public $level;

  public function __construct($name, $email, $level){

    $this->level = $level;
    parent::__construct($name, $email);
  }

  public function getStatus(){
    echo $this->status;
  }

}

$admin1 = new Admin('Pedro', 'teste@teste.com', 5);

// var_dump($admin1);
$admin1->getStatus();

