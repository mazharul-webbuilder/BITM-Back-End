<?php
    require_once "vendor/autoload.php";
    use App\classes\Home;
    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include "pages/fullNameMaker.php";
        }
    }

    if ($_POST['fullName_btn'])
    {
        echo 'hello';
    }



?>