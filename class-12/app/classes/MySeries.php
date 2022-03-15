<?php


namespace App\classes;
class MySeries
{
    private $starting_number;
    private $ending_number;
    private $series;

   public function __construct($post = null)
   {
       $this->starting_number = $post['starting_number'];
       $this->ending_number   = $post['ending_number'];
   }

   public function mySeries()
   {
       for ($i=$this->starting_number; $i <= $this->ending_number; $i++)
       {
           echo $i;
       }
   }

}