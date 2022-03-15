<?php
require_once "vendor/autoload.php";
use App\classes\FullNameMaker;


    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
    }
    else if(isset($_POST['make_fullName']))
    {
        $fullNameMaker = new FullNameMaker($_POST);
        $fullNameMaker->fullNameMaker();
    }

?>