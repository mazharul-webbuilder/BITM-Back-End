<?php


namespace App\classes;


class MyClass
{
    public function index()
    {
        header('location: action.php?page=home');
    }
}