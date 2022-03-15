<?php
    require_once "vendor/autoload.php";
    use App\pages\MyHome;

    $my_object = new MyHome();
    $my_object->hello();

?>