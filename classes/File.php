<?php

namespace classes;

class File
{
  public $arr = null;

  function checkFile() {
    // Проверка есть ли файлы в папке
    $files = $this->getArrFileFolder();
    if (empty($files)) {
      echo "Пусто";
    } else {
      // echo 
      $this->arrFile($files);
    }
  }

  function getArrFileFolder() {
    // Получаем массив файлов
    $result = glob("img/*.*");
    return $result;
  }

  public function arrFile($files) {
    // Если файлы в папке существуют, то добавление их в массив
    $i = 0;
    foreach ($files as $file) {
      echo "<a href='{$file}'>$file</a><br/>"; //del
      $name = $this->getNameFile($file);
      echo $this->checkSizeFile($file) . "<br>";

      $arr[$i] = $name;
      $i++;
    }
    // var_dump($arr);
    return $arr;
  }

  public function addFile() {
    // Добавление нового файла в папку и базу данных
  }

  public function changeNameFile($lastname, $newname) {
    // Изменение имени файла
    $files = $this->getArrFileFolder();
    if (!empty($files)) {
      $i = 0;
      foreach ($files as $file) {
        if (stripos($file, $lastname) !== false) {
          // Если старое имя попадается, то изменяем его на новое
          // Переименновываем файл, записываем в массив и в БД
          $name = "img/{$newname}.jpg";
          rename($file, $name);
        }
      }
    }
  }

  public function getNameFile($file) {
    // Получение имени файла и сохранение его в массив
    $name = pathinfo($file);
    $name = basename($file, '.' . $name['extension']);
    // var_dump($name);
    echo "$name<br/>"; //del
    return $name;
  }

  function viewFileName($file) {

  }

  /* function ArrFile() {

  } */

  public function checkSizeFile($file) {
    // Проверка размера файла
    // echo $file;
    $filesize = filesize($file);

    if ($filesize > 1024) {
      $filesize = ($filesize / 1024);
      
      if  ($filesize > 1024) {
        $filesize = round($filesize, 1);
        return $filesize . " Мб";
      }

      $filesize = round($filesize, 1);
      return $filesize . " Кб";
    }

    $filesize = round($filesize, 1);
    return $filesize . " Байт";
  }

  public function viewSizeFile() {
    // Вывод размера файлов в папке (Если нужно вывести во вне)
    $files = $this->getArrFileFolder();
    foreach ($files as $file) {
      echo $this->checkSizeFile($file) . "<br>";
      // echo $str;
    }
  }


}