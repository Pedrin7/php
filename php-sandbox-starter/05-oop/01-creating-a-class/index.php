<?php

class User{

    // Properties
    public $name;
    public $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login(){
        echo $this->name . ' log in!';
    }

}

// Instantiate a new object

// a linha abaixo só da certo por causa do __contruct
$user1 = new User('Pedro', 'teste@teste.com');

// var_dump($user1);

// var_dump($user1);

$user1->login(); 