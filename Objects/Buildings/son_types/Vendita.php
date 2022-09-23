<?php 
require_once __DIR__ . '/../Immobile.php';
class Vendita extends Immobile {

        public $selling_price;

        public function __construct($type, $category, $status , $rooms, $mq , $garden, $pool , $selling_price){

            parent::__construct($type, $category, $status, $rooms, $mq , $garden, $pool);

            $this->selling_price = $selling_price;
        }
}

?>