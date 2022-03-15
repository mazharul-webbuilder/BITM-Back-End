<?php
require_once "vendor/autoload.php";
use App\classes\FullName;

    if(isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
    }
    else if(isset($_POST['fullName_btn']))
    {

        $fullNameMaker = new FullName($_POST);
        $fullNameMaker->fullNameMaker();

    }





?>