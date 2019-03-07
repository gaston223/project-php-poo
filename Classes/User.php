<?php
namespace Classes;

class User{

    private $email;

    public function getEmail():string{
        return $this->email;
    }

    public function setEmail(string $email ):void{
        $this->email=$email;
    }   
}