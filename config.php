<?php


$print = function($class){
if(file_exists('classe/'.$class.'.php')){
    include_once('classe/'.$class.'.php');
}
};

spl_autoload_register($print);

define('HOST','localhost');
define('DATABASE','forms');
define('USER','root');
define('PASSWORD','');



?>