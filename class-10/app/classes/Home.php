<?php


namespace App\classes;


class Home
{
    public $x;
    public $y;
    public $z;
    public $mainArray = [];

    public function index()
    {
        echo '<h1 style="color: white; background-color: black; text-align: center; padding: 10px; font-family: Montserrat;">Php class 10 Array, 2d, 3d</h1>';
    }

    public  function php_array()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;

        if ($this->x > $this->y && $this->x > $this->z)
        {
            echo 'Number x is greater than number Y <br> ';
        }
        elseif ($this->y > $this->z)
        {
            echo 'Number Y is greater than number Z <br>';
        }

        elseif ($this->z > $this->x)
        {
            echo 'Number Z is greater than Number X <br>';
        }
        else
        {
            echo 'Input Valid Number';
        }

//        --------------------------
        $this->x = 20;
        $this->y = 20;
        $this->z = 30;

        switch ($this->x)
        {
            case 10:
                echo "You Inputed Number 10 <br>";
                break;
            case 20:
                echo "You Inputed Number 20 <br>";
                break;
            case 30:
                echo "You Inputed Number 30 <br>";
                break;
            default:
                echo "You Input an invalid Number";
                break;
        }

//        -------------all loops----------

        for ($this->x = 1; $this->x <=20; $this->x++)
        {
            echo $this->x . ' ';
        }
        echo '<br>';
        for ($this->x = 20; $this->x > 0; $this->x--)
        {
            echo $this->x . ' ';
        }
        echo '<br>';

        $this->x = 1;
        while ($this->x <= 20)
        {
            echo $this->x . ' ';
            $this->x++;
        }
        echo '<br>';
        $this->x = 20;
        while ($this->x >= 1)
        {
            echo $this->x . ' ';
            $this->x--;
        }


        echo '<br>';
        $this->x = 1;
        do{
            echo $this->x . ' ';
            $this->x++;
        }
        while($this->x <= 20);

        echo '<br>';
        $this->x = 20;

        do{
            echo $this->x . ' ';
            $this->x--;
        }
        while ($this->x >= 1);

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

//        -----------array-------
        $this->mainArray = [10, 20, 30, 'BITM', 10.25, true];
        foreach ($this->mainArray as $value)
        {
            echo $value . ' ';
        }
        echo "<br>";
        foreach ($this->mainArray as $key => $value)
        {
            echo $key . ' ' . $value . '<br>';
        }

        $this->mainArray = [
            'name' => 'Mazharul',
            'email' => 'mazharul@gmail.com',
            'phone' => '01638574281'
        ];
        foreach ($this->mainArray as $key => $value)
        {
            echo $key . ' = ' . $value. '<br>';
        }

        echo '<br>';

        $this->mainArray = [
            0 => [
                'name' => 'mazharul',
                'email' => 'mazharul@gmail.com',
                'phone' => '01638574281'
            ],
            1 => [
                'name' => 'Afran Mahmud',
                'email' => 'afran@gmail.com',
                'phone' => '01758478532'
            ]
        ];
        foreach ($this->mainArray as $key => $value)
        {
            foreach ($value as $keyOfSecondArray => $valueOfSecondArray)
            {
               echo $keyOfSecondArray . ' = ' . $valueOfSecondArray . '<br>';
            }
            echo '<br>';
        }

//        3 dimentional array

        $this->mainArray = [
            0 => [
                'name' => 'mazharul',
                'email' => 'mazharul@gmail.com',
                'mobile' => [
                    'personal' => '01638574281',
                    'emergency' => '01856223915'
                ]
            ],
            1 => [
                'name' => 'Afran',
                'email' => 'afran@gmail.com',
                'mobile' => [
                    'personal' => '01748587426',
                    'emergency' => '01587369874'
                ]
            ]

        ];

//        foreach ($this->mainArray as  $first_array_value)
//        {
//            foreach ($first_array_value as $second_array_value)
//            {
//                if (is_array($second_array_value))
//                {
//                   foreach ($second_array_value as $third_array_value)
//                   {
//                       echo $third_array_value . '<br>';
//                   }
//                }
//                else
//                {
//                    echo $second_array_value . '<br>';
//                }
//            }
//        }

        echo   '<br>';
        echo   '<br>';
        echo   '<br>';

        echo '<p>3 dimentional array</p>';

        foreach ($this->mainArray as $f_a_k => $f_a_v)
        {
            foreach ($f_a_v as $s_a_k => $s_a_v)
            {
                if (is_array($s_a_v))
                {
                    foreach ($s_a_v as $t_a_k => $t_a_v)
                    {
                        echo $t_a_k . ' = ' . $t_a_v . '<br>';
                    }
                }
                else
                {
                    echo $s_a_k . ' = ' . $s_a_v . '<br>';
                }


            }
            echo '<br>';
        }






    }

}

