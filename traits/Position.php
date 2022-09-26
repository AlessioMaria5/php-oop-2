<?php 

trait CommonAddress {

    public $Address = "mio indirizzo"; // long and leng result 
    public $numeroCivico;  

    public function getIndirizzo(){
        return $this-> Address . '' . $this->numeroCivico ;
    }

}

?>