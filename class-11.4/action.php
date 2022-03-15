<?php

    require_once "vendor/autoload.php";

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
    }
    else if($_POST['fullName_btn'])
    {
        $formData = new \App\classes\FormData($_POST);
        $formData ->makeFullName();
    }



?>