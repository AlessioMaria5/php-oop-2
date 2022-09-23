<?php 

class Immobile {

   public $type = "";
   public $category = "";
   public $status = "";
   public $rooms = 1;
   public $mq = 1;
   public $garden = false , $pool = false;

   public function __construct($type,$category,$status,$rooms,$mq,$garden,$pool) 
   {
       $this->type = $type;
       $this->category = $category;
       $this->status = $status;
       $this->rooms = $rooms;
       $this->mq = $mq;
       $this->rooms = $rooms;
       $this->garden = $garden;
       $this->tpool = $pool;
   }
    
}

?>