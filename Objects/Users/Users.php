<?php 

class Users {

    public $username;
    public $name;
    public $surname;

    public function __construct($username,$name,$surname){

        $this->username = $username;
        $this->name = $name;
        $this->surname = $surname;
    }

}



?>