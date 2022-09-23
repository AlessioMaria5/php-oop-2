<?php 
    
class Immobile {

   public $status = "", $category = "", $type = ""; // STRINGS
   public $rooms = 1, $mq = 1; // INT
   public $garden = false , $pool = false; // BOOLEAN

   public function __construct($type,$category,$status,$rooms,$mq,$garden,$pool) 
   {
       $this->type = $type;
       $this->category = $category;
       $this->status = $status;
       $this->rooms = $rooms;
       $this->mq = $mq;
       $this->rooms = $rooms;
       $this->garden = $garden;
       $this->pool = $pool;
   }
    
   
}

?>