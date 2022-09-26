<?php 
require_once __DIR__ . '/../Immobile.php';
class Affitto extends Immobile {

        public $rentYear;

        public function __construct($type, $category, $status , $rooms, $mq , $garden, $pool , $rentYear){

            parent::__construct($type, $category, $status, $rooms, $mq , $garden, $pool);

            $this->rentYear = $rentYear;
        }
}

?>