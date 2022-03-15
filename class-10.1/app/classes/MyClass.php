<?php


namespace App\classes;


class MyClass
{
    public $x;
    public $y;
    public $myArray = [];


    public function index()
    {
        $this->x = 20;
        $this->y = 10;

        if(is_string($this->y) || is_string($this->x))
        {
            echo 'please enter number only. <br>';
        }
        elseif ($this->x <= 0 || $this->y <= 0)
        {
            echo 'please enter positive number <br>';
        }
        elseif($this->x < $this->y)
        {
            echo 'Number y is greater than number x. <br>';
        }
        elseif ($this->x > $this->y)
        {
            echo 'Number x is greater than number y <br>';
        }
        elseif ($this->x == $this->y)
        {
            echo 'Number X is Equals to Number Y <br>';
        }
        else
        {
            echo 'your enterd value is invalid. Try with valid number';
        }


//        sitch statement

        $this->x = 90;
        switch ($this->x)
        {
            case 33:
                echo 'Your entered 33';
                break;
            case 40:
                echo 'you entered 40';
                break;
            case 90:
                echo 'You Entered 90 <br>';
                break;

            default:
                echo "You don,t input anything.";
                break;
        }

        for ($this->x = 1; $this->x <= 20; $this->x++)
        {
            echo $this->x . ' ';
        }

        echo "<br>";echo "<br>";


        for ($this->x = 20; $this->x >= 1; $this->x--)
        {
            echo $this->x . ' ';
        }

        echo "<br>";echo "<br>";

        while ($this->x <= 20)
        {
            echo $this->x . ' ';
            $this->x++;
        }

        echo "<br>";echo "<br>";

        $this->x = 20;
        while ($this->x > 0)
        {
            echo $this->x . ' ';
            $this->x--;
        }

        echo "<br>";echo "<br>";


        do
        {
            echo $this->x . ' ';
            $this->x++;
        }
        while($this->x <= 20);


        echo "<br>";echo "<br>";

        do
        {
            echo $this->x . ' ';
            $this->x--;
        }
        while($this->x > 0);
        echo "<br>";echo "<br>";

//        foreach and array

//        single array / one dimension array
        $this->myArray = [10, 20, 30, 'BITM', 100.25, true];

//        print only value
        foreach ($this->myArray as $arrayValue)
        {
            echo $arrayValue . ' ';
        }


        echo "<br>";

//        print value with index
        foreach ($this->myArray as $arrayKey => $arry_value)
        {
            echo $arrayKey . ' ' . $arry_value . '<br>';
        }


        echo "<br>";echo "<br>";

//        set index and value on array and print with both
        $this->myArray = [
            'name' => 'Mazharul',
            'email' => 'abc@gmail.com',
            'mobile' => '12345'
        ];

        foreach ($this->myArray as $value)
        {
            echo ' = ' . $value;
        }



        echo "<br>";
        echo "<br>";



        foreach ($this->myArray as $key => $value)
        {
            echo $key . ' = ' . $value . '<br>';
        }echo '<br>';echo '<br>';

//        two dimensional array
        $this->myArray = [
            0 => [
                'name' => 'ripon',
                'email' => 'email.gmail.com',
                'mobile' => '123456'
            ],
            1 => [
                'name' => 'Afran',
                'email' => 'afran.gmail.com',
                'mobile' => '7412589'
            ],
            2 => [
                'name' => 'Saimon',
                'email' => 'saimon.gmail.com',
                'mobile' => '587963'
            ],
            3 => [
                'name' => 'Fatema',
                'email' => 'fatema.gmail.com',
                'mobile' => '7412856'
            ],
            4 => [
                'name' => 'Selim',
                'email' => 'Selim.gmail.com',
                'mobile' => '587412369'
            ]

        ];

        foreach ($this->myArray as $l1_array_key => $l1_array_value)
        {
            foreach ($l1_array_value as  $l2_array_key =>  $l2_array_value)
            {
                echo $l2_array_key . ' = ' . $l2_array_value . '<br>';
            }
            echo '<br>';
        }


//        3d array
            $this->myArray = [
                0 => [
                    'name' => 'mazharul',
                    'email' => 'abc@gmail.com',
                    'mobile' => [
                        'personal' => '01258741',
                        'emergency' => '1025474'
                    ]
                ],
                1 => [
                    'name' => 'saimon islam',
                    'email' => 'saimon@gmail.com',
                    'mobile' => [
                        'personal' => '0172741',
                        'emergency' => '1074474'
                    ]
                ],
                2 => [
                    'name' => 'afran',
                    'email' => 'afaerabc@gmail.com',
                    'mobile' => [
                        'personal' => '01258741',
                        'emergency' => '1025474'
                    ]
                ],
                3 => [
                    'name' => 'Lammin',
                    'email' => 'aLamminbc@gmail.com',
                    'mobile' => [
                        'personal' => '01258741',
                        'emergency' => '1025474'
                    ]
                ]
            ];

        foreach ($this->myArray as $frst_array_key => $first_array_value)
        {
            foreach ($first_array_value as $second_array_key => $second_array_value)
            {
                if (is_array($second_array_value))
                {
                    foreach ($second_array_value as $third_array_key => $third_array_value)
                    {
                        echo $third_array_key . ' = ' . $third_array_value . '<br>';
                    }
                }
                else
                {
                    echo $second_array_key . ' = ' .$second_array_value . "<br>";
                }
            }
            echo '<br>';
        }


        echo '<pre>';
        print_r($this->myArray);

        echo '<pre>';
        var_dump($this->myArray);







    }

}