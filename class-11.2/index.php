<?php
    require_once "vendor/autoload.php";
    use App\classes\Home;
    use App\classes\Test;

    $home = new  Home();
    $home ->index();

    $tst = new Test();
    $tst->tst();




?>