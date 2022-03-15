<?php


namespace App\classes;


class MyClass
{
    public $name;
    public $age;
    public $number1;
    public $number2;
    public $number3;


    public function index()
    {
        $this->name = 'Mazharul';
        $this->age = 23;

        echo "$this->name  $this->age";
        echo "<br/>";

        $this->number1 = 10;
        $this->number2 = 20;
        $this->number3 = 30;

        if ($this->number1 > $this->number2)
        {
            echo 'Number One is greater than Number two';
        }

        elseif ($this->number2 > $this->number3)
        {
            echo 'Number two is greater than Number Three';
        }

        elseif ($this->number3 > $this->number1)
        {
            echo "Number three is greater than Number One";
        }




    }

}