<?php
    require_once  "vendor/autoload.php";
    use App\classes\Home;

    $home = new Home();
    $home ->index();

    $php = new Home();
    $php ->php_array();


?>