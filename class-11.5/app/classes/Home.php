<?php


namespace App\classes;


class Home
{
    public $first_name;
    public $last_name;
    public $full_name;
    public function __construct($post = null)
    {
        $this->first_name = $post['first_name'];
        $this->last_name = $post['last_name'];
    }

    public function fullName()
    {
        $this->first_name = $this->first_name. ' ' .$this->last_name;
        echo $this->full_name;
    }

    public function index()
    {
        header('Location: action.php?page=home');
    }

}