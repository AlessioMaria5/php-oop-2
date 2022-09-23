<?php 

require_once  __DIR__ . '/../Users.php';

class Client extends Users {

    public $budget ;
    public $CF;

    public function __construct($budget, $CF ,$username,$name,$surname) {

        parent::__construct($username,$name,$surname);

        $this->budget = $budget;
        $this->oCF = $CF;
    }
}
