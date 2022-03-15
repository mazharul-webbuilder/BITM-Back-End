<?php


namespace App\classes;


class MyArray
{
   public $array = [];
   public function array_()
   {
       $this->array = [
           0 => [
               'name' => 'Mazharul',
               'email' => 'mazharul@gmail.com'
           ],
           1 => [
               'name' => 'afran mahmud',
               'email' => 'afran@gmail.com'
           ]
       ];
       foreach ($this->array as $first_key => $first_value)
       {
           foreach ($first_value as $second_key => $second_value)
           {
               echo $second_key. ' = ' .$second_value.'<br>';
           }
       }
   }
}