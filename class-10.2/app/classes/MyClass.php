<?php


namespace App\classes;


class MyClass
{
    public $array = [];

    public  function  myFunction()
    {
        $this->array =[
            'name'      =>       'Mazharul',
            'email'     =>       'mazharul@gmaol.com',
            'mobile'    =>        '0163857481'
        ];

        foreach ($this->array as $key => $value)
        {
            echo $key . ' = ' . $value . '<br>';
        }

        foreach ($this->array as $value)
        {
            echo $value . '<br>';
        }


        $this->array = [
            0 => [
                "name"  => 'Afran Mahmud',
                'email' => 'afran@gmail.com',
                'mobile'=> '0163587422582'
            ],
            1 => [
                'name'  => 'Mazharul Islam',
                'email' => 'mazharul@gmail.com',
                'phone' => '01258125235822'
            ],
            2 => [
                'name'  =>  'Habibur Rahman',
                'email' =>  'habib@gmail.com',
                'phone' =>  '01587423698525'
            ],
        ];
        foreach ($this->array as $first_array_key => $first_array_value)
        {
            foreach ($first_array_value as $second_array_key => $second_array_value)
            {
                echo $second_array_key . ' = ' . $second_array_value . '<br>';
            }
            echo '<br>';
        }

        $this->array = [
            0 => [
                "name"  => 'Afran Mahmud',
                'email' => 'afran@gmail.com',
                'mobile'=> [
                    'personal' => '0125874258',
                    'emergency' => '012582535'
                ]
            ],
            1 => [
                'name'  => 'Mazharul Islam',
                'email' => 'mazharul@gmail.com',
                'phone' => [
                    'personal'  => '01258125235822',
                    'emergency' =>  "0125852158225"
                ]
            ],
            2 => [
                'name'  =>  'Habibur Rahman',
                'email' =>  'habib@gmail.com',
                'phone' =>  [
                    'personal'  => '01587423698525',
                    'emergency' => '01478963258741'
                ]
            ]
        ];
        foreach ($this->array as $first_array_key => $first_array_value)
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
                    echo $second_array_key . ' = ' . $second_array_value . '<br>';
                }
            }
            echo '<br>';
        }



    }



}