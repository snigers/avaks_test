<?php
namespace classes;

use \classes\DB;

class DB 
{
  public $DB;

/*   public function __construct() {
    var_dump(self::class);
  } */
  public function __construct() {
    $DB = @mysqli_connect('localhost', 'root', '', 'avaks') or die('Ошибка соединения с БД');
    if (!$DB) die(mysqli_connect_error());

    mysqli_set_charset($DB, "utf8") or die('Не установленна кодировка');

    $res = mysqli_query($DB, "SELECT id, name, text, date FROM avaksTest ORDER BY id DESC");
    // echo mysqli_num_rows($res);

    if ($res) {
      $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
    } else {
      // echo "В БД нет данных";
    }
    
  }

  function checkFile($arr) {
    //Проверка массива файлов на наличие в БД
    $res = false;

    return $res;
  }

  function addFullFile() {
    //Если файлов нет в БД, то добавить массив файлов
    $fileClass = new File;
    $files = $fileClass->getArrFileFolder();
    foreach ($files as $file) {
      $name = $fileClass->getNameFile($file);
      
    }
  }

  function addNewFileArr($filename) {
    //Если в массиве файлы есть, но не все, то тут по одному добавляются в конец массива
    // Либо добавление новых файлов

    return '';
  }

  public function chengeNameFile($str) {
    // Изменение имени файла в БД, запись времени изменения
  }

  function changeDate() {
    // Запись или изменения времени 
  }


}