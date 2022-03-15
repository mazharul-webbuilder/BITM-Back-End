<?php


namespace App\classes;


class FullNameMaker
{
    public $firstName;
    public $lastName;
    public $fullName;
    public function __construct($post = null)
    {
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];
    }

    public function fullNameMaker()
    {
        $this->fullName = $this->firstName. ' ' .$this->lastName;
        echo $this->fullName;
    }

}