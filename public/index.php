<?php
//Including autoload PSR-4
require '../vendor/autoload.php';
//Define path of root directory for getting mock files
define("__ROOT__", dirname(__DIR__));
//Setup global error handler
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
});
//Run application
$main = new \App\MainClass();
print_r($main->run());