<?php 
require_once __DIR__ . '/../Immobile.php';
class Affitto extends Immobile {

        public $rent_year;

        public function __construct($type, $category, $status , $rooms, $mq , $garden, $pool , $rent_year){

            parent::__construct($type, $category, $status, $rooms, $mq , $garden, $pool);

            $this->rent_year = $rent_year;
        }
}

?>