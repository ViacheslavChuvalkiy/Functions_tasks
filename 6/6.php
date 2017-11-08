<?php

define('DS', DIRECTORY_SEPARATOR);

echo '#6. Создать страницу, на которой можно загрузить несколько фотографий в галерею. 
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.</p>';


echo '<hr>';

include "Home work 17.10.php";
// Пути загрузки файлов
$path = 'C:' . DS . 'Users' . DS . 'slv19' . DS . 'PhpstormProjects' . DS . 'Lern PHP' . DS . 'functions_forms_tasks' . DS . '6' . DS . 'Galery' . DS . 'img';
$tmp_path = 'C:' . DS . 'Users' . DS . 'slv19' . DS . 'PhpstormProjects' . DS . 'Lern PHP' . DS . 'functions_forms_tasks' . DS . '6' . DS . 'Galery' . DS . 'img';
// Массив допустимых значений типа файла
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');

// Максимальный размер файла
$size = 1024000;

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Проверяем тип файла
    if (!in_array($_FILES['picture']['type'], $types))
        die('Запрещённый тип файла. <a href="?">Попробовать другой файл?</a>');

// Проверяем размер файла
    if ($_FILES['picture']['size'] > $size)
        die('Слишком большой размер файла. <a href="?">Попробовать другой файл?</a>');
// Загрузка файла и вывод сообщения
    if (!@copy($_FILES['picture']['tmp_name'], $path . $_FILES['picture']['name']))

        echo 'Что-то пошло не так';
    else

        $arr = glob('C:' . DS . 'Users' . DS . 'slv19' . DS . 'PhpstormProjects' . DS . 'Lern PHP' . DS . 'functions_forms_tasks' . DS . '6' . DS . 'Galery' . DS . 'img' . DS . '*.*');
    foreach ($arr as $v) {
        $imgWebPath = 'http://localhost/images'; // прописать тут путь к картинкам
        $imgFile = basename($v);
        echo ' <tb>  <img  src="' . $imgWebPath . '/' . $imgFile . '" width="200" height="200" /> </tb> ';
    }


}


?>
