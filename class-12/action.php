<?php
    require_once "vendor/autoload.php";
    use App\classes\Calculator;

    if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {   $myResult = null;
            include 'pages/home.php';
        }
        elseif ($_GET['page'] == 'series')
        {
            include "pages/series.php";
        }
    }

    elseif ($_POST['calBtn'])
    {
        $calOb    = new Calculator($_POST);
        $myResult = $calOb->myCalculator();
        include "pages/home.php";

    }

    elseif ($_POST['seriesBtn'])
    {
        $seriesOB = new \App\classes\MySeries($_POST);
        $seriesOB-> mySeries();

    }


?>