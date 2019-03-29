<?php

//spl_autoload_register(function ($clase) {
//    echo "autoload de $clase<br>";
//    include $clase . '.php';
//});

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

include 'model\Bd.php';
$bd = model\Bd::getInstance();


$result = $bd->query("select * from preguntas");
var_dump($result);

