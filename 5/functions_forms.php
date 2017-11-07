<?php

function searchTree($dir, $searchFiles) {
    $files1 = scandir($dir);
    foreach (glob("$searchFiles") as $filename) {
       printf($filename);
       echo  '<br>';
    }
    if (empty($filename)) {
        echo 'Файла с таким именем или расширением, нет!';
    }
};

