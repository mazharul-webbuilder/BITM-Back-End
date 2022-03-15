<?php


namespace App\classes;
class MyClass
{
    public $firstName;
    public $lastName;
    public $fullName;

    public function __construct($post = null)
    {
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];

    }

    public function index()
    {
        header('location: action.php?page=home');
    }

    public function makeFullName()
    {
        $this->fullName = $this->firstName. ' ' .$this->lastName;
        echo $this->fullName;
    }

}