<?php
echo '#5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
Директория и искомое слово задаются как параметры функции.';


echo '<hr>';

include 'functions_forms.php';


searchTree('C:\Users\slv19\PhpstormProjects\Lern PHP\functions_forms_tasks\5', "work.*");

?>