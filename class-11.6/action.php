<?php
    require_once "vendor/autoload.php";
    use App\classes\NameMaker;

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include "pages/home.php";
        }
    }
    elseif ($_POST['nmBtn'])
    {
        $nameMaker  = new NameMaker($_POST);
        $myFullName = $nameMaker->fullNameMaker();

        include 'pages/home.php';
    }




?>