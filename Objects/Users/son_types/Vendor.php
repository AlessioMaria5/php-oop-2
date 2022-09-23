<?php 

require_once  __DIR__ . '/../Users.php';

class Vendor extends Users {

    public $p_iva ;
    public $office;
    public $service_zone;

    public function __construct($p_iva, $office , $service_zone,$username,$name,$surname) {

        parent::__construct($username,$name,$surname);

        $this->p_iva = $p_iva;
        $this->office = $office;
        $this->service_zone = $service_zone;


    }
}

?>