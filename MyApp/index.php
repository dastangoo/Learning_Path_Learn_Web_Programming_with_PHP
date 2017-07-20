<?php

// function __autoload($classname) {
  // require __DIR__ . "/lib/"
  //   . str_replace("\\", DIRECTORY_SEPARATOR, $classname)
  //   . ".php";
// }

spl_autoload_register(function ($classname) {
  require __DIR__ . "/lib/"
    . str_replace("\\", DIRECTORY_SEPARATOR, $classname)
    . ".php";
});


require "MyClass.php";
$myclass = new MyClass();
var_dump($MyClass);
