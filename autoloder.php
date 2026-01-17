<?php
spl_autoload_register('autoloader');
function autoloader($classname){

    $path = str_replace("\\","/",$classname ). ".php";
    if (!file_exists($path)) {
        throw new Exception("file doesnt exist : $classname . .php");
        die;
    }
    require $path;

}