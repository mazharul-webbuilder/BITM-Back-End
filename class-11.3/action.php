<?php

    require_once "vendor/autoload.php";
    use App\classes\Name;
    use App\classes\MyArray;

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
    }
    else if(isset($_POST['full_name_btn']))
    {
        $name = new Name($_POST);
        $name->fullName();
    }

    else if (isset($_POST['array']))
    {
        $myArray = new MyArray();
        $myArray ->array_();
    }
?>