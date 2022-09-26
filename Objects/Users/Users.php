<?php 

require_once __DIR__ . '/../../traits/Position.php';

class Users {

    use CommonAddress;

    public $username;
    public $name;
    public $surname;

    public function __construct($username,$name,$surname){

        $this->username = $username;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getInfo(){

        return 
        $this->name .'<br>'. 
        $this->surname . '<br>';
        
    }

}



?>