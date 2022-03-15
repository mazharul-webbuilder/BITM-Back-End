<?php


namespace App\classes;


class Name
{
    public $firstName;
    public $lastName;
    public $fullName;

    public function __construct($post = null)
    {
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];
    }

    public function fullName()
    {
        $this->fullName = $this->firstName. ' ' .$this->lastName;
        echo $this->fullName;
    }

}