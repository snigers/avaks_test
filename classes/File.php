<?php

namespace classes;

class File
{
  public $arr = null;

  function checkFile() {
    // Проверка есть ли файлы в папке
    $files = glob("img/*.*");
    if (empty($files)) {
      echo "Пусто";
    } else {
      echo $this->arrFile($files);
    }

  }

  public function arrFile($files) {
    // Если файлы в папке существуют, то добавление их в массив
    $i = 0;
    foreach ($files as $file) {
      echo "<a href='{$file}'>$file</a><br/>"; //del
      $name = $this->getNameFile($file);

      $arr[$i] = $name;
      $i++;
    }
    var_dump($arr);
  }

  public function addFile() {
    // Добавление нового файла в папку и базу данных
  }

  public function changeNameFile() {
    // Изменение имени файла
 
  }

  public function getNameFile($file) {
    // Получение имени файла и сохранение его в массив
    $name = pathinfo($file);
    $name = basename($file, '.' . $name['extension']);
    echo "$name<br/>"; //del
    return $name;
  }

  /* function ArrFile() {

  } */

  public function checkSizeFile($file) {
    // Проверка размера файла

    return $str;
  }

  public function viewSizeFile($str) {
    // Вывод размера файла
  }


}