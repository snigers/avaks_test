<?php

// namespace classes;
use \classes\DB;
use \classes\File;

error_reporting(-1);

spl_autoload_register('autoloder');

function autoloder($class) {
  // $class = str_replace("\\", '/', $class);
  $file = __DIR__ . "/{$class}.php";
  if (file_exists($file)) {
    require_once $file;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  
    $file = new File;
    $file->checkFile();
    $date = new DB;
    var_dump($date);
  ?>
</body>
</html>