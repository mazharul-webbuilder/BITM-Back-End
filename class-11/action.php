<?php

    require_once "vendor/autoload.php";
    use App\classes\MyClass;



    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
    }

    else if($_POST['full_name_btn'])
    {
        $myClass = new MyClass($_POST);
        $myClass->makeFullName();
    }



?>